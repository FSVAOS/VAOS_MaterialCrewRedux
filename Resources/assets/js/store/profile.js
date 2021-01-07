import axios from 'axios'

export default {
    namespaced: true,
    state: () => ({
        upcoming: 0,
        completed: 0,
        user: null
    }),
    mutations: {
        LOAD_PROFILE(state, payload) {
            state.upcoming = payload.upcoming;
            state.completed = payload.completed;
            state.user = payload.user;
        }
    },
    actions: {
        Load_Profile_Data(context, id) {
            console.log('LOADING PROFILE DATA')
            axios.get('/api/materialcrewredux/user').then(res => {
                context.commit('LOAD_PROFILE', res.data)
            }).catch(err => {
                console.error(err)
            })
        }
    }
}
