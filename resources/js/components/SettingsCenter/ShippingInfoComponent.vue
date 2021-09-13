<template>
    <div>
            <!-- Breadcrumb Section Begin -->
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
                <div class="top-tabs">
                    <h2 class="text-maroon">Settings <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
                </div>

                <side-bar></side-bar>

                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <div class="signup bg-transparent">
                              <form @submit.prevent="updateUserShippingInfo">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">

                                              <div v-show="message != ''" class="alert alert-success" v-html="message"/>
                                            <div class="col-12 col-lg-6">
                                                <input
                                                type="text"
                                                v-model="form.address"
                                                class="form-control"
                                                id="fName"
                                                placeholder="Address"
                                                required
                                            />
                                            <div
                                                v-if="form.errors.has('address')"
                                                class="alert alert-danger"
                                                v-html="
                                                    form.errors.get('address')
                                                "
                                            />
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <input
                                                    type="text"
                                                    v-model="form.city"
                                                    class="form-control"
                                                    id="lName"
                                                    placeholder="City"
                                                    required
                                                />
                                                <div
                                                    v-if="form.errors.has('city')"
                                                    class="alert alert-danger"
                                                    v-html="
                                                    form.errors.get('city')
                                                    "
                                                />
                                            </div>

                                        <div class="col-12 select-product col-lg-6 pb-3">
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
                                                <input type="submit" value="Update Info" class="form-control" id="register">
                                            </div>
                                        </div>
                                    </div>
                                    <!--devider-->
                                    <div class="col-1" style="display: flex; justify-content: center;">
                                        <div class="form-divider"></div>
                                    </div>


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
          countries: [],
          message: '',
          form: new form({
            address: null,
            city: null,
            country: null,
        }),
     }),

     components:{
        SideBar,
    },
    methods: {
         updateUserShippingInfo: async function() {
            this.$Progress.start();
            const response = await this.form
                .post("/api/user/updateUserShippingInfo")
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
        axios.get("/api/getCountries").then(response => {
            this.countries = response.data;
        });
        axios.get('/api/user/getUserShippingInfo').then(response => {
            this.form.address = response.data.address;
            this.form.city = response.data.city;
            this.form.country = response.data.country;

        });
    }
}
</script>
