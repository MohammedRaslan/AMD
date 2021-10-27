<template>
    <a class="position-relative d-inline-block" @click="markAllAsRead">
        <div v-on:click="clickDropDwonNot()">
            <button class="btn-notification bg-transparent border-0 dropdown-notifications">
                <svg class="dropdown-notifications" fill="#fff" stroke="#fff" xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Notifications">
                    <g class="dropdown-notifications" id="Group_30" data-name="Group 30"
                        transform="translate(-844 -319)">
                        <g class="dropdown-notifications" id="Icon_20_Grey_Notification"
                            data-name="Icon / 20 / Grey / Notification"
                            transform="translate(851.223 326)">
                            <path class="dropdown-notifications" id="Shape"
                                d="M17.437,16.869l-1.5-2.385a6.832,6.832,0,0,1-1.06-3.645V8.75A5.886,5.886,0,0,0,10.5,3.162v-1.5a1.752,1.752,0,0,0-3.5,0v1.5A5.886,5.886,0,0,0,2.624,8.75v2.089a6.836,6.836,0,0,1-1.06,3.644l-1.5,2.385a.4.4,0,0,0-.005.42.44.44,0,0,0,.38.212H17.062a.443.443,0,0,0,.381-.211A.4.4,0,0,0,17.437,16.869Z"
                                transform="translate(1.028)"></path>
                            <path class="dropdown-notifications" id="Shape-2" data-name="Shape"
                                d="M0,0A3.072,3.072,0,0,0,2.755,1.667,3.072,3.072,0,0,0,5.511,0H0Z"
                                transform="translate(7.022 18.333)"></path>
                        </g>
                        <g class="dropdown-notifications" id="Ellipse_46" data-name="Ellipse 46"
                            transform="translate(844 319)" fill="none" stroke-width="1">
                            <circle class="dropdown-notifications" cx="17" cy="17" r="17" stroke="none"></circle>
                            <circle class="dropdown-notifications" cx="17" cy="17" r="16.5" fill="none"></circle>
                        </g>
                    </g>
                </svg>
                <span v-show="count > 0" v-html="count" class="quantity-notif" style="top:-10px !important"></span>
            </button>

        </div>
        <div class="notif-cont" v-bind:class="{ 'd-block': dropDwonNot }">
            <!-- Block Item -->
            <h6 v-if="message != null " class="text-center">{{ message }}</h6>
            <!-- <div @click="markAllAsRead" class="read" v-if="message == ''"> Mark all as read</div> -->
            <div class="item  position-relative" v-for="(noti, index) in notifications" :key="index">
                <div class="row position-relative">
                    <!-- <router-link class="over-link" :to="{name: 'ShopDetailComponent', params:{query: noti.product_id}}"></router-link> -->
                    <router-link class="over-link" to="/notifications"></router-link>
                    <div class="col-4">
                        <figure style="max-width:50%">
                            <img :src="str_replace(noti.product.image)" alt>
                        </figure>
                    </div>
                    <div class="col-8">
                        <h5>{{ noti.product.title }}.</h5>
                        <p>{{ noti.message }}.</p>
                    </div>
                </div>
                <button class="cancal-not">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>
            <!-- <router-link to="/notifications" class="text-marron" v-show="count > 0" >Notifications</router-link> -->
            <router-link to="/notifications" class="text-maroon font-weight-bolder mt-2 d-block" >Notifications</router-link>
        </div>
    </a>
</template>
<style scoped>
    .read{
        color: rgb(15, 79, 197);
        cursor: pointer;
    }
</style>
<script>
export default ({
    data:()=>({
        count: 0,
        notifications: {},
        message : "",
        dropDwonNot: false
    }),
    methods:{
        str_replace: function(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        markAllAsRead: function(){
            axios.get('/api/notification/markAllAsRead').then((response) => {
                this.count = 0;
                // this.notifications = null;
                //  this.message = "You Don't Have Notifications";
            });
        },
        getNotification: function(){
            axios.get('/api/notification/new').then((response) => {
            this.notifications = response.data.notifications;
                this.count = response.data.count;
                if(this.notifications.length == 0){
                    this.message = "You Don't Have Notifications";
                }
        });
        },
        blurDropDwonNot () {
            setTimeout(() => this.dropDwonNot = false, 320);
        },
        clickDropDwonNot () {
            this.dropDwonNot = !this.dropDwonNot
        },
    },
    mounted(){
        this.getNotification();
        window.Echo.channel('AcceptOfferChannel').listen('AcceptOfferEvent', event => {
            if(event.user_email == JSON.parse(localStorage.getItem('currentUser'))['email']){
                  this.notifications.push(event.data);
                  this.count = parseInt(this.count) + 1;
                  this.message = '';
            }
        });

        window.Echo.channel('decline-offer-event').listen('DeclineOfferEvent', event => {
            if(event.email == JSON.parse(localStorage.getItem('currentUser'))['email']){
                  this.notifications.push(event.data);
                  this.count = parseInt(this.count) + 1;
                  this.message = '';

            }
        });

        var self = this
        window.addEventListener('click', function(e){
            if (! e.target.parentNode.classList.contains('dropdown-notifications')){
                self.blurDropDwonNot()
                console.log('lkdf');
            }
        }, false)
    }
})
</script>

