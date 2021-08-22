<template>
    <div>
         <section>
        <div class="signup login">
            <div class="container">
                <div class="row text-center" v-show="!verified">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2 class="mb-4">Verify your account</h2>
                        <div class="alert alert-danger" role="alert" v-if="message != null">
                              {{ message }}
                        </div>          
                        <form @submit.prevent="verifyMail">                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="form-control" v-model="form.email" id="email" placeholder="Your Email" >
                                    <div v-if="form.errors.has('email')" class="alert alert-danger" v-html="form.errors.get('email')" />
                                </div>
                                <div class="col-6">
                                    <input type="submit" :disabled="form.busy" value="Submit" class="form-control" id="register">
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
                  <div class="row text-center" v-show="verified">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2 class="mb-4">Enter Verification Code</h2>
                        <div class="alert alert-danger" role="alert" v-if="message != null">
                              {{ message }}
                        </div>          
                        <form @submit.prevent="verifyCode">                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="number" class="form-control" v-model="codeForm.code" id="code" placeholder="Enter Code" >
                                    <div v-if="form.errors.has('email')" class="alert alert-danger" v-html="form.errors.get('email')" />
                                </div>
                                <div class="col-6">
                                    <input type="submit" :disabled="form.busy" value="Verify" class="form-control" id="register">
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
        verified: false,
        show_verification_mail: false,
        form: new form({
            email: '',
        }),
        codeForm: new form({
            code: '',
        }),
    }),
    methods:{
         verifyMail: async function(){
             const response = this.form.post('/api/verifyMail').then((response) => {
                 if(response.data){
                     this.verified = true;
                 }
             });
         }
    },

    created(){
        this.$Progress.start();
    },
    mounted(){
        this.$Progress.finish();
    }
})
</script>