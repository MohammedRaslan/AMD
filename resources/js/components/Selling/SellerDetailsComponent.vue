<template>
    <div>
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
                                <span>Seller Details</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="selling">
            <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
            <div class="container">
                <div class="row">
                    <div class="top-tabs p-0 mb-4">
                        <h2 class='py-3 py-lg-5'>Seller Details <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
                    </div>
                <!-- Compnent Here -->
                <side-bar :openSlideBar='openSlideBar'></side-bar>
                <!-- End Component  -->
                    <div class="col-xl-10 col-md-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="inner-content p-0">
                                <!-- Tab1 Overview -->
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <!-- Block Item -->
                                    <div class="inner-item">
                                        <div class="row">
                                            <div class="col-lg-12 detalis border-0">
                                                    <div class="signup bg-transparent">
                                                        <div class="row text-center pt-0">
                                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                                <!-- <h2 class="pb-3 pt-4">Product Info</h2> -->
                                                                <form @submit.prevent="saveSellerDetails" class="form-product">
                                                                    <div class="row pb-4">
                                                                        <div class="col-12 select-product text-left">
                                                                            <label class="text-offwhite" for="cats">Currency</label>
                                                                            <v-select placeholder="Select Currency" class="custom-vue-select" id='cats' v-model="form.currency" :options="currencies" >
                                                                                <template #search="{attributes, events}">
                                                                                        <input
                                                                                            class="vs__search"
                                                                                            :required="!form.currency"
                                                                                            v-bind="attributes"
                                                                                            v-on="events"
                                                                                        />
                                                                                    </template>
                                                                            </v-select>
                                                                            <div v-if="form.errors.has('currency')" class="alert alert-danger" v-html="form.errors.get('currency')" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mb-4 px-2">
                                                                        <label class="text-offwhite text-left">Unit Measurement</label>
                                                                        <div class="col-6">
                                                                           <div class="inner">
                                                                                <div class="custom_radio">
                                                                                    <input type="radio" id="usa" name="is_american"  v-model="form.is_american" value="1"><label for="usa" class="text-offwhite">American</label>
                                                                                </div>
                                                                           </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="inner">
                                                                                <div class="custom_radio">
                                                                                    <input type="radio" id="worldwide-cur" name="is_american" v-model="form.is_american" value="0"><label for="worldwide-cur" class="text-offwhite">Metric</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                            <div class="col-12 text-left">
                                                                                <label class="text-offwhite" for="cats">Service USA</label>
                                                                                <input type="text" v-model="form.service_usa" class="form-control" id="fName" placeholder="Service USA" >
                                                                                <div v-if="form.errors.has('service_usa')" class="alert alert-danger" v-html="form.errors.get('service_usa')" />
                                                                            </div>
                                                                            <div class="col-12 text-left">
                                                                                <label class="text-offwhite" for="cats">Service Worldwide</label>
                                                                                <input type="text" v-model="form.service_worldwide" class="form-control" id="fName" placeholder="Service Worldwide" >
                                                                                <div v-if="form.errors.has('service_worldwide')" class="alert alert-danger" v-html="form.errors.get('service_worldwide')" />
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 text-left">
                                                                            <label class="text-offwhite" for="cats">PayPal Account</label>
                                                                            <input type="email" v-model="form.paypal_account" class="form-control" id="fName" placeholder="PayPal Account" >
                                                                            <div v-if="form.errors.has('paypal_account')" class="alert alert-danger" v-html="form.errors.get('paypal_account')" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-12 text-left">
                                                                            <label class="text-offwhite" for="cats">PayPal Account ID</label>
                                                                            <input type="text" v-model="form.paypal_account_id" class="form-control" id="fName" placeholder="PayPal Account ID" >
                                                                            <div v-if="form.errors.has('paypal_account_id')" class="alert alert-danger" v-html="form.errors.get('paypal_account_id')" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                           <div class="round round-3 custom-checkbox">
                                                                                <input type="checkbox" v-model="form.usa" id="checkbox1"  placeholder="Title">
                                                                                <label for="checkbox1" class="ml-3 text-offwhite">Shipping To USA</label>

                                                                                <div v-if="form.errors.has('usa')" class="alert alert-danger" v-html="form.errors.get('usa')" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                           <div class="round round-3 custom-checkbox">
                                                                                <input type="checkbox" v-model="form.worldwide" id="worldwide"  placeholder="Title">
                                                                                <label for="worldwide" class="ml-3 text-offwhite">Shipping Worldwide</label>

                                                                                <div v-if="form.errors.has('worldwide')" class="alert alert-danger" v-html="form.errors.get('worldwide')" />
                                                                            </div>
                                                                        </div>


                                                                        <!-- <div class="col-lg-6 round ">
                                                                            <p style="color:white; float:left">Shipping Worldwide</p>
                                                                            <input type="checkbox" v-model="form.worldwide" id="checkbox2" placeholder="Worldwide" >
                                                                            <label for="checkbox2" class="ml-3"></label>
                                                                            <div v-if="form.errors.has('worldwide')" class="alert alert-danger" v-html="form.errors.get('worldwide')" />
                                                                        </div> -->
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-12">
                                                                            <input type="submit" :disabled="form.busy" value="Submit" class="form-control" id="register">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </section>
    </div>
</template>
<style scoped>
    select{
        display: block !important;
    }
    .round {
        position: relative;
        height: 50px;
    }

    .round label {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%;
    cursor: pointer;
    height: 20px;
    left: 22px;
    position: absolute;
    top: 0;
    width: 20px;
    }

    .round label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 3px;
    opacity: 0;
    position: absolute;
    top: 6px;
    transform: rotate(-45deg);
    width: 12px;
    }

    .round input[type="checkbox"] {
    visibility: hidden;
    }

    .round input[type="checkbox"]:checked + label {
    background-color: #fd1266;
    border-color:#fd1266;
    }

    .round input[type="checkbox"]:checked + label:after {
    opacity: 1;
    }
    .background-color{
        background-color: #111b29 !important;
    }
    .requiredItem{
    color:#fd1266 ;
    }
</style>
<script>
import SideBar from "./SidebarComponent";
import { createEditor } from 'vueditor';
export default ({
   components:{
        SideBar,
    },
      data:()=>({
        id: null,
        currencies:[
            'USD',
            'EUR',
            'CAD',
            'GBP',
        ],
        imagenull: false,
        form : new form({
            currency:null,
            usa:1,
            worldwide:0,
            service_usa: null,
            service_worldwide: null,
            paypal_account: null,
            paypal_account_id: null,
            is_american : null,
        }),
        openSlideBar: false
    }),
    methods:{
        async saveSellerDetails(){
           this.$Progress.start();

           this.form.usa = this.form.usa == true ? 1 : 0;
           this.form.worldwide = this.form.worldwide == true ? 1 : 0;
           const response = await this.form.post('/api/user/sellerDefault').then((response)=>{
                this.$Progress.finish();
                Toast.fire({
                    icon: 'success',
                    title: 'Details Saved Successfully'
                });
           });
        }
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted(){
        this.$Progress.finish();
        axios.get('/api/user/getSellerDetails').then((response) => {
            this.form.usa = response.data.usa;
            this.form.worldwide = response.data.worldwide;
            this.form.service_usa = response.data.service_usa;
            this.form.service_worldwide = response.data.service_worldwide;
            this.form.currency = response.data.currency;
            this.form.paypal_account = response.data.paypal_account;
            this.form.paypal_account_id = response.data.paypal_account_id;
            this.form.is_american = response.data.is_american;
        });
    }
})
</script>
