import axios from '../js/composables/axios'

export const getSupplier = async () => {
    return axios.get(route('supplier.getAll'))
}