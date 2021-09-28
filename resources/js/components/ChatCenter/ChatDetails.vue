<template>
  <div>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcrumb__text">
              <div class="breadcrumb__links">
                <router-link to="/">Home</router-link>
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
                    <div class="text-maroon pl-0 mb-3">{{ user_name }}</div>
                    <div class="p-0" >
                      <div id="chat-list">
                        <p  v-for="(chat,index) in chats" :key="index"  :class="[chat.user_id_from == user_id ? 'text-green text-right msg msg-from' : 'text-milky text-left msg msg-to']">
                            {{ chat.message }}
                        </p>
                      </div>

                      <form @submit.prevent="sendMessage">
                        <div class="row pb-3">
                          <div class="col-sm-10">
                            <textarea
                              id=""
                              name=""
                              rows="3"
                              class="w-100"
                              v-model="form.message"
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
      data: () => ({
         message: '',
         id:null,
         chats :{},
         user_name: null,
         user_id : null,
        form : new form({
            user_id_to: null,
            message: null,
            product_id:null,
            private: 1,
            })
     }),
      components: {
        SideBar,
      },
      methods: {
        getChat(){
          this.id = this.$route.params.id;

          axios.get('/api/chat/getChat/'+this.id).then((response) => {
            this.chats = response.data.chat;
            this.user_id = response.data.user_id;
            //get username from first message

            if(this.user_id == this.chats[0].user_to.id){
              this.user_name = this.chats[0].user_from.user_name;
            }else{
              this.user_name = this.chats[0].user_to.user_name;
            }

            if(this.chats.length == 0){
                this.message = "You Don't Have Chats";
            }else{
              this.form.product_id = this.chats[0].product_id;
              if(this.user_id == this.chats[0].user_id_from ){
                this.form.user_id_to = this.chats[0].user_id_to;
              }else{
                this.form.user_id_to = this.chats[0].user_id_from;
              }
            }
        });

        },
        sendMessage: function(){
          var response = this.form.post('/api/chat/store').then((response) => {
              this.form.message = null
          });
      },
    },
    mounted(){
        this.getChat();
            window.Echo.channel('send-message-private').listen('PrivateChatEvent', event => {

            if(this.form.product_id == event.message.product_id && this.user_id == event.message.user_id_from){

                document.getElementById('chat-list').innerHTML += "<p class='text-green text-right msg msg-from'>"+event.message.message+"</p>";

            }else if(this.form.product_id == event.message.product_id && this.user_id == event.message.user_id_to){

                document.getElementById('chat-list').innerHTML += "<p class='text-milky text-left msg msg-to'>"+event.message.message+"</p>";

            }

        });
    }
};
</script>
