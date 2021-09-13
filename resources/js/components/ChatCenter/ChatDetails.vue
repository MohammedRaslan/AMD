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
                    ></path>
                  </g>
                </svg>
                <span>Chat Details</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="selling buying messages">
      <div class="over-lay-selling d-none"></div>
      <div class="container">
        <div class="row">
          <div class="top-tabs">
            <h2 class="py-3 py-lg-4">
              Chat Details
              <span class="open-tabs"><i class="fa fa-bars"></i></span>
            </h2>
          </div>

          <side-bar></side-bar>

          <div class="col-xl-10 col-md-12 mt-3 mt-lg-0 px-3">
            <div
              class="tab-content border-yellow border-radius-10 mb-5 p-lg-3 p-1 pb-0"
              id="v-pills-tabContent"
            >
              <div class="inner-content p-2">
                <div class="">
                    <div class="text-maroon pl-0 mb-3">Mohamed Maged</div>
                    <div class="p-0">
                      <p class="text-milky pr-lg-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorem libero id maiores. Vitae, omnis quas quia,
                        explicabo beatae officia necessitatibus cumque
                        voluptatem dolore molestiae exercitationem vero
                        corrupti. Quas, itaque eligendi.
                      </p>
                      <p class="text-green pl-lg-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorem libero id maiores. Vitae, omnis quas quia,
                        explicabo beatae officia necessitatibus cumque
                        voluptatem dolore molestiae exercitationem vero
                        corrupti. Quas, itaque eligendi.
                      </p>
                      <p class="text-milky pr-lg-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorem libero id maiores. Vitae, omnis quas quia,
                        explicabo beatae officia necessitatibus cumque
                        voluptatem dolore molestiae exercitationem vero
                        corrupti. Quas, itaque eligendi.
                      </p>
                      <p class="text-green pl-lg-100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Dolorem libero id maiores. Vitae, omnis quas quia,
                        explicabo beatae officia necessitatibus cumque
                        voluptatem dolore molestiae exercitationem vero
                        corrupti. Quas, itaque eligendi.
                      </p>
                      <form action="">
                        <div class="row pb-3">
                          <div class="col-sm-10">
                            <textarea
                              id=""
                              name=""
                              rows="3"
                              class="w-100"
                            ></textarea>
                          </div>
                          <div class="col-sm-2 d-flex align-items-center">
                            <button class="w-100 btn btn-milky mb-lg-3 mb-0">
                              Send
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  <!-- </div> -->
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
import SideBar from "./SideBarComponent.vue";

export default {
  components: {
    SideBar,
  },
};
</script>
