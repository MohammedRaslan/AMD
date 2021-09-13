<template>
    <div>
        <section>
            <div class="signup">
                <div class="container">
                    <div class="row text-center pt-3 pt-lg-5" v-show="!show_verification_mail">
                        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                            <h2 class="mb-4 text-start">Signup</h2>
                            <!--<p>But Brooke Chaffin and Catherine Connors are looking to change that with the introduction of Maverick.</p>-->
                            <form @submit.prevent="register">
                                <div class="row">
                                    <div class="col-lg-6" style="margin-top: 9%;">
                                        <div class="row">


                                            <div class="col-12 col-lg-6">
                                                <input
                                                type="text"
                                                v-model="form.first_name"
                                                class="form-control"
                                                id="fName"
                                                placeholder="First Name"
                                                required
                                            />
                                            <div
                                                v-if="form.errors.has('first_name')"
                                                class="alert alert-danger"
                                                v-html="
                                                    form.errors.get('first_name')
                                                "
                                            />
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <input
                                                    type="text"
                                                    v-model="form.last_name"
                                                    class="form-control"
                                                    id="lName"
                                                    placeholder="Last Name"
                                                    required
                                                />
                                                <div
                                                    v-if="form.errors.has('last_name')"
                                                    class="alert alert-danger"
                                                    v-html="
                                                        form.errors.get('last_name')
                                                    "
                                                />
                                            </div>

                                        <div class="col-12 col-lg-6">
                                                <input
                                                    type="text"
                                                    v-model="form.user_name"
                                                    class="form-control"
                                                    id="user_name"
                                                    placeholder="User Name"
                                                    required
                                                />
                                                <div
                                                    v-if="form.errors.has('user_name')"
                                                    class="alert alert-danger"
                                                    v-html="
                                                        form.errors.get('user_name')
                                                    "
                                                />
                                        </div>
                                            <div class="col-12 col-lg-6">
                                            <input
                                                type="email"
                                                v-model="form.email"
                                                class="form-control"
                                                id="email"
                                                placeholder="Your Email"
                                                required
                                            />
                                            <div
                                                v-if="form.errors.has('email')"
                                                class="alert alert-danger"
                                                v-html="form.errors.get('email')"
                                            />
                                        </div>

                                            <div class="col-12 text-left mb-3 col-lg-6">
                                            <input
                                                type="password"
                                                v-model="form.password"
                                                class="form-control mb-3"
                                                id="password"
                                                placeholder="Password"
                                                required
                                            />
                                            <div
                                                v-if="form.errors.has('password')"
                                                class="alert alert-danger"
                                                v-html="form.errors.get('password')"
                                            />
                                            <a
                                                @click="switchVisibility"
                                                id="show"
                                                style="color:#60c1f1; cursor:pointer"
                                                >Show Password</a
                                            >
                                        </div>
                                                    <div class="col-12 select-product col-lg-6">
                                            <v-select
                                                class="select-country"
                                                placeholder="Select Country"
                                                id="cats"
                                                v-model="form.country"
                                                :reduce="country => country.name"
                                                label="name"
                                                :options="countries"
                                            >
                                                <template
                                                    #search="{attributes, events}"
                                                >
                                                    <input
                                                        class="vs__search"
                                                        :required="!form.country"
                                                        v-bind="attributes"
                                                        v-on="events"
                                                    />
                                                </template>
                                            </v-select>
                                            <div
                                                v-if="form.errors.has('country')"
                                                class="alert alert-danger"
                                                v-html="form.errors.get('country')"
                                            />
                                        </div>
                                            <div class="col-12 d-none d-md-none d-lg-block ">
                                                <input type="submit" value="Register" class="form-control" id="register">
                                            </div>
                                        </div>
                                    </div>
                                    <!--devider-->
                                    <div class="col-1" style="display: flex; justify-content: center;">
                                        <div class="form-divider"></div>
                                    </div>
                                    <!--right side -->
                                    <div class="col-lg-5 ">
                                        <h3 style="color: #23ccfd;" class="mb-2">Select Avatar</h3>
                                        <!--1st Row-->
                                              <div v-show="checkImage != ''" class="alert alert-danger" v-html="checkImage"
                                            />
                                        <div class="row mb-3">
                                            <div class="col-4 ">
                                                <!--<img src="images/avatars/avatars-10.jpg" onmouseover="this.src='images/avatars/avatars-04.jpg' " onmouseleave="this.src='images/avatars/avatars-10.jpg'" >-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-10-colored.jpg" name="emotion" id="avatar1" class="input-hidden" />
                                                <label for="avatar1">
                                                <img id="img1"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-10.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-10-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-10.PNG'"/>
                                            </label>
                                            </div>

                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-11.jpg" onmouseover="this.src='images/avatars/avatars-03.jpg' " onmouseleave="this.src='images/avatars/avatars-11.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-11-colored.jpg" name="emotion"  id="avatar2" class="input-hidden" />
                                                <label for="avatar2">
                                                <img id="img2"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-11.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-11-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-11.PNG'"/>
                                            </label>
                                            </div>
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-12.jpg" onmouseover="this.src='images/avatars/avatars-01.jpg' " onmouseleave="this.src='images/avatars/avatars-12.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-12-colored.jpg" name="emotion" id="avatar3" class="input-hidden" />
                                                <label for="avatar3">
                                                <img id="img3"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-12.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-12-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-12.PNG'"/>
                                            </label>
                                            </div>
                                        </div>

                                        <!--2st Row-->
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-13.jpg" onmouseover="this.src='images/avatars/avatars-07.jpg' " onmouseleave="this.src='images/avatars/avatars-13.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-13-colored.jpg" name="emotion" id="avatar4" class="input-hidden" />
                                                <label for="avatar4">
                                                <img id="img4"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-13.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-13-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-13.PNG'"/>
                                            </label>
                                            </div>
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-14.jpg" onmouseover="this.src='images/avatars/avatars-08.jpg' " onmouseleave="this.src='images/avatars/avatars-14.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-14-colored.jpg" name="emotion" id="avatar5" class="input-hidden" />
                                                <label for="avatar5">
                                                <img id="img5"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-14.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-14-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-14.PNG'"/>
                                            </label>
                                            </div>
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-15.jpg" onmouseover="this.src='images/avatars/avatars-02.jpg' " onmouseleave="this.src='images/avatars/avatars-15.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-15-colored.jpg" name="emotion" id="avatar6" class="input-hidden" />
                                                <label for="avatar6">
                                                <img id="img6"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-15.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-15-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-15.PNG'"/>
                                            </label>
                                            </div>
                                        </div>

                                        <!--2st Row-->
                                        <div class="row">
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-16.jpg" onmouseover="this.src='images/avatars/avatars-06.jpg' " onmouseleave="this.src='images/avatars/avatars-16.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-16-colored.jpg" name="emotion" id="avatar7" class="input-hidden" />
                                                <label for="avatar7">
                                                <img id="img7"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-16.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-16-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-16.PNG'"/>
                                            </label>
                                            </div>
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-17.jpg" onmouseover="this.src='images/avatars/avatars-09.jpg' " onmouseleave="this.src='images/avatars/avatars-17.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-17-colored.jpg" name="emotion" id="avatar8" class="input-hidden" />
                                                <label for="avatar8">
                                                <img id="img8"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-17.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-17-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-17.PNG'"/>
                                            </label>
                                            </div>
                                            <div class="col-4">
                                                <!--<img src="images/avatars/avatars-18.jpg" onmouseover="this.src='images/avatars/avatars-05.jpg' " onmouseleave="this.src='images/avatars/avatars-18.jpg'">-->
                                                <input type="radio" v-model="form.image" value="FrontEnd/images/avatars/avatars-18-colored.jpg" name="emotion" id="avatar9" class="input-hidden" />
                                                <label for="avatar9">
                                                <img id="img9"
                                                style="border-radius: 50%;"
                                                :src="'FrontEnd/images/avatars/avatars-18.PNG'"
                                                alt="..."  onmouseover="this.src='FrontEnd/images/avatars/avatars-18-colored.jpg' " onmouseleave="this.src='FrontEnd/images/avatars/avatars-18.PNG'"/>
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-12 d-sm-block d-md-block  d-lg-none  mt-4">
                                            <input type="submit" value="  Register" class="form-control" id="register">
                                        </div>
                                    </div>
                                    <!--end right side -->

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row text-center" v-show="show_verification_mail">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <h2 class="mb-4">Enter Verification Code</h2>
                            <div class="alert alert-danger" role="alert" v-show="verifiedCodeMessage != ''">
                                {{ verifiedCodeMessage }}
                            </div>
                            <form @submit.prevent="verifyCode">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="number" class="form-control" v-model="codeForm.code" id="code" placeholder="Enter Code" >
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
                    <form v-show="show_verification_mail" class="col-5" @submit.prevent="verifyMail">
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" :disabled="form.busy" value="Resend Activation Code" class="form-control" id="register">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
        </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<style lang="scss">
