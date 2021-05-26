<template>
    <div>
         <section>
        <div class="signup login">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2 class="mb-4">Login</h2>
                        <p>But Brooke Chaffin and Catherine Connors are looking to change that with the introduction of Maverick.</p>
                        <div class="alert alert-danger" role="alert" v-if="message != null">
                              {{ message }}
                        </div>          
                        <form @submit.prevent="login">                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Your Email" >
                                    <div v-if="form.errors.has('email')" class="alert alert-danger" v-html="form.errors.get('email')" />
                                </div>
                                
                                <div class="col-12">
                                    <input type="password" class="form-control" v-model="form.password" id="password" placeholder="Password" >
                                    <div v-if="form.errors.has('password')" class="alert alert-danger" v-html="form.errors.get('password')" />

                                </div>
                                
                                <div class="col-6">
                                    <input type="submit" :disabled="form.busy" value="Login" class="form-control" id="register">
                                </div>

                                <div class="col-6 link-up">
                                    <router-link to="register"  class="form-control">Signup</router-link>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-6">
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="forgot">Forgotten password?</a>

                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 offset-2">
                        <div class="inner">
                            <img loading="lazy" :src="'/FrontEnd/images/img-login.png'" alt="">
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    </div>
</template>

<script>
export default ({
    data: ()=>({
        message: null,
        form: new form({
            email: '',
            password: '',
        }),
    }),
    //   beforeRouteEnter (to, from, next){ 
    //   if(localStorage.getItem('token')){
    //       window.location.href = "/";
    //   }
    //   next();
    //   },
        methods:{
        async login(){
            this.$Progress.start();
            this.message = null;
            const response =await this.form.post('api/custom-login').then(response=>{
            if(response.data.message){
                this.$Progress.fail();
                this.message = response.data.message;
            }else{
                this.$store.dispatch('setUser',response.data.user);
                this.$store.dispatch('setToken',response.data.access_token);
                // this.$store.dispatch('setAuth',false);
                Fire.$emit('LoginEvent');
                this.$Progress.finish();
                window.location.href = '/';
            }
            }).catch((error)=>{
                this.$Progress.fail();

            });
         
        }
    },

    created(){
        this.$Progress.start();
        // var token = localStorage.getItem('token');
        
        // if(token){
        //     console.log(token);
        //     axios.get('api/test',{
        //         headers: {
        //             'Accept' : 'application/json',
        //             'Content-Type' :'application/json',
        //             'Authorization': `Bearer ${token}` 
        //         }
        //     });
        // }
    },
    mounted(){
        this.$Progress.finish();
    }
})
</script>