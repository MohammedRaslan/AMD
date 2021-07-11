<template>
       <div class="inner-price-table mt-5 border-yellow">
            <div class="card-cus">
                <h2 class="bg-yellow dark-blue">Make an Offer</h2>
                <div class="content">
                    <div>
                        <form @submit.prevent="makeOffer">
                            <input  type="number" v-model="form.offer" :max="best_offer_price" placeholder="$ 0.00"> 
                            <button class="btn-dark btn-yellow">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default ({
        props:['id','best_offer_price'],
        data:()=>({
            form : new form({
                id: null,
                offer: null,
            })
        }),
        methods:{
            async makeOffer(){
                this.form.id = this.id;
                const response = await this.form.post('/api/offer/makeOffer').then((response) => {
                    Toast.fire({
                        icon: 'success',
                        title: 'Offer Made Successfully'
                    });
                });
            }
        }
})
</script>
