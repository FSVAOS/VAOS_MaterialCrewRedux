import vuex from 'vuex'
import vue from 'vue'
import profile from "./profile";
import clients from "./clients";

vue.use(vuex);

export default new vuex.Store({
    modules: { profile: profile, clients: clients }
})
