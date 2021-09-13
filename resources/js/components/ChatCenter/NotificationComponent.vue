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
                                <g id="Icon_20_Grey_Dropdown" data-name="Icon / 20 / Grey / Dropdown" transform="translate(-8 13) rotate(-90)">
                                    <path id="Triangle" d="M3,4,6,0H0Z" transform="translate(7 8)" fill="#ffe0e0"/>
                                </g>
                            </svg>
                            <span>Notifications</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <!-- Latest Blog Section Begin -->
        <section class="selling buying messages">

        <div class="container">
            <div class="row">
                <div class="top-tabs">
                    <h2>Notification <span class="open-tabs"><i class="fa fa-bars"></i></span> </h2>

                </div>

                <side-bar></side-bar>

                <div class="col-xl-10 col-md-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="inner-content">
                            <!-- Tab1 -->
                             <h2 v-if="message != '' " class="text-center">{{ message }}</h2>
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" v-show="message == ''">
                                <div class="row text-yellow title-accordion">
                                    <div class="col-2 pl-0">From</div>
                                    <div class="col-6" style="padding-left: 33px;">Subject</div>
                                    <div class="col-2">Received</div>
                                    <div class="col-2">Actions</div>

                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample1">
                                    <!-- Block Item -->
                                    <div class="accordion-item" v-for="(notification,index) in notifications.data" :key="index" :id="'row-'+notification.id">
                                        <div class="accordion-header" id="flush-headingOne">
                                            <div class="row px-0 w-auto align-items-start collapsed" style="padding:2em; border-bottom: 1px solid white; " data-bs-target="#flush-collapseOne" data-bs-toggle="collapse" aria-controls="flush-collapseOne" aria-expanded="false">
                                                <div class="col-2 text-maroon pl-0">{{ notification.user_from.user_name }}</div>
                                                <div class="col-6 text-offwhite" style="padding-left: 31px;">{{ notification.message }}</div>
                                                <div class="col-2 text-maroon">{{ notification.created_at }}</div>
                                                <div class="col-2 text-offwhite" :id="'readbtn-'+notification.id"  v-if="notification.seen == 0"> <button @click="MarkAsRead(notification.id)" class="btn btn-milky">Mark As Read</button> </div>
                                                <div class="col-2 text-offwhite"  v-if="notification.seen == 1"> <button @click="deleteNotification(notification.id)" class="btn btn-danger">Delete</button> </div>

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

                <pagination :data="notifications" @pagination-change-page="getNotification"></pagination>  
            </div>

        </div>
    </section>
    <!-- Latest Blog Section End -->
    </div>
</template>
<script>
import SideBar from './SideBarComponent.vue'

export default {
     data: () => ({
          checkImage: '',
          message: '',
         notifications :{},
     }),

     components:{
        SideBar,
    },
    methods: {
        getNotification(page = 1){
        axios.get('/api/notification/getAllNotification?page=' + page).then((response) => {
            this.notifications = response.data;
            if(this.notifications.data.length == 0){
                this.message = "You Don't Have Notifications";
            }
        });

        },
        MarkAsRead(id){
            axios.get('/api/notification/markOneAsRead/'+id).then((response) => {
            if(response.data == true){
                let div = document.getElementById('readbtn-'+id);
                div.removeChild(div.lastElementChild);
                let span = '<span> Marked As Seen </span>';
                div.innerHTML = (span);
            }
        });
        },
        deleteNotification(id){
            axios.delete('/api/notification/delete/'+id).then((response) => {
            if(response.data == true){
                document.getElementById('row-'+id).remove();
            }
        });
        }
    },
    mounted(){
        this.getNotification();
    }
}
</script>
