<template>
  <div>
    <nav class="header__menu mobile-menu" v-if="mounted">
      <ul
        class="text-start d-lg-flex d-xl-flex d-md-flex justify-content-between"
        v-if="logged"
      >
        <li
          class="
            menu-1
            cat
            mr-xl-5 mr-lg-5 mr-md-2
            d-lg-flex d-xl-flex d-md-flex
            align-items-center
          "
        >
          <Drop></Drop>
        </li>
        <li class="search-item search-switch">
          <!-- <input type="search" name="search" placeholder="Search here" id="search"> -->
          <Search></Search>
          <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
          <!-- <i class="fas fa-search"></i> -->
        </li>

        <li class="d-xl-flex d-lg-flex d-md-flex icons">
          <router-link to="/help">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="34"
              height="34"
              viewBox="0 0 34 34"
            >
              <g
                id="Group_36"
                data-name="Group 36"
                transform="translate(-742 -317)"
              >
                <g
                  id="Group_35"
                  data-name="Group 35"
                  transform="translate(42.573 14.174)"
                >
                  <path
                    id="Path"
                    d="M3.623,11.52A1.464,1.464,0,0,0,5.14,13.139h.744a.831.831,0,0,0,.83-.779,3.55,3.55,0,0,1,1.07-2.184l1-.983a8.468,8.468,0,0,0,1.636-2.132,4.678,4.678,0,0,0,.467-2.056,4.722,4.722,0,0,0-1.439-3.69A5.782,5.782,0,0,0,5.4,0,5.8,5.8,0,0,0,1.314,1.379,4.5,4.5,0,0,0,.057,3.407,1.478,1.478,0,0,0,1.626,5.2,3.083,3.083,0,0,0,3.69,3.865c.082-.09.163-.179.244-.265A1.918,1.918,0,0,1,5.4,3.013q1.919,0,1.919,2.158a2.731,2.731,0,0,1-.369,1.366A8.206,8.206,0,0,1,5.46,8.21a5.8,5.8,0,0,0-1.525,2.081A5.6,5.6,0,0,0,3.623,11.52Z"
                    transform="translate(710.985 311.25)"
                    fill="#fecc2f"
                  ></path>
                  <path
                    id="Path-2"
                    data-name="Path"
                    d="M.554.562A1.894,1.894,0,0,0,0,1.966,1.9,1.9,0,0,0,.541,3.358a1.972,1.972,0,0,0,1.452.549,1.93,1.93,0,0,0,1.439-.549,1.878,1.878,0,0,0,.554-1.392A1.872,1.872,0,0,0,3.42.562,1.916,1.916,0,0,0,1.993,0,1.957,1.957,0,0,0,.554.562Z"
                    transform="translate(714.144 326.343)"
                    fill="#fecc2f"
                  ></path>
                </g>
                <g
                  id="Ellipse_49"
                  data-name="Ellipse 49"
                  transform="translate(742 317)"
                  fill="none"
                  stroke="#fecc2f"
                  stroke-width="1"
                >
                  <circle cx="17" cy="17" r="17" stroke="none"></circle>
                  <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                </g>
              </g>
            </svg>
          </router-link>
          <router-link to="/buying/wishlist">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="34"
              height="34"
              viewBox="0 0 34 34"
            >
              <g
                id="Group_37"
                data-name="Group 37"
                transform="translate(-784 -317)"
              >
                <g id="Icon_love_solid" transform="translate(790.583 326.125)">
                  <path
                    id="Path"
                    d="M1.6,9.7A5.729,5.729,0,0,1,5.729,0C7.667,0,9.38,2.134,10.417,3.606,11.454,2.134,13.166,0,15.1,0a5.729,5.729,0,0,1,3.985,9.845l-7.926,8.139a1.042,1.042,0,0,1-1.492,0Z"
                    fill="#fd1266"
                  ></path>
                </g>
                <g
                  id="Ellipse_48"
                  data-name="Ellipse 48"
                  transform="translate(784 317)"
                  fill="none"
                  stroke="#fd1266"
                  stroke-width="1"
                >
                  <circle cx="17" cy="17" r="17" stroke="none"></circle>
                  <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                </g>
              </g>
            </svg>
          </router-link>

          <Cart></Cart>
          <Notification></Notification>
          <a
            v-on:click="GotoAdmin"
            v-if="admin"
            style="
              border: 1px solid blue;
              border-radius: 30px;
              width: 40px;
              cursor: pointer;
            "
          >
            <svg
              id="Capa_1"
              style="padding-left: 7px; padding-top: 5px"
              enable-background="new 0 0 512 512"
              height="30"
              viewBox="0 0 512 512"
              width="30"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g>
                <g>
                  <g>
                    <g>
                      <g>
                        <path
                          d="m500.58 196.43-47.02-11.54c-2.22-6.09-4.78-12.19-7.66-18.24l24.49-40.82c3.54-5.9 2.61-13.46-2.26-18.32l-63.64-63.64c-4.86-4.87-12.42-5.8-18.32-2.26l-40.82 24.49c-6.05-2.88-12.15-5.44-18.24-7.66l-11.54-47.02c-1.65-6.7-7.66-11.42-14.57-11.42h-90c-6.91 0-12.92 4.72-14.57 11.42l-11.54 47.02c-6.09 2.22-12.19 4.78-18.24 7.66l-40.82-24.49c-5.9-3.54-13.45-2.61-18.32 2.26l-63.64 63.64c-4.87 4.86-5.8 12.42-2.26 18.32l24.49 40.82c-2.88 6.05-5.44 12.15-7.66 18.24l-47.02 11.54c-6.7 1.65-11.42 7.66-11.42 14.57v90c0 6.91 4.72 12.92 11.42 14.57l47.02 11.54c2.22 6.09 4.78 12.19 7.66 18.24l-24.49 40.82c-3.54 5.9-2.61 13.46 2.26 18.32l63.64 63.64c4.87 4.87 12.42 5.8 18.32 2.26l40.82-24.49c6.05 2.88 12.15 5.44 18.24 7.66l11.11 45.27.43 1.75c1.65 6.7 7.66 11.42 14.57 11.42l48-48 42 48c6.91 0 12.92-4.72 14.57-11.42l.43-1.75 11.11-45.27c6.09-2.22 12.19-4.78 18.24-7.66l40.82 24.49c5.9 3.54 13.45 2.61 18.32-2.26l63.64-63.64c4.87-4.86 5.8-12.42 2.26-18.32l-24.49-40.82c2.88-6.05 5.44-12.15 7.66-18.24l47.02-11.54c6.7-1.65 11.42-7.66 11.42-14.57v-90c0-6.91-4.72-12.92-11.42-14.57z"
                          fill="#4086f4"
                        />
                      </g>
                    </g>
                  </g>
                </g>
                <path
                  d="m500.58 196.43-47.02-11.54c-2.22-6.09-4.78-12.19-7.66-18.24l24.49-40.82c3.54-5.9 2.61-13.46-2.26-18.32l-63.64-63.64c-4.86-4.87-12.42-5.8-18.32-2.26l-40.82 24.49c-6.05-2.88-12.15-5.44-18.24-7.66l-11.54-47.02c-1.65-6.7-7.66-11.42-14.57-11.42h-45v467l3-3 42 48c6.91 0 12.92-4.72 14.57-11.42l.43-1.75 11.11-45.27c6.09-2.22 12.19-4.78 18.24-7.66l40.82 24.49c5.9 3.54 13.45 2.61 18.32-2.26l63.64-63.64c4.87-4.86 5.8-12.42 2.26-18.32l-24.49-40.82c2.88-6.05 5.44-12.15 7.66-18.24l47.02-11.54c6.7-1.65 11.42-7.66 11.42-14.57v-90c0-6.91-4.72-12.92-11.42-14.57z"
                  fill="#4175df"
                />
                <g>
                  <g>
                    <path
                      d="m301 352.25h-90c-8.28 0-15 6.71-15 15v131.58l.43 1.75c1.65 6.7 7.66 11.42 14.57 11.42h90c6.91 0 12.92-4.72 14.57-11.42l.43-1.75v-131.58c0-8.29-6.72-15-15-15z"
                      fill="#fabe2c"
                    />
                  </g>
                </g>
                <path
                  d="m301 352.25h-45v159.75h45c6.91 0 12.92-4.72 14.57-11.42l.43-1.75v-131.58c0-8.29-6.72-15-15-15z"
                  fill="#ff9f00"
                />
                <g id="Admin_1_">
                  <g>
                    <g>
                      <path
                        d="m256 391c-74.439 0-135-60.561-135-135 0-27.368 8.182-53.744 23.66-76.275 15.099-21.978 36.088-38.877 60.697-48.868 4.624-1.878 9.881-1.332 14.02 1.456 4.141 2.787 6.623 7.452 6.623 12.443v103.217l30 20 30-20v-103.218c0-4.991 2.482-9.655 6.623-12.443 4.14-2.787 9.396-3.333 14.02-1.456 24.609 9.991 45.599 26.89 60.697 48.868 15.478 22.532 23.66 48.908 23.66 76.276 0 74.439-60.561 135-135 135zm45-135h.01z"
                        fill="#fdd929"
                      />
                    </g>
                  </g>
                </g>
                <path
                  d="m391 256c0-27.368-8.182-53.744-23.66-76.275-15.099-21.978-36.088-38.877-60.697-48.868-4.624-1.877-9.88-1.332-14.02 1.456-4.141 2.787-6.623 7.452-6.623 12.443v103.217l-30 20v123.027c74.439 0 135-60.561 135-135z"
                  fill="#fabe2c"
                />
              </g>
            </svg>
          </a>
        </li>
        <li
          class="
            menu-1 menu-user
            d-lg-flex d-md-flex d-xl-flex
            align-items-center
          "
        >
          <!-- <a href="#"> -->
          <div class="dropdown drop-user1">
            <button
              class="btn btn-outline-secondary dropdown-toggle"
              id="dropdownMenuButton22"
              data-bs-toggle="dropsdown"
              type="button"
              aria-expanded="false"
            >
              <span>Hello {{ name }}</span>
              <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Icon_down_solid" width="20.833" height="20.833" viewBox="0 0 20.833 20.833">
                        <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"/>
                    </svg> -->
              <svg
                id="Icon_down"
                xmlns="http://www.w3.org/2000/svg"
                width="10.286"
                height="6"
                viewBox="0 0 10.286 6"
              >
                <path
                  id="Path"
                  d="M.251,1.463,4.537,5.749a.857.857,0,0,0,1.212,0l4.286-4.286A.857.857,0,0,0,8.823.251l-3.68,3.68L1.463.251A.857.857,0,1,0,.251,1.463Z"
                  fill="#23ccfd"
                ></path>
              </svg>

              <svg
                class="user-icon"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="52"
                height="100"
              >
                <defs>
                  <filter
                    id="Shape"
                    x="0"
                    y="0"
                    width="100"
                    height="100"
                    filterUnits="userSpaceOnUse"
                  >
                    <feOffset dy="10" input="SourceAlpha">
                      <feGaussianBlur stdDeviation="10" result="blur">
                        <feFlood flood-opacity="0.161">
                          <feComposite operator="in" in2="blur">
                            <feComposite in="SourceGraphic"></feComposite>
                          </feComposite>
                        </feFlood>
                      </feGaussianBlur>
                    </feOffset>
                  </filter>
                </defs>
                <g id="Icon_user_solid">
                  <g
                    id="Icon_user_solid-2"
                    data-name="Icon_user_solid"
                    transform="translate(3.333 3.333)"
                  >
                    <g>
                      <path
                        class="user-acc"
                        id="Shape-2"
                        data-name="Shape"
                        d="M20,40A20,20,0,1,1,40,20,20.023,20.023,0,0,1,20,40Zm0-18a20.237,20.237,0,0,0-6.563,1.313C11.41,24.093,8.82,25.54,8,28c1.477,4.428,7.388,6,12,6s10.523-1.571,12-6c-.821-2.461-3.41-3.908-5.438-4.688A20.237,20.237,0,0,0,20,22ZM20,6a6,6,0,1,0,6,6A6.007,6.007,0,0,0,20,6Z"
                        transform="translate(30 20)"
                        fill="#23ccfd"
                      ></path>
                    </g>
                  </g>
                </g>
              </svg>
            </button>
            <ul
              class="dropdown-menu dropdown-menu-dark"
              id="m-user"
              aria-labelledby="dropdownMenuButton22"
            >
              <li>
                <router-link to="/selling/overview" class="dropdown-item"
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
      <div
        class="d-xl-flex d-lg-flex d-md-flex icons float-right"
        v-if="!logged"
      >
        <router-link class="btn btn-maroon color white" to="/login"
          >Join <i class="fas fa-sign-in-alt"></i
        ></router-link>
      </div>
    </nav>
    <ul
      class="
        text-start
        d-lg-flex d-xl-flex d-md-flex
        justify-content-between
        d-flex
        links-header-mobil
      "
      v-if="logged"
    >
      <!-- <li
                class="menu-1 cat mr-xl-5 mr-lg-5 mr-md-2 d-lg-flex d-xl-flex d-md-flex align-items-center">
                <Drop></Drop>
            </li> -->
      <!-- <li class="search-item search-switch">
                <Search></Search>
            </li> -->
      <!-- <input type="search" name="search" placeholder="Search here" id="search"> -->
      <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
      <!-- <i class="fas fa-search"></i> -->

      <li class="d-xl-flex d-lg-flex d-md-flex icons">
        <a class="search-item search-switch mobile-search">
          <Search></Search>
        </a>

        <router-link to="/help">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="34"
            height="34"
            viewBox="0 0 34 34"
          >
            <g
              id="Group_36"
              data-name="Group 36"
              transform="translate(-742 -317)"
            >
              <g
                id="Group_35"
                data-name="Group 35"
                transform="translate(42.573 14.174)"
              >
                <path
                  id="Path"
                  d="M3.623,11.52A1.464,1.464,0,0,0,5.14,13.139h.744a.831.831,0,0,0,.83-.779,3.55,3.55,0,0,1,1.07-2.184l1-.983a8.468,8.468,0,0,0,1.636-2.132,4.678,4.678,0,0,0,.467-2.056,4.722,4.722,0,0,0-1.439-3.69A5.782,5.782,0,0,0,5.4,0,5.8,5.8,0,0,0,1.314,1.379,4.5,4.5,0,0,0,.057,3.407,1.478,1.478,0,0,0,1.626,5.2,3.083,3.083,0,0,0,3.69,3.865c.082-.09.163-.179.244-.265A1.918,1.918,0,0,1,5.4,3.013q1.919,0,1.919,2.158a2.731,2.731,0,0,1-.369,1.366A8.206,8.206,0,0,1,5.46,8.21a5.8,5.8,0,0,0-1.525,2.081A5.6,5.6,0,0,0,3.623,11.52Z"
                  transform="translate(710.985 311.25)"
                  fill="#fecc2f"
                ></path>
                <path
                  id="Path-2"
                  data-name="Path"
                  d="M.554.562A1.894,1.894,0,0,0,0,1.966,1.9,1.9,0,0,0,.541,3.358a1.972,1.972,0,0,0,1.452.549,1.93,1.93,0,0,0,1.439-.549,1.878,1.878,0,0,0,.554-1.392A1.872,1.872,0,0,0,3.42.562,1.916,1.916,0,0,0,1.993,0,1.957,1.957,0,0,0,.554.562Z"
                  transform="translate(714.144 326.343)"
                  fill="#fecc2f"
                ></path>
              </g>
              <g
                id="Ellipse_49"
                data-name="Ellipse 49"
                transform="translate(742 317)"
                fill="none"
                stroke="#fecc2f"
                stroke-width="1"
              >
                <circle cx="17" cy="17" r="17" stroke="none"></circle>
                <circle cx="17" cy="17" r="16.5" fill="none"></circle>
              </g>
            </g>
          </svg>
        </router-link>
        <router-link to="/buying/wishlist">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="34"
            height="34"
            viewBox="0 0 34 34"
          >
            <g
              id="Group_37"
              data-name="Group 37"
              transform="translate(-784 -317)"
            >
              <g id="Icon_love_solid" transform="translate(790.583 326.125)">
                <path
                  id="Path"
                  d="M1.6,9.7A5.729,5.729,0,0,1,5.729,0C7.667,0,9.38,2.134,10.417,3.606,11.454,2.134,13.166,0,15.1,0a5.729,5.729,0,0,1,3.985,9.845l-7.926,8.139a1.042,1.042,0,0,1-1.492,0Z"
                  fill="#fd1266"
                ></path>
              </g>
              <g
                id="Ellipse_48"
                data-name="Ellipse 48"
                transform="translate(784 317)"
                fill="none"
                stroke="#fd1266"
                stroke-width="1"
              >
                <circle cx="17" cy="17" r="17" stroke="none"></circle>
                <circle cx="17" cy="17" r="16.5" fill="none"></circle>
              </g>
            </g>
          </svg>
        </router-link>

        <Cart></Cart>
        <Notification></Notification>
      </li>
      <li
        class="
          menu-1 menu-user
          d-lg-flex d-md-flex d-xl-flex
          align-items-center
        "
      ></li>
    </ul>
  </div>
