<template>
          <div class="inner-price-table question mt-5">
                            <div class="card-cus">
                                <h2>{{ this.productUserName }}</h2>

                               <div class="content data" >
                                   <h4 v-show="author">Send a message to the seller</h4>
                                <div style="display:flex; flex-direction:column-reverse">
                                        <p class="d-block" v-for="(message,index) in messages" :key="index">
                                       <span>{{ message.user_from.user_name }}:</span>
                                         {{ message.message }}
                                    </p>
                                </div>
                                   <form @submit.prevent="sendMessage" v-show="author">
                                       <textarea v-model="form.message" name="" id="" cols="39" rows="4" ></textarea>
                                       <button :disabled="form.busy">Send</button>
                                   </form>
                               </div>
                            </div>
                        </div>
</template>

<script>

export default({
    props: ['productUserID','productUserName','productUserEmail','productID'],
        data:()=>({
            messages: {},
            author: false,
            form : new form({
                user_id_to: null,
                message: null,
                product_id:null,
            })
        }),
        methods:{
            sendMessage: function(){
                this.form.product_id = this.productID;
                var response = this.form.post('/api/chat/store').then((response) => {
                    this.form.message = null
                });
            },
        },
        mounted(){
            if(JSON.parse(localStorage.getItem('currentUser'))['email'] != this.productUserEmail){
                this.form.user_id_to = this.productUserID;
                this.author = true;
            }

            axios.get('/api/chat/getMessages/'+this.productID).then((response) =>{
                this.messages = response.data;
            });

            window.Echo.channel('send-message').listen('ChatEvent', event => {
                this.messages.unshift(event.message);
            });
        }
})
</script>
