<template>
  <div>
    <ul
      data-v-adb1784e=""
      class="text-start d-lg-flex d-xl-flex d-md-flex justify-content-between"
    >
       <li v-for="category in categories" :key="category.id">
            <router-link class="dropdown-item" :to="{name: 'ShopCategoryComponent', params:{query: category.id}}">{{ category.title }}</router-link>
          </li>

      <li>
        <div class="dropdown">
          <button
            class="btn dropdown-toggle"
            type="button"
            id="dropdownMenuMobile"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <span>Hello {{ name }}</span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuMobile">
            <!-- <router-link to="/selling/overview" class="dropdown-item"
              >Selling</router-link
            > -->
            <li>
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
      </li>
    </ul>
  </div>
</template>
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
