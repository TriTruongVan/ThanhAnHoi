import axios from '../js/composables/axios'

export const getIngredient = async (page = 1, size = 20, sortBy ='created_at', sortDir = 'desc') => {
    return axios.get(route('ingredient.getAll', {page, size, sortBy, sortDir}))
}

export const searchIngredient = async (search = '') => {
    return axios.get(route('ingredient.search'), {
        params: {search}
    })
}