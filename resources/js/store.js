export default{
    state:{
        user: null,
        token: null
    },
    mutations :{
        setUser(state, payload){
            state.user = payload;
        },
        setToken(state,payload){
            state.token = payload;
        }
    },
    actions:{
        setUser(context,payload){
            context.commit('setUser',payload);
            localStorage.setItem('currentUser',JSON.stringify(payload));
        },
        setToken(context,payload){
            context.commit('setToken',payload);
            localStorage.setItem('token',payload);
        }
        },
}