</template>
<style lang="scss">
.header {
  .container {
    @media (max-width: 1000px) {
      max-width: 95%;
    }
    @media (max-width: 500px) {
      max-width: 99%;
    }
  }
  .container > .row {
    // @media (max-width: 1000px) {
    //     flex-direction: column-reverse;
    // }
  }
  .links-header-mobil {
    @media (min-width: 1000px) {
      display: none !important;
    }
    @media (min-width: 500px) {
      display: none !important;
    }
  }
  .links-header-mobil {
    .icons a {
      margin-right: 53px;
      margin-left: 44px;
      text-decoration: none;
      @media (max-width: 1000px) {
        margin-right: 68px;
        margin-left: 18px;
      }
      @media (max-width: 925px) {
        margin-right: 63px;
      }
      @media (max-width: 900px) {
        margin-right: 59px;
      }
      @media (max-width: 860px) {
        margin-right: 50px;
      }
      @media (max-width: 760px) {
        margin-right: 21px;
        display: inline-block;
        text-align: center;
      }
      @media (max-width: 660px) {
        margin-right: 12px;
        display: inline-block;
        text-align: center;
      }
      @media (max-width: 500px) {
        margin-right: 16px;
        margin-left: 0px;
        display: inline-block;
        text-align: center;
      }
      @media (max-width: 330px) {
        margin-right: 2px;
      }
    }
    .notif-cont {
      left: -181px;
    }
    .notif-cont {
      width: 268px;
    }
  }
}

.color {
  color: #5fcdfe;
}
.white {
  color: white;
}
</style>
<script>
import Drop from "./DropdownComponent";
import Cart from "./CartComponent";
import Notification from "./NotificationComponent";
import Search from "./SearchComponent";
export default {
  components: {
    Drop,
    Cart,
    Notification,
    Search,
  },
  data: () => ({
    logged: false,
    mounted: false,
    admin: false,
    name: "",
    email: null,
  }),
  methods: {
    logout() {
      localStorage.removeItem("token");
      localStorage.removeItem("currentUser");
      localStorage.removeItem("auth");
      window.location.href = "/";
    },
    GotoAdmin: function () {
      window.location.href = "/admin";
    },
  },
  created() {
    //  Fire.$on('LoginEvent',()=>{
    //      this.logged = true;
    //  })
  },
  mounted() {
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
  },
};
</script>
