<template>
    <div style="
    display: flex;
    justify-content: flex-end;
">
        <i  :class="[userAddedItemToWishlist ? heartSolid : heartEmpty, heart ]" :id="'wishlist_'+product_id" @click="addToWishlist(product_id)"></i>
        <span :id="'wishlistCount_'+product_id">{{ this.wishlistCount }} </span>
    </div>
                               
</template>

<script>
export default({
    props: ['userAddedItemToWishlist','product_id','wishlistCount','product_user_id'],
    data:()=>({
        heartSolid : 'fas',
        heartEmpty : 'far',
        heart : ' fa-heart heart',
        user_id: null,
    }),
    methods:{
        addToWishlist(product_id){
            if(this.user_id != this.product_user_id){
            axios.get('/api/product/AddToWishlist/'+product_id).then((response) => {
                if(response.data.status == 'added'){
                    document.getElementById("wishlist_"+product_id).classList.remove('far');
                    document.getElementById("wishlistCount_"+product_id).innerHTML = 
                    parseInt(document.getElementById("wishlistCount_"+product_id).innerHTML) + 1 ; 
                    document.getElementById("wishlist_"+product_id).classList.add('fas');
                }else{
                    document.getElementById("wishlist_"+product_id).classList.remove('fas');
                     document.getElementById("wishlistCount_"+product_id).innerHTML = 
                    parseInt(document.getElementById("wishlistCount_"+product_id).innerHTML) - 1 ; 
                    document.getElementById("wishlist_"+product_id).classList.add('far');
                }
            });
        }
        }
    },
   async mounted(){
       await axios.get('/api/user/getUserId').then((response) => {
            this.user_id = response.data;
        });
    }
})
</script>
