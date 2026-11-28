<script setup>
import { useToast } from 'primevue/usetoast';
import { onMounted, ref } from 'vue';
import { getIngredient } from '../../../services/ingredientService'
import AutoComplete from 'primevue/autocomplete';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Paginator from 'primevue/paginator';
import Button from 'primevue/button';

const loading = ref(false)
const toast = useToast()
const listIngredient = ref([])
const sortField = ref("created_at")
const sortOrder = ref("desc")
const page = ref(1)
const rows = ref(20)
const total = ref(0)
onMounted( async () => {
    await loadData()
});

const loadData = async (pageNumber = page.value, pageSize = rows.value) =>{
    loading.value = true
    try {
        const ingredientResp = await getIngredient(pageNumber, pageSize)
        const pagination = ingredientResp.data.data
        listIngredient.value = pagination.data
        total.value = pagination.total
        console.log(listIngredient.value)
    } catch (error) {
        toast.add({
            severity: 'error',
            summary: 'Lỗi',
            detail: 'Không tải được nguyên liệu. Vui lòng thử lại.',
            life: 4000
        });
    } finally {
        loading.value = false
    }
}
const onPageChange = async (event) => {
    page.value = event.page + 1
    rows.value = event.rows

    await loadData(page.value, rows.value)
}
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
                                    Quản lý nguyên liệu
                                </h1>
                                <p
                                    class="text-sm text-gray-500 dark:text-gray-400 mt-1"
                                >
                                    Quản lý và theo dõi nguyên liệu
                                </p>
                            </div>
                        </div>
                    </div>
                    <Button
                        label="Tạo nguyên liệu"
                        icon="pi pi-plus"
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
                            :suggestions="suggestions"
                            class="w-full"
                            input-class="w-full !pl-12 !pr-4 !py-3 !rounded-xl !border-2 !border-gray-200 dark:!border-gray-600 focus:!border-indigo-500 dark:focus:!border-indigo-400 !shadow-sm"
                            placeholder="Tìm kiếm theo tên..."
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
                                        {{ option.unit }}
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
                                    2 nhà cung cấp trong hệ thống
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto px-4 py-2">
                    <DataTable
                        :value="listIngredient"
                        :loading="false"
                        data-key="id"
                        class="custom-datatable"
                        row-hover
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
                            field="unit"
                            header="Đơn vị tính"
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
                                            {{ data.unit || "-" }}
                                        </span>
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
                                    1
                                </span>
                                đến
                                <span
                                    class="text-indigo-600 dark:text-indigo-400 font-bold"
                                >
                                    {{ total }}
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
                            :rows="rows"
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