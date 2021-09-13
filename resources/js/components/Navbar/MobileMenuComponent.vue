<template>
  <div>
    <ul data-v-adb1784e="" class="text-start justify-content-between">
      <li>
        <div class="dropdown d-inline-flex flex-column dropdown-cats" v-if="logged">
          <button
            class="btn dropdown-toggle"
            type="button"
            id="dropdownMenuMobile"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <!-- <span>Hello {{ name }}</span> -->
            <span>Marketplace</span>
          </button>
          <ul class="dropdown-menu close_menu_mobile" aria-labelledby="dropdownMenuMobile" v-if="logged">
            <li v-for="category in categories" :key="category.id">
              <router-link
                class="dropdown-item"
                :to="{
                  name: 'ShopCategoryComponent',
                  params: { query: category.id },
                }"
                >{{ category.title }}</router-link
              >
            </li>
          </ul>
        </div>
      </li>

      <li class="item-border" v-if="logged">
        <router-link class="dropdown-item close_menu_mobile" to="/selling/overview">Selling</router-link>
      </li>

      <li v-if="logged">
        <router-link class="dropdown-item close_menu_mobile" to="/buying/offers">Buying</router-link>
      </li>
      <li v-if="logged">
        <router-link class="dropdown-item close_menu_mobile" to="/subscriptions">Subscriptions</router-link>
      </li>
      <li v-if="logged">
        <a class="dropdown-item close_menu_mobile" href="account.html">My Account</a>
      </li>
      <li v-if="logged">
        <a class="dropdown-item close_menu_mobile" style="cursor: pointer" @click="logout">Logout</a>
      </li>
      <li v-else>
        <router-link class="dropdown-item close_menu_mobile login-menu" to="/login">login</router-link>
      </li>
    </ul>
  </div>
</template>
<style lang="scss">
.dropdown-cats {
    ul {
    li {
        margin-bottom: 4px !important;
        &:last-of-type {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
      }
    }
  }
}

</style>
<script>
export default {
  data: () => ({
    categories: {},
    name: "",
    logged: false,
  }),
  methods: {
    logout: function() {
      localStorage.removeItem("token");
      localStorage.removeItem("currentUser");
      localStorage.removeItem("auth");
      window.location.href = "/";
    },
  },

  mounted() {
    axios.get("/api/category/get/flag").then((response) => {
      this.categories = response.data;
    });

    if (localStorage.getItem("token")) {
      this.name = JSON.parse(localStorage.getItem("currentUser"))["name"];
    }
    // function logged
    if (localStorage.getItem("token")) {
      this.logged = true;
      this.name = JSON.parse(localStorage.getItem("currentUser"))["name"];
      axios.get("/api/checkAdmin").then((response) => {
        if (response.data == true) {
          this.admin = true;
        }
      });
      this.email = JSON.parse(localStorage.getItem("currentUser"))["email"];
      axios.get("/api/checkUser/" + this.email).then((response) => {
        if (response.data == false) {
          localStorage.removeItem("token");
          localStorage.removeItem("currentUser");
          window.location.href = "/";
        }
      });
    }
    this.mounted = true;
    // function logged
  },
};
</script>
