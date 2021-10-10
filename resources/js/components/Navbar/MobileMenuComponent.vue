<template>
  <div>
    <ul data-v-adb1784e="" class="text-start justify-content-between">
        <li>
            <div class="dropdown d-inline-flex flex-column dropdown-cats" v-if="logged">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuMobile" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- <span>Hello {{ name }}</span> -->
                    <span>Marketplace</span>
                </button>
                <ul class="dropdown-menu close_menu_mobile" aria-labelledby="dropdownMenuMobile" v-if="logged">
                    <li v-for="category in categories" :key="category.id">
                        <router-link class="dropdown-item" :to="{ name: 'ShopCategoryComponent', params: { query: category.id },}">
                            {{ category.title }}
                        </router-link>
                    </li>
                     <hr class="divider-x m-0 bg-maroon">
                    <li>
                        <router-link class="dropdown-item" to="/requestedItems">Requested items</router-link>
                    </li>
                </ul>
            </div>
        </li>

        <li class="item-border">
            <router-link class="dropdown-item close_menu_mobile" to="/selling/sell_item">Selling</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/buying/requestItem">Request an Item</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/buying/wishlist">Watching</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/buying/purchased">Purchases</router-link>
        </li>

        <li>
            <router-link class="dropdown-item close_menu_mobile" to="#">Buy Again</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/buying/saved">Saved</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="#">Recently Viewed</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/help">Help and Support</router-link>
        </li>
        <li>
            <router-link class="dropdown-item close_menu_mobile" to="/settings/personal">Settings</router-link>
        </li>
        <li>
            <a class="dropdown-item close_menu_mobile" style="cursor: pointer" @click="logout">Logout</a>
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
