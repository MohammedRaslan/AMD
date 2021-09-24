<template>
    <div>
            <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <div class="breadcrumb__links">
                            <router-link to="/">Home</router-link>
                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="6" viewBox="0 0 4 6">
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                </g>
                            </svg>
                            <span>Settings</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
    <section class="selling">
        <div class="over-lay-selling d-none"></div>
        <div class="container">
            <div class="row">

                <div class="top-tabs p-0 mb-4">
                    <h2 class='py-3 py-lg-4 text-milky'>Personal Info <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
                </div>

                <side-bar></side-bar>

                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <div class="signup bg-transparent">
                              <form @submit.prevent="updateUserInfo" class="border-color-milky">
                                <div class="row">
                                    <div class="col-lg-6" style="margin-top: 9%;">
                                        <div class="row">

                                              <div v-show="message != ''" class="alert alert-success" v-html="message"/>
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
                                                    disabled
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
                                                disabled
                                            />
                                            <div
                                                v-if="form.errors.has('email')"
                                                class="alert alert-danger"
                                                v-html="form.errors.get('email')"
                                            />
                                        </div>

                                            <div class="col-12 text-left mb-3 col-lg-12">
                                            <input
                                                type="password"
                                                v-model="form.password"
                                                class="form-control mb-3"
                                                id="password"
                                                placeholder="Password"
                                            />
                                            <div
                                                v-if="form.errors.has('password')"
                                                class="alert alert-danger"
                                                v-html="form.errors.get('password')"
                                            />
                                        </div>
                                            <div class="col-12 d-none d-md-none d-lg-block ">
                                                <input type="submit" value="Update Info" class="form-control btn-milky" id="register">
                                            </div>
                                        </div>
                                    </div>
                                    <!--devider-->
                                    <div class="col-1" style="display: flex; justify-content: center;">
                                        <div class="form-divider border-color-milky"></div>
                                    </div>
                                    <!--right side -->
                                    <div class="col-lg-5 text-center ">
                                        <h3 style="color: #23ccfd;" class="mb-2">Change Avatar</h3>
                                        <!--1st Row-->
                                              <!-- <div v-show="checkImage != ''" class="alert alert-danger" v-html="checkImage"/> -->
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
                                            <input type="submit" value="Update Info" class="form-control" id="register">
                                        </div>
                                    </div>
                                    <!--end right side -->

                                </div>
                            </form>
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
import SideBar from './SideBarComponent.vue'

export default {
     data: () => ({
          checkImage: '',
          message: '',
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
     }),

     components:{
        SideBar,
    },
    methods: {
         updateUserInfo: async function() {
            this.$Progress.start();
            const response = await this.form
                .post("api/user/updateUserInfo")
                .then(response => {
                    if(response.data){
                        this.message = 'Data Saved Successfully';
                        this.$Progress.finish();
                    }
                })
                .catch(error => {
                    this.$Progress.fail();
                });

        },
    },
    mounted(){
        axios.get('/api/user/getUserInfo').then(response => {
            this.form.first_name = response.data.first_name;
            this.form.last_name = response.data.last_name;
            this.form.email = response.data.email;
            this.form.user_name = response.data.user_name;
            this
        });
    }
}
</script>
