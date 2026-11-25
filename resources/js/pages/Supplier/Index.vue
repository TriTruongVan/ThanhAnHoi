<script setup lang="ts">
import Button from "primevue/button";
import AutoComplete from "primevue/autocomplete";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import Paginator from "primevue/paginator";
import { computed, onMounted, ref, watch } from "vue";
import { useRouter } from "vue-router";
import { useToast } from "primevue/usetoast";
import { getSupplier } from "../../../services/supplierService";

const router = useRouter();
const toast = useToast();

const loading = ref(false);
const supplierList = ref<any[]>([]);
const page = ref(1);
const rows = ref(20);
const sortField = ref<string>("id");
const sortOrder = ref<"asc" | "desc">("desc");

// --- Tìm kiếm ---
const searchText = ref<any>(""); // string khi gõ, object khi chọn gợi ý
const keyword = ref(""); // từ khóa lọc bảng
const selectedId = ref<number | null>(null); // supplier được chọn từ gợi ý
const suggestions = ref<any[]>([]);
const currentQuery = ref("");

onMounted(async () => {
    await loadData();
});

const loadData = async () => {
    loading.value = true;
    try {
        const supplierResp = await getSupplier();
        console.log('====================================');
        console.log(supplierResp);
        console.log('====================================');
        supplierList.value = supplierResp.data.data;
    } catch (error) {
        toast.add({
            severity: "error",
            summary: "Lỗi",
            detail: "Tải danh sách nhà cung cấp thất bại",
            life: 3000,
        });
    } finally {
        loading.value = false;
    }
};

const matchSupplier = (s: any, q: string) =>
    [s.name, s.phone, s.address].some((v) =>
        String(v ?? "")
            .toLowerCase()
            .includes(q),
    );

const searchSuppliers = (event: { query: string }) => {
    const q = event.query.trim().toLowerCase();
    currentQuery.value = q;
    suggestions.value = q
        ? supplierList.value.filter((s) => matchSupplier(s, q)).slice(0, 10)
        : [];
};

const isPhoneNumber = (query: string) => {
    if (!query) return false;
    const digitCount = (query.match(/\d/g) || []).length;
    return digitCount >= query.length * 0.7;
};

const getOptionLabel = (option: any) =>
    isPhoneNumber(currentQuery.value) ? option.phone : option.name;

// Gõ text -> lọc bảng theo từ khóa; chọn gợi ý -> chỉ hiện supplier đó
watch(searchText, (val) => {
    if (val && typeof val === "object") {
        selectedId.value = val.id;
    } else {
        selectedId.value = null;
        keyword.value = String(val ?? "").trim();
    }
    page.value = 1;
});

// Lọc dữ liệu cho bảng
const filteredList = computed(() => {
    if (selectedId.value !== null) {
        return supplierList.value.filter((s) => s.id === selectedId.value);
    }
    const q = keyword.value.toLowerCase();
    if (!q) return supplierList.value;
    return supplierList.value.filter((s) => matchSupplier(s, q));
});

// Sắp xếp
const sortedList = computed(() => {
    const list = [...filteredList.value];
    const field = sortField.value;
    const dir = sortOrder.value === "asc" ? 1 : -1;
    return list.sort((a, b) => {
        const x = a[field] ?? "";
        const y = b[field] ?? "";
        if (typeof x === "number" && typeof y === "number")
            return (x - y) * dir;
        return String(x).localeCompare(String(y), "vi") * dir;
    });
});

const total = computed(() => sortedList.value.length);

// Phân trang
const pagedList = computed(() => {
    const start = (page.value - 1) * rows.value;
    return sortedList.value.slice(start, start + rows.value);
});

const onPageChange = (event: any) => {
    page.value = event.page + 1;
    rows.value = event.rows;
};

const onSort = (event: any) => {
    if (event.sortOrder === null) {
        sortField.value = "id";
        sortOrder.value = "desc";
    } else {
        sortField.value = event.sortField;
        sortOrder.value = event.sortOrder === 1 ? "asc" : "desc";
    }
    page.value = 1;
};

