<template>
    <div v-show="author" class="inner-price-table question mt-5">
        <div class="card-cus">
            <h2>{{ this.productUserName }}</h2>

            <div class="content data" >
                <h4 v-show="author">Send a message to the seller</h4>
                <div style="display:flex; flex-direction:column-reverse">
                    <!-- <div v-show="messageAlert != null" class="text-white text-center"> {{ messageAlert }} </div> -->
                    <p class="d-block" v-for="(message,index) in messages" :key="index" >
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
    props: ['productUserID','productUserName','productUserEmail','productID','loggedUser'],
        data:()=>({
            messageAlert: null,
            messages: [],
            author: false,
            form : new form({
                user_id_to: null,
                message: null,
                product_id:null,
                private: 0,
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
                if(response.data.length == 0){
                    this.messageAlert = "There Are No Messages";
                }else{
                    this.messages = response.data;
                }
            });

            window.Echo.channel('send-message').listen('ChatEvent', event => {
                this.messageAlert = null;
                console.log(this.author, this.loggedUser, event.message.user_id_from);
                if(!this.author || this.loggedUser == event.message.user_id_from){
                    if(this.messages.length == 0){
                        this.messages.push(event.message);
                    }else{
                        this.messages.unshift(event.message);

                    }
                }

            });
        }
})
</script>
