<template>
    <div>
            <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                </g>
                            </svg>
                            <span>Selling</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
   

    <!-- Latest Blog Section Begin -->
    <section class="selling">

        <div class="container">
            <div class="row">
                <h2>Sell An Item <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
            <!-- Compnent Here -->
            <side-bar></side-bar>
            <!-- End Component  -->
                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <!-- Tab1 Overview -->
                             <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <!-- Block Item -->
                                <div class="inner-item">
                                    <div class="row">
                                        <div class="col-lg-12 detalis">
                                
                                                 <div class="signup">
            <div class="container">
                <div class="row text-center pt-0">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="pb-3 pt-4">Prodduct Info</h2>
                        <form @submit.prevent="register">                        
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" v-model="form.first_name" class="form-control" id="fName" placeholder="First Name" required>
                                    <div v-if="form.errors.has('first_name')" class="alert alert-danger" v-html="form.errors.get('first_name')" />

                                </div>
                                
                                <div class="col-6">
                                     <input type="file" name="image" class=" dropify" id="file" aria-describedby="inputGroupFileAddon04">
                                    <div v-if="form.errors.has('last_name')" class="alert alert-danger" v-html="form.errors.get('last_name')" />
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
                                        </div>
                          
                                    </div>
                                </div>
                                <hr>


                             </div>
                        </div>
                    </div>
                </div>
            </div>
         
        
          
        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>

<script>
import SideBar from "./SidebarComponent";
export default ({
    components:{
        SideBar,
    },
      data:()=>({
        form : new form({
            first_name : null,
            last_name : null,
            email : null,
            password : null,
            password_confirmation : null,
            phone: null,
            address: null,
        }),
    }),
    methods:{
        async register(){
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
    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        this.$Progress.finish();
        
    }
})
</script>