const editSupplier = (event: any) => {
    router.push({ name: "SupplierDetail", params: { id: event.data.id } });
};
</script>

<template>
    <div
        class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-gray-800 dark:to-slate-900 p-6"
    >
        <div class="max-w-7xl mx-auto">
            <!-- Header Section -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 p-8 mb-6"
            >
                <div class="flex justify-between items-center">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shadow-lg"
                            >
                                <i class="pi pi-truck text-white text-xl"></i>
                            </div>
                            <div>
                                <h1
                                    class="font-bold text-3xl bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent"
                                >
                                    Quản lý Nhà cung cấp
                                </h1>
                                <p
                                    class="text-sm text-gray-500 dark:text-gray-400 mt-1"
                                >
                                    Quản lý và theo dõi thông tin nhà cung cấp
                                </p>
                            </div>
                        </div>
                    </div>
                    <Button
                        label="Tạo nhà cung cấp"
                        icon="pi pi-plus"
                        @click="router.push('supplier/create')"
                        class="p-button-rounded !bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 dark:text-white"
                    />
                </div>

                <!-- Search Bar -->
                <div class="mt-6">
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none z-10"
                        >
                            <i class="pi pi-search text-gray-400"></i>
                        </div>
                        <AutoComplete
                            v-model="searchText"
                            :suggestions="suggestions"
                            :option-label="getOptionLabel"
                            @complete="searchSuppliers"
                            class="w-full"
                            input-class="w-full !pl-12 !pr-4 !py-3 !rounded-xl !border-2 !border-gray-200 dark:!border-gray-600 focus:!border-indigo-500 dark:focus:!border-indigo-400 !shadow-sm"
                            placeholder="Tìm kiếm theo tên, số điện thoại hoặc địa chỉ..."
                        >
                            <template #option="{ option }">
                                <div
                                    class="p-3 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-colors"
                                >
                                    <div
                                        class="font-medium text-gray-900 dark:text-white"
                                    >
                                        {{ option.name }}
                                    </div>
                                    <div
                                        class="text-sm text-gray-600 dark:text-gray-300 mt-1"
                                    >
                                        {{ option.phone }}
                                    </div>
                                    <div
                                        class="text-xs text-gray-500 dark:text-gray-400 truncate mt-1"
                                    >
                                        {{ option.address }}
                                    </div>
                                </div>
                            </template>
                        </AutoComplete>
                    </div>
                </div>
            </div>

            <!-- Data Table Card -->
            <div
                class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 overflow-hidden"
            >
                <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center"
                            >
                                <i
                                    class="pi pi-list text-indigo-600 dark:text-indigo-400"
                                ></i>
                            </div>
                            <div>
                                <h2
                                    class="text-lg font-semibold text-gray-900 dark:text-white"
                                >
                                    Danh sách Nhà cung cấp
                                </h2>
                                <p
                                    class="text-sm text-gray-500 dark:text-gray-400"
                                >
                                    {{ total }} nhà cung cấp trong hệ thống
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto px-4 py-2">
                    <DataTable
                        :value="pagedList"
                        :loading="loading"
                        data-key="id"
                        class="custom-datatable"
                        row-hover
                        selection-mode="single"
                        :sort-field="sortField"
                        :sort-order="sortOrder === 'asc' ? 1 : -1"
                        :removable-sort="true"
                        @sort="onSort"
                        @row-click="editSupplier"
                    >
                        <template #empty>
                            <div
                                class="py-10 text-center text-gray-500 dark:text-gray-400"
                            >
                                <i class="pi pi-inbox text-3xl mb-2"></i>
                                <p>Không có nhà cung cấp</p>
                            </div>
                        </template>

                        <Column
                            field="id"
                            header="ID"
                            :sortable="true"
                            style="min-width: 140px"
                        >
                            <template #body="{ data }">
                                <div class="flex items-center gap-2 py-2">
                                    <div
                                        class="px-4 py-2.5 rounded-lg bg-gradient-to-br from-blue-50 to-cyan-50 dark:from-blue-900/30 dark:to-cyan-900/30 border-2 border-blue-200 dark:border-blue-700 shadow-sm"
                                    >
                                        <span
                                            class="text-sm font-mono font-bold text-blue-700 dark:text-blue-300"
                                        >
                                            #{{ data.id }}
                                        </span>
                                    </div>
                                </div>
                            </template>
                        </Column>

                        <Column
                            field="name"
                            header="Tên nhà cung cấp"
                            :sortable="true"
                            style="min-width: 300px"
                        >
                            <template #body="{ data }">
                                <div class="flex items-center gap-4 py-2">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center shadow-md flex-shrink-0"
                                    >
                                        <i
                                            class="pi pi-building text-white text-base"
                                        ></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div
                                            class="font-semibold text-gray-900 dark:text-white text-base"
                                        >
                                            {{ data.name }}
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </Column>

                        <Column
                            field="phone"
                            header="Số điện thoại"
                            :sortable="true"
                            style="min-width: 200px"
                        >
                            <template #body="{ data }">
                                <div class="py-2">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-green-100 dark:bg-green-900/30 flex items-center justify-center flex-shrink-0"
                                        >
                                            <i
                                                class="pi pi-phone text-green-600 dark:text-green-400 text-sm"
                                            ></i>
                                        </div>
                                        <span
                                            class="text-sm font-medium text-gray-700 dark:text-gray-300 font-mono"
                                        >
                                            {{ data.phone || "-" }}
                                        </span>
                                    </div>
                                </div>
                            </template>
                        </Column>

                        <Column
                            field="address"
                            header="Địa chỉ"
                            :sortable="true"
                            style="min-width: 280px"
                        >
                            <template #body="{ data }">
                                <div class="py-2 flex items-center gap-2">
                                    <div
                                        class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-900/30 flex items-center justify-center flex-shrink-0"
                                    >
                                        <i
                                            class="pi pi-map-marker text-orange-600 dark:text-orange-400 text-xs"
                                        ></i>
                                    </div>
                                    <span
                                        class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2 leading-relaxed"
                                    >
                                        {{ data.address || "-" }}
                                    </span>
                                </div>
                            </template>
                        </Column>

                        <Column
                            field="ingredients"
                            header="Nguyên liệu"
                            :sortable="true"
                            style="min-width: 300px"
                        >
                            <template #body="{ data }">
                                <div class="flex items-center gap-4 py-2">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 flex items-center justify-center shadow-md flex-shrink-0"
                                    >
                                        <i
                                            class="pi pi-building text-white text-base"
                                        ></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex flex-wrap gap-2">
                                            <span
                                                v-for="ingredient in data.ingredients"
                                                :key="ingredient.id"
                                                class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-sm"
                                            >
                                                {{ ingredient.name }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </Column>
                    </DataTable>
                </div>

                <!-- Pagination Section -->
                <div
                    class="p-6 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800/50"
                >
                    <div
                        class="flex flex-col sm:flex-row justify-between items-center gap-4"
                    >
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-lg bg-indigo-100 dark:bg-indigo-900/30 flex items-center justify-center"
                            >
                                <i
                                    class="pi pi-info-circle text-indigo-600 dark:text-indigo-400 text-sm"
                                ></i>
                            </div>
                            <span
                                class="text-sm font-medium text-gray-700 dark:text-gray-300"
                            >
                                Hiển thị
                                <span
                                    class="text-indigo-600 dark:text-indigo-400 font-bold"
                                >
                                    {{ total === 0 ? 0 : (page - 1) * rows + 1 }}
                                </span>
                                đến
                                <span
                                    class="text-indigo-600 dark:text-indigo-400 font-bold"
                                >
                                    {{ Math.min(page * rows, total) }}
                                </span>
                                trong tổng số
                                <span
                                    class="text-indigo-600 dark:text-indigo-400 font-bold"
                                >
                                    {{ total }}
                                </span>
                                nhà cung cấp
                            </span>
                        </div>
                        <Paginator
                            :rows="rows"S
                            :total-records="total"
                            :rows-per-page-options="[10, 20, 30, 50, 100]"
                            :first="(page - 1) * rows"
                            @page="onPageChange"
                            class="custom-paginator"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>