<template>
    <div>
          <section>
        <div class="signup">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="mb-4">Signup</h2>
                        <p>But Brooke Chaffin and Catherine Connors are looking to change that with the introduction of Maverick.</p>
                        <form>                        
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" id="fName" placeholder="First Name" required>
                                </div>
                                
                                <div class="col-6">
                                    <input type="text" class="form-control" id="lName" placeholder="Last Name" required>
                                </div>
                                
                                <div class="col-12">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                
                                <div class="col-6">
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                
                                <div class="col-6">
                                    <input type="password" class="form-control" id="rePassword" placeholder="Repeat Passwod" required>
                                </div>

                                <div class="col-12">
                                    <input type="submit" value="Register" class="form-control" id="register">
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
       created(){
        this.$Progress.start();

    },
    mounted(){
        this.$Progress.finish();

    }
})
</script>
