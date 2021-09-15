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
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown"
                                    transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0">
                                    </path>
                                </g>
                            </svg>
                            <span>Messages</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="selling buying messages">
        <div class="over-lay-selling d-none" @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" :class="{ 'd-block1': openSlideBar }"></div>
        <div class="container">
            <div class="row">
                 <div class="top-tabs p-0 mb-4">
                    <h2 class='py-3 py-lg-5'>Messages <span @click="openSlideBar = !openSlideBar" :aria-pressed="openSlideBar ? 'true' : 'false'" class="open-tabs"><i class="fa fa-bars"></i></span> </h2>
                </div>

                <side-bar :openSlideBar='openSlideBar'></side-bar>

                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <!-- Tab1 -->
                            <div class="tab-pane fade show active" id="v-pills-home3" role="tabpanel" aria-labelledby="v-pills-home3-tab">
                                <div class="row text-yellow title-accordion d-none d-lg-flex">
                                    <div class="col-2 pl-0">From</div>
                                    <div class="col-2 pl-0">To</div>
                                    <div class="col-4" style="padding-left: 33px;">Subject</div>
                                    <div class="col-2">Received</div>
                                    <div class="col-2">Actions</div>
                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample1">
                                    <!-- Block Item -->
                                    <div class="accordion-item" v-for="(chat,index) in chats" :key="index" :id="'row-'+chat.id">
                                        <div class="accordion-header" id="flush-headingOne">
                                            <div class="row px-0 w-auto align-items-start collapsed" style="padding:2em; border-bottom: 1px solid white;">
                                                <div class="col-6 col-lg-2 mb-3 mb-lg-0 text-maroon">{{ chat.user_from.user_name }}</div>
                                                <div class="col-6 col-lg-2 mb-3 mb-lg-0 text-maroon">{{ chat.user_to.user_name }}</div>
                                                <div class="col-6 col-lg-4 mb-3 mb-lg-0 text-offwhite"> {{ chat.product.title }} </div>
                                                <div class="col-6 col-lg-2 mb-3 mb-lg-0 text-maroon">{{ chat.created_at }}</div>
                                                <div class="col-lg-2 text-offwhite">
                                                    <button  class="btn btn-milky w-100 mb-2" @click="goToChat(chat.id)"> Open Chat</button>
                                                    <button class="btn btn-danger w-100" disabled>Archive</button>
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

            <div class="pagination-selling">

                <!-- <pagination :data="chats" @pagination-change-page="getChats"></pagination>   -->
            </div>

        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<script>
import SideBar from './SideBarComponent.vue'

export default ({
      data: () => ({
         message: '',
         chats :{},
         openSlideBar: false,
     }),

     components:{
        SideBar,
    },
        methods: {
        getChats(page = 1){
        axios.get('/api/chat/getAllChat?page=' + page).then((response) => {
            this.chats = response.data;
            if(this.chats.length == 0){
                this.message = "You Don't Have Chats";
            }
        });

        },
        goToChat(id){
            this.$router.push("/chat/"+id);
        }
    },
    mounted(){
        this.getChats();
    }
})
</script>