select {
    display: block !important;
}
.vs__selected {
    color: white !important;
}
.vs__clear{
    cursor: pointer;
}
.select-country {
    height: 60px;
    border: 1px solid #42525e;
    .vs__dropdown-toggle{
        height: 100%;
    }
    input {
        margin-bottom: 0 !important;
        border: none !important;
        height: 60px;
        margin: 0 !important;
        &:focus{
            box-shadow: none !important;
        }
    }
    .vs__selected-options{
        span.vs__selected{
            color: white !important;
        }
    }
}
</style>
<script>
export default {
    data: () => ({
        countries: [],
        verified: false,
        checkImage: '',
        verifiedCodeMessage: '',
        show_verification_mail: false,
        form: new form({
            first_name: null,
            last_name: null,
            user_name: null,
            email: null,
            password: null,
            phone: null,
            country: null,
            image: null,
        }),
        codeForm: new form({
            email: '',
            code: ''
        }),
        VerifyMailForm: new form({
            email: '',
        }),
    }),
    methods: {
         register: async function() {
            this.$Progress.start();
            if(this.form.image == null){
                this.checkImage = 'Please Select Avatar';
            }else{

            const response = await this.form
                .post("api/register")
                .then(response => {
                    if (response.data.message) {
                        this.$Progress.fail();
                        this.message = response.data.message;
                    } else {
                        // this.$store.dispatch("setUser", response.data.user);
                        // this.$store.dispatch(
                        //     "setToken",
                        //     response.data.access_token
                        // );
                        // Fire.$emit("LoginEvent");
                        this.$Progress.finish();
                        this.show_verification_mail = true;
                    }
                })
                .catch(error => {
                    this.$Progress.fail();
                });
            }
        },
        switchVisibility: function() {
            const passwordField = document.querySelector("#password");
            const showField = document.querySelector("#show");
            if (passwordField.getAttribute("type") === "password") {
                passwordField.setAttribute("type", "text");
                showField.innerHTML = "Hide Password";
            } else {
                passwordField.setAttribute("type", "password");
                showField.innerHTML = "Show Password";
            }
        },
        verifyMail: async function(){
            this.VerifyMailForm.email = this.form.email;
             const response = await this.VerifyMailForm.post('/api/verifyMail').then((response) => {
                 if(response.data){
                     this.verified = true;
                 }
             });
         },
        verifyCode: async function(){
            this.codeForm.email = this.form.email;
             const response = await this.codeForm.post('/api/verifyCode').then((response) => {
                 if(response.data == true){
                     this.$router.push('/login');
                 }else{
                     this.verifiedCodeMessage = 'This Code is incorrect, Please Check your Mail';
                 }
             });
         }
    },
    created() {
        this.$Progress.start();
        axios.get("/api/getCountries").then(response => {
            this.countries = response.data;
        });
    },
    mounted() {
        this.$Progress.finish();
        Fire.$emit("mounted");
    }
};
</script>
