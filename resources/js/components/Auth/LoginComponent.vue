<template>
    <div>
         <section>
        <div class="signup login">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2 class="mb-4">Login</h2>
                        <p>But Brooke Chaffin and Catherine Connors are looking to change that with the introduction of Maverick.</p>
                        <form>                        
                            <div class="row">
                                <div class="col-12">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                
                                <div class="col-12">
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                
                                <div class="col-6">
                                    <input type="submit" value="Login" class="form-control" id="register">
                                </div>

                                <div class="col-6 link-up">
                                    <router-link to="register"  class="form-control">Signup</router-link>
                                </div>
                                
                            </div>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="forgot">Forgotten password?</a>
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
       created(){
        this.$Progress.start();
    },
    mounted(){
        this.$Progress.finish();
    }
})
</script>