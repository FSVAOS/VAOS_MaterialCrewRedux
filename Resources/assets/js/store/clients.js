
export default {
    state: () => ({
        status: 0
    }),
    mutations: {
        LOAD_PROFILE(state, payload) {
            state = payload
        }
    },
    actions: {
        Load_Profile_Data(context, id) {
            axios.get('/api/materialcrewredux/user', {params: {id: id}}).then(res => {
                context.commit('LOAD_PROFILE', res.data)
            })
        }
    }
}
