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
                                    <div class="col-12">
                                        <input
                                            type="submit"
                                            :disabled="form.busy"
                                            value="Register"
                                            class="form-control"
                                            id="register"
                                        />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        form: new form({
            first_name: null,
            last_name: null,
            user_name: null,
            email: null,
            password: null,
            phone: null,
            country: null
        })
    }),
    methods: {
         register: async function() {
            this.$Progress.start();
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
                        Fire.$emit("LoginEvent");
                        this.$Progress.finish();
                        window.location.href = "/";
                    }
                })
                .catch(error => {
                    this.$Progress.fail();
                });
            console.log(response, this.form);
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
