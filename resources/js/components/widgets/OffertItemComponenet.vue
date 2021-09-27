<template>
    <div class="inner-price-table buy-now-card">
        <div class="card-cus overflow-inherit">
            <h2>Requested Item</h2>

            <div class="content">
      
                <div class="row">
                    <div class="col">
                        <button class="btn btn-danger"  @click="offerTheItem">I Have The Item</button> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default ({
   props: ['id'],
   data:()=>({
       added: false,
       currencyIcon: null,
   }),
   methods:{
      async offerTheItem(){
            this.$router.push('/offer_item/' + this.id); 

    },

   },
   mounted(){
       this.currencyIcon = this.currency;
   }
})
</script>
