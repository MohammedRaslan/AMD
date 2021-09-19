<template>
    <div>
        <section class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <div class="breadcrumb__links">
                                <a href="./index.html">Home</a>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="4"
                                    height="6"
                                    viewBox="0 0 4 6"
                                >
                                    <g
                                        id="Icon_20_Grey_Dropdown"
                                        data-name="Icon / 20 / Grey / Dropdown"
                                        transform="translate(-8 13) rotate(-90)"
                                    >
                                        <path
                                            id="Triangle"
                                            d="M3,4,6,0H0Z"
                                            transform="translate(7 8)"
                                            fill="#ffe0e0"
                                        />
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
            <div
                class="over-lay-selling d-none"
                @click="openSlideBar = !openSlideBar"
                :aria-pressed="openSlideBar ? 'true' : 'false'"
                :class="{ 'd-block1': openSlideBar }"
            ></div>
            <div class="container">
                <div class="row">
                    <div class="top-tabs p-0 mb-4">
                        <h1 class="py-3 py-lg-5">
                            Sell An Item
                            <span
                                @click="openSlideBar = !openSlideBar"
                                :aria-pressed="openSlideBar ? 'true' : 'false'"
                                class="open-tabs"
                                ><i class="fa fa-bars"></i
                            ></span>
                        </h1>
                    </div>
                    <!-- Compnent Here -->
                    <side-bar :openSlideBar="openSlideBar"></side-bar>
                    <!-- End Component  -->
                    <div class="col-xl-10 col-md-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="inner-content">
                                <!-- Tab1 Overview -->
                                <div
                                    class="tab-pane fade show active"
                                    id="v-pills-home"
                                    role="tabpanel"
                                    aria-labelledby="v-pills-home-tab"
                                >
                                    <!-- Block Item -->
                                    <div class="inner-item">
                                        <div class="row">
                                            <div class="col-lg-12 detalis border-0 p-0">
                                                <div class="signup  bg-transparent">
                                                    <div class="row text-center pt-0">
                                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                                            <h2 class="pb-3 pt-4 pt-lg-0 sub-title">Shipping Information</h2>
                                                            <form @submit.prevent="saveProductShipping">
                                                                <div class="row">
                                                                    <div class="col-12 mb-3 text-left">
                                                                        <label
                                                                            class="text-white"
                                                                            for="cats"
                                                                            >Package
                                                                            Details</label
                                                                        >
                                                                        <select
                                                                            name="type"
                                                                            v-model="
                                                                                form.package_details
                                                                            "
                                                                            id=""
                                                                            class="m-2 form-control"
                                                                            required
                                                                        >
                                                                            <option
                                                                                selected
                                                                                disabled
                                                                                >Choose
                                                                                Details</option
                                                                            >
                                                                            <option
                                                                                :value="
                                                                                    false
                                                                                "
                                                                                >I
                                                                                don't
                                                                                have
                                                                                package
                                                                                details
                                                                            </option>
                                                                            <option
                                                                                :value="
                                                                                    true
                                                                                "
                                                                                >I
                                                                                have
                                                                                package
                                                                                details</option
                                                                            >
                                                                        </select>
                                                                        <div
                                                                            v-if="
                                                                                form.errors.has(
                                                                                    'package_details'
                                                                                )
                                                                            "
                                                                            class="alert alert-danger"
                                                                            v-html="
                                                                                form.errors.get(
                                                                                    'package_details'
                                                                                )
                                                                            "
                                                                        />
                                                                    </div>
                                                                    <div
                                                                        class="row text-left m-3"
                                                                        v-show="
                                                                            form.package_details
                                                                        "
                                                                    >
                                                                        <div
                                                                            class="col-lg-3 col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >Width</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.width
                                                                                "
                                                                                :disabled="
                                                                                    !form.package_details
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Width"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'width'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'width'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-3 col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >Height</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.height
                                                                                "
                                                                                :disabled="
                                                                                    !form.package_details
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Height"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'height'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'height'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-3 col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >Length</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.length
                                                                                "
                                                                                :disabled="
                                                                                    !form.package_details
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Length"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'length'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'length'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-3 col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >Weight</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.weight
                                                                                "
                                                                                :disabled="
                                                                                    !form.package_details
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Weight"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'weight'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'weight'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="row"
                                                                    >
                                                                        <div
                                                                            class="col-lg-6 round "
                                                                        >
                                                                            <p
                                                                                for=""
                                                                                style="color:white; float:left"
                                                                            >
                                                                                Shipping
                                                                                To
                                                                                USA
                                                                            </p>
                                                                            <input
                                                                                type="checkbox"
                                                                                v-model="
                                                                                    form.usa
                                                                                "
                                                                                id="checkbox1"
                                                                                placeholder="Title"
                                                                            />
                                                                            <label
                                                                                for="checkbox1"
                                                                                class="ml-3"
                                                                            ></label>
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'usa'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'usa'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-lg-6 round "
                                                                        >
                                                                            <p
                                                                                style="color:white; float:left"
                                                                            >
                                                                                Shipping
                                                                                To
                                                                                World
                                                                                Wide
                                                                            </p>
                                                                            <input
                                                                                type="checkbox"
                                                                                v-model="
                                                                                    form.world_wide
                                                                                "
                                                                                id="checkbox2"
                                                                                placeholder="Title"
                                                                            />
                                                                            <label
                                                                                for="checkbox2"
                                                                                class="ml-3"
                                                                            ></label>
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'world_wide'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'world_wide'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="row text-left"
                                                                    >
                                                                        <div
                                                                            class="col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >USA
                                                                                CARRIER</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.service_usa
                                                                                "
                                                                                :disabled="
                                                                                    !form.usa
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Service USA"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'service_usa'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'service_usa'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >Worldwide
                                                                                CARRIER</label
                                                                            >
                                                                            <input
                                                                                type="text"
                                                                                v-model="
                                                                                    form.service_world_wide
                                                                                "
                                                                                :disabled="
                                                                                    !form.world_wide
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Sevice World Wide"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'service_world_wide'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'service_world_wide'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >COST
                                                                                USA
                                                                            </label>
                                                                            <span
                                                                                style="color:white"
                                                                                v-html="
                                                                                    currencyIcon
                                                                                "
                                                                            ></span>
                                                                            <input
                                                                                type="number"
                                                                                step="0.01"
                                                                                v-model="
                                                                                    form.price_usa
                                                                                "
                                                                                :disabled="
                                                                                    !form.usa
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Price USA"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'price_usa'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'price_usa'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="col-6"
                                                                        >
                                                                            <label
                                                                                class="text-white"
                                                                                for="cats"
                                                                                >COST
                                                                                Worldwide</label
                                                                            >
                                                                            <input
                                                                                type="number"
                                                                                step="0.01"
                                                                                v-model="
                                                                                    form.price_world_wide
                                                                                "
                                                                                :disabled="
                                                                                    !form.world_wide
                                                                                "
                                                                                class="form-control"
                                                                                id="fName"
                                                                                placeholder="Price Worldwide"
                                                                                required
                                                                            />
                                                                            <div
                                                                                v-if="
                                                                                    form.errors.has(
                                                                                        'price_world_wide'
                                                                                    )
                                                                                "
                                                                                class="alert alert-danger"
                                                                                v-html="
                                                                                    form.errors.get(
                                                                                        'price_world_wide'
                                                                                    )
                                                                                "
                                                                            />
                                                                        </div>
                                                                        <div
                                                                            class="row"
                                                                        >
                                                                            <div
                                                                                class="col-6 select-product text-left"
                                                                            >
                                                                                <label
                                                                                    class="text-white"
                                                                                    for="cats"
                                                                                    >Duration
                                                                                    USA</label
                                                                                >
                                                                                <v-select
                                                                                    placeholder="Select Duration"
                                                                                    id="cats"
                                                                                    class="custom-vue-select"
                                                                                    v-model="
                                                                                        form.duration_usa
                                                                                    "
                                                                                    label="title"
                                                                                    :options="
                                                                                        usa
                                                                                    "
                                                                                ></v-select>
                                                                                <div
                                                                                    v-if="
                                                                                        form.errors.has(
                                                                                            'duration_usa'
                                                                                        )
                                                                                    "
                                                                                    class="alert alert-danger"
                                                                                    v-html="
                                                                                        form.errors.get(
                                                                                            'duration_usa'
                                                                                        )
                                                                                    "
                                                                                />
                                                                            </div>
                                                                            <div
                                                                                class="col-6 select-product text-left"
                                                                            >
                                                                                <label
                                                                                    class="text-white"
                                                                                    for="cats"
                                                                                    >Duration
                                                                                    Worldwide</label
                                                                                >
                                                                                <v-select
                                                                                    placeholder="Select Policy"
                                                                                    class="custom-vue-select"
                                                                                    id="cats"
                                                                                    v-model="
                                                                                        form.duration_worldwide
                                                                                    "
                                                                                    :disabled="
                                                                                        !form.world_wide
                                                                                    "
                                                                                    label="title"
                                                                                    :options="
                                                                                        international
                                                                                    "
                                                                                ></v-select>
                                                                                <div
                                                                                    v-if="
                                                                                        form.errors.has(
                                                                                            'duration_world_wide'
                                                                                        )
                                                                                    "
                                                                                    class="alert alert-danger"
                                                                                    v-html="
                                                                                        form.errors.get(
                                                                                            'duration_world_wide'
                                                                                        )
                                                                                    "
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="row pt-3"
                                                                >
                                                                    <div
                                                                        class="col-lg-4"
                                                                    >
                                                                        <input
                                                                            type="button"
                                                                            @click="
                                                                                GoBack
                                                                            "
                                                                            value="Back"
                                                                            class="form-control h-40"
                                                                        />
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-4"
                                                                    >
                                                                        <input
                                                                            type="button"
                                                                            @click="
                                                                                draft
                                                                            "
                                                                            value="Save as Draft"
                                                                            class="form-control h-40 btn bg-gray"
                                                                            id="draft"
                                                                        />
                                                                    </div>
                                                                    <div
                                                                        class="col-lg-4"
                                                                    >
                                                                        <input
                                                                            type="submit"
                                                                            :disabled="
                                                                                form.busy
                                                                            "
                                                                            value="List your item"
                                                                            class="form-control h-40"
                                                                            id="register"
                                                                        />
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
        <!-- Latest Blog Section End -->
    </div>
