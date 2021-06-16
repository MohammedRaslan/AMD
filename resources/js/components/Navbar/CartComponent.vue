<template>

           <router-link to="/cart/first-step" v-bind:class="[bell ? bellClass: '',relative]" href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_38" data-name="Group 38" transform="translate(-826 -317)">
                                        <g id="Group_34" data-name="Group 34" transform="translate(-1)">
                                        <g id="Icon_20_Grey_Shopping_Cart" data-name="Icon / 20 / Grey / Shopping Cart" transform="translate(834.019 323.998)">
                                            <path id="Shape" d="M2.252,4.742H4L1.408.369A.759.759,0,0,0,.375.1.731.731,0,0,0,.1,1.118Z" transform="translate(11.776 1.009)" fill="#7ac943"></path>
                                            <path id="Shape-2" data-name="Shape" d="M3.9,1.116A.735.735,0,0,0,3.627.1.762.762,0,0,0,2.594.367L0,4.744H1.75Z" transform="translate(4.193 1.011)" fill="#7ac943"></path>
                                            <path id="Shape-3" data-name="Shape" d="M15.156,11.9H4.549A1.74,1.74,0,0,1,2.922,10.51L1.685,3.918h-.4A1.273,1.273,0,0,1,0,2.658V1.26A1.273,1.273,0,0,1,1.283,0H18.676a1.278,1.278,0,0,1,1.287,1.256v1.4a1.273,1.273,0,0,1-1.282,1.26h-.652l-1.246,6.6A1.741,1.741,0,0,1,15.156,11.9Zm-1.8-7.172a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,13.352,4.731Zm-2.327,0a.738.738,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,11.025,4.731Zm-2.341,0a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.738.738,0,0,0,8.684,4.731Zm-2.327,0a.72.72,0,0,0-.725.713V9.431a.726.726,0,0,0,1.451,0V5.444A.72.72,0,0,0,6.357,4.731Z" transform="translate(0 7.092)" fill="#7ac943"></path>
                                        </g>
                                        <g id="Ellipse_46" data-name="Ellipse 46" transform="translate(827 317)" fill="none" stroke="#7ac943" stroke-width="1">
                                            <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                            <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                        </g>
                                    </g>
                                    </svg>
                                    <span class="quantity-cart">{{number}}</span>
                               </router-link>  
    
</template>

<script>

export default ({
   data: ()=>({
       number: 0,
       bell: false,
       bellClass: 'belll',
       relative: 'position-relative',
       id: JSON.parse(localStorage.getItem('currentUser'))['id'],
   }),
   beforeCreate(){
    axios.get('/api/cart/getCartCount/'+this.id).then((response) => {
                this.number = response.data;
            });
   },
   created(){
          Fire.$on('AddedToCart',()=>{
             this.bell = true;
             this.number = parseInt(this.number) + 1;
             setTimeout(()=>{
                 this.bell = false;
                  }, 2000);
            });
        Fire.$on('RemoveFromCart',()=>{
             this.bell = true;
             this.number = parseInt(this.number) - 1;
            setTimeout(()=>{
                 this.bell = false;
                  }, 2000);
        });
     
   },
    mounted(){
        Fire.$emit('mounted');
   
    }
})
</script>


