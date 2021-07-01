<template>
    <div class="inner-price-table buy-now-card">
        <div class="card-cus overflow-inherit">
            <h2>Buy It Now</h2>

            <div class="content">
                <div>
                    <h3>$ {{ this.price }}</h3>
                    <p>{{ this.wishlistCount     }} Wachers</p>
                </div>
                <div class="row">
                    <div class="col">
                        <button class="btn btn-danger" v-if="(added || exist)" @click="removeFromCart">Remove From Cart</button>
                        <button class="btn btn-danger" v-else @click="addToCart">Add To Cart</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default ({
   props: ['id','price','exist','wishlistCount'],
   data:()=>({
       added: false
   }),
   methods:{
      async addToCart(){
        const response = await axios.post('/api/cart/add/'+this.id).then((response) => {
            if(response.data == true){
                Fire.$emit('AddedToCart');
                this.added = true;
            }
        });
    },
       async removeFromCart(){
        const response = await axios.post('/api/cart/remove/'+this.id).then((response) => {
            if(response.data == true){
                Fire.$emit('RemoveFromCart');
                this.added = false;
                this.exist = false;
            }
        });
    }
   },
})
</script>
