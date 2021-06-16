<template>
    <div>
          <section>
        <div class="signup">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="mb-4">Signup</h2>
                        <form @submit.prevent="register">                        
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" v-model="form.first_name" class="form-control" id="fName" placeholder="First Name" required>
                                    <div v-if="form.errors.has('first_name')" class="alert alert-danger" v-html="form.errors.get('first_name')" />
                                </div>
                                
                                <div class="col-4">
                                    <input type="text" v-model="form.last_name" class="form-control" id="lName" placeholder="Last Name" required>
                                    <div v-if="form.errors.has('last_name')" class="alert alert-danger" v-html="form.errors.get('last_name')" />
                                </div>
                                
                                <div class="col-4">
                                    <input type="text" v-model="form.user_name" class="form-control" id="user_name" placeholder="User Name" required>
                                    <div v-if="form.errors.has('user_name')" class="alert alert-danger" v-html="form.errors.get('user_name')" />
                                </div>

                                <div class="col-12">
                                    <input type="email" v-model="form.email" class="form-control" id="email" placeholder="Your Email" required>
                                    <div v-if="form.errors.has('email')" class="alert alert-danger" v-html="form.errors.get('email')" />

                                </div>
                                
                                <div class="col-6">
                                    <input type="password" v-model="form.password" class="form-control" id="password" placeholder="Password" required>
                                    <div v-if="form.errors.has('password')" class="alert alert-danger" v-html="form.errors.get('password')" />
                                </div>
                                
                                <div class="col-6">
                                    <input type="password" v-model="form.password_confirmation" class="form-control" id="rePassword" placeholder="Repeat Passwod" required>
                                    <div v-if="form.errors.has('password_confirmation')" class="alert alert-danger" v-html="form.errors.get('password_confirmation')" />

                                </div>

                                <div class="col-6">
                                    <input type="text" v-model="form.phone" class="form-control" id="lName" placeholder="Phone" required>
                                    <div v-if="form.errors.has('phone')" class="alert alert-danger" v-html="form.errors.get('phone')" />
                                </div>

                                <div class="col-6">
                                    <input type="text" v-model="form.address" class="form-control" id="lName" placeholder="Address" required>
                                    <div v-if="form.errors.has('address')" class="alert alert-danger" v-html="form.errors.get('address')" />

                                </div>
                                <div class="col-12">
                                    <input type="submit" :disabled="form.busy" value="Register" class="form-control" id="register">
                                </div>

                   
                            </div>
                        </form>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="blog__item">
                            <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                            <div class="blog__item__text">
                                <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                                <h5>Eternity Bands Do Last Forever</h5>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    </div>
</template>

<script>

export default ({
    data:()=>({
        form : new form({
            first_name : null,
            last_name : null,
            user_name: null,
            email : null,
            password : null,
            password_confirmation : null,
            phone: null,
            address: null,
        }),
    }),
    methods:{
        async register(){
            this.$Progress.start();
            const response = await this.form.post('api/register').then((response)=>{
            if(response.data.message){
                this.$Progress.fail();
                this.message = response.data.message;
            }else{
                this.$store.dispatch('setUser',response.data.user);
                this.$store.dispatch('setToken',response.data.access_token);
                Fire.$emit('LoginEvent');
                this.$Progress.finish();
                window.location.href = '/';
            }
            }).catch((error)=>{
                this.$Progress.fail();

            });
            console.log(response,this.form);
        }
    },
    created(){
        this.$Progress.start();
    },
    mounted(){
        this.$Progress.finish();
        Fire.$emit('mounted');

    }
})
</script>