</template>
<style>
.bg-gray {
    background-color: gray !important;
}
select {
    display: block !important;
}
.round {
    position: relative;
    height: 50px;
}
.nice-select {
    display: none !important;
}
.round label {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%;
    cursor: pointer;
    height: 28px;
    left: 0;
    position: absolute;
    top: 0;
    width: 28px;
}

.round label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 7px;
    opacity: 0;
    position: absolute;
    top: 8px;
    transform: rotate(-45deg);
    width: 12px;
}

.round input[type="checkbox"] {
    visibility: hidden;
}

.round input[type="checkbox"]:checked + label {
    background-color: #fd1266;
    border-color: #fd1266;
}

.round input[type="checkbox"]:checked + label:after {
    opacity: 1;
}
</style>
<script>
import SideBar from "./SidebarComponent";
import { createEditor } from "vueditor";
export default {
    components: {
        SideBar
    },
    data: () => ({
        usa: [],
        international: [],
        package_details_choice: true,
        currencyIcon: null,
        form: new form({
            product_id: null,
            world_wide: false,
            usa: true,
            service_usa: null,
            price_usa: null,
            service_world_wide: null,
            duration_usa: null,
            duration_worldwide: null,
            price_world_wide: null,
            height: null,
            weight: null,
            width: null,
            length: null,
            package_details: true,
            draft: 0,
            // openSlideBar: false
        }),
        openSlideBar: false
    }),
    methods: {
        async saveProductShipping() {
            this.$Progress.start();
            this.form.usa = this.form.usa == true ? 1 : 0;
            this.form.world_wide = this.form.world_wide == true ? 1 : 0;
            this.form.package_details =
                this.form.package_details == true ? "details" : "no_details";
            const response = await this.form
                .post("/api/product/store/step_three")
                .then(response => {
                    this.$Progress.finish();
                    this.indicator();
                    if ((response.data = false)) {
                        this.$Progress.fail();
                    } else {
                        this.$Progress.finish();
                        this.$router.push("/selling/active_product");
                    }
                })
                .catch(error => {
                    this.$Progress.fail();
                    console.log(error);
                });
        },

        draft() {
            this.form.draft = 1;
            this.saveProductShipping();
        },
        indicator() {
            if (this.form.draft == 1) {
                Toast.fire({
                    icon: "success",
                    title: "Product Drafted Successfully"
                });
            } else {
                Toast.fire({
                    icon: "success",
                    title: "Product Created Successfully"
                });
            }
        },
        GoBack() {
            var id = this.$route.params.id;
            this.$router.push("/productEdit/" + id);
        }
    },

    beforeCreate() {
        this.$Progress.start();
    },
    mounted() {
        Fire.$emit("mounted");
        this.$Progress.finish();
        this.form.product_id = this.$route.params.id;
        axios
            .get("/api/product/checkUserProduct/" + this.form.product_id)
            .then(response => {
                if (response.data == false) {
                    this.$router.push("/");
                }
            });
        axios
            .get("/api/product/getProductShipping/" + this.form.product_id)
            .then(response => {
                this.usa = response.data.localShipping;
                this.international = response.data.worldwide;
                if (response.data.shipping != null) {
                    this.form.world_wide = response.data.shipping.world_wide;
                    this.form.usa = response.data.shipping.usa;
                    this.form.service_usa = response.data.shipping.service_usa;
                    this.form.service_world_wide =
                        response.data.shipping.service_world_wide;
                    this.form.price_usa = response.data.shipping.price_usa;
                    this.form.price_world_wide =
                        response.data.shipping.price_world_wide;
                    this.form.height = response.data.shipping.height;
                    this.form.weight = response.data.shipping.weight;
                    this.form.length = response.data.shipping.length;
                    this.form.width = response.data.shipping.width;
                } else {
                    this.form.world_wide = response.data.userDetails.worldwide;
                    this.form.usa = response.data.userDetails.usa;
                    this.form.service_usa =
                        response.data.userDetails.service_usa;
                    this.form.service_world_wide =
                        response.data.userDetails.service_worldwide;
                    this.currencyIcon = response.data.currencyIcon;
                }
            });
    }
};
</script>
