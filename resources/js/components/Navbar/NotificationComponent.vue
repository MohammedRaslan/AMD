<template>
        <div class="position-relative pr-2 d-inline-block" >
            <div class="btn-quantity">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                    <g id="Group_30" data-name="Group 30" transform="translate(-844 -319)">
                        <g id="Icon_20_Grey_Notification" data-name="Icon / 20 / Grey / Notification" transform="translate(851.223 326)">
                            <path id="Shape" d="M17.437,16.869l-1.5-2.385a6.832,6.832,0,0,1-1.06-3.645V8.75A5.886,5.886,0,0,0,10.5,3.162v-1.5a1.752,1.752,0,0,0-3.5,0v1.5A5.886,5.886,0,0,0,2.624,8.75v2.089a6.836,6.836,0,0,1-1.06,3.644l-1.5,2.385a.4.4,0,0,0-.005.42.44.44,0,0,0,.38.212H17.062a.443.443,0,0,0,.381-.211A.4.4,0,0,0,17.437,16.869Z" transform="translate(1.028)" fill="#9f72fc"></path>
                            <path id="Shape-2" data-name="Shape" d="M0,0A3.072,3.072,0,0,0,2.755,1.667,3.072,3.072,0,0,0,5.511,0H0Z" transform="translate(7.022 18.333)" fill="#9f72fc"></path>
                        </g>
                        <g id="Ellipse_46" data-name="Ellipse 46" transform="translate(844 319)" fill="none" stroke="#9f72fc" stroke-width="1">
                            <circle cx="17" cy="17" r="17" stroke="none"></circle>
                            <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                        </g>
                    </g>
                </svg>
                <span class="quantity-notif">{{ count }}</span>
            </div>
            <div class="notif-cont">
                <!-- Block Item -->
                <div @click="markAllAsRead" class="read"> Mark all as read</div>
                <div class="item  position-relative" v-for="(noti, index) in notifications" :key="index">
                    <div class="row position-relative">
                        <router-link class="over-link" :to="{name: 'ShopDetailComponent', params:{query: noti.product.id}}"></router-link>
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
            </div>
        </div>
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
    }),
    methods:{
        str_replace(str){
            str = str.replace('public',window.location.origin + '/storage');
            return str;
        },
        markAllAsRead(){
            axios.get('/api/notification/markAllAsRead').then((response) => {
                this.count = 0;
                this.notifications = null;
            });
        },
        getNotification(){
            axios.get('/api/notification/new').then((response) => {
            this.notifications = response.data.notifications;
            this.count = response.data.count;
    });
        }
    },
    mounted(){
        this.getNotification();
        Fire.$on('getNotification',()=>{
            this.getNotification();
        });

    }
})
</script>

