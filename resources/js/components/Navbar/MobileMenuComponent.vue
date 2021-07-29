<template>
  <div>
    <ul data-v-adb1784e="" class="text-start justify-content-between">
      <li>
        <div class="dropdown d-inline-flex flex-column dropdown-cats">
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
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuMobile">
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
            <!-- <li>
              <router-link class="dropdown-item" to="/selling/overview"
                >Selling</router-link
              >
            </li>

            <li>
              <router-link class="dropdown-item" to="/buying/offers"
                >Buying</router-link
              >
            </li>
            <li>
              <router-link class="dropdown-item" to="/subscriptions"
                >Subscriptions</router-link
              >
            </li>
            <li>
              <a class="dropdown-item" href="account.html">My Account</a>
            </li>
            <li>
              <a class="dropdown-item" style="cursor: pointer" @click="logout"
                >Logout</a
              >
            </li> -->
          </ul>
        </div>
      </li>

      <li class="item-border">
        <router-link class="dropdown-item" to="/selling/offers"
          >Selling</router-link
        >
      </li>

      <li>
        <router-link class="dropdown-item" to="/buying/offers"
          >Buying</router-link
        >
      </li>
      <li>
        <router-link class="dropdown-item" to="/subscriptions"
          >Subscriptions</router-link
        >
      </li>
      <li>
        <a class="dropdown-item" href="account.html">My Account</a>
      </li>
      <li>
        <a class="dropdown-item" style="cursor: pointer" @click="logout"
          >Logout</a
        >
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
  }),
  methods: {
    logout() {
      localStorage.removeItem("token");
      localStorage.removeItem("currentUser");
      localStorage.removeItem("auth");
      window.location.href = "/";
    },
  },

  mounted() {
    axios.get("/api/category/get").then((response) => {
      this.categories = response.data;
    });

    if (localStorage.getItem("token")) {
      this.name = JSON.parse(localStorage.getItem("currentUser"))["name"];
    }
  },
};
</script>
