<template>
       <div class="inner-price-table mt-5 border-yellow">
            <div class="card-cus">
                <h2 class="bg-yellow dark-blue">List of Offers</h2>
                <div class="content d-flex justify-content-center">
                    <p class="text-center" v-if="offers.length == 0">No Offers Yet</p>
                    <div v-else>
                  <table class="table white">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr v-for="(offer, index) in offers" :key="index" @mouseover="markAsView(offer.id)" :id="'offer_row_'+offer.id">
                                 <!--<div class="dott"></div>-->
                                <th scope="row"> <span v-if="offer.viewed == 0" :id="'dot_'+offer.id" class="dott" style="display:inline-block;width:12px; height:12px;margin-right:3px"></span>  {{ index +1  }}</th>
                                <td>{{ offer.user.user_name }}</td>
                                <td>{{ offer.price }}</td>
                                <td :id="'offer_btn_'+offer.id"><button class="btn btn-milky btn-sm" @click="acceptOffer(offer.id)">Accept</button>
                                    <button class="btn btn-maroon btn-sm" @click="declineOffer(offer.id)">Decline</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
</template>
<style scoped>
    .white{
        color: white !important;
    }
    .dott{
        background-color: teal;
        border-radius: 50%;
        width: 7px !important;
        height: 7px !important;
    }
</style>
<script>
export default {
    props:['id'],
    data:()=>({
        offers: [],
    }),
    methods:{
        acceptOffer(id){
            axios.get('/api/offer/accept/'+id).then((response) => {
          
                    if(response.data == true){
                        Toast.fire({
                            icon: 'success',
                            title: 'Offer Accepted'
                        });
                        Fire.$emit('offerAccepted');
                        document.getElementById('offer_btn_'+id).innerHTML = '<p>Accepted</p>';
                    }
            })
        },
        declineOffer(id){
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Decline it!'
                }).then((result) => {
                if (result.isConfirmed) {
                const response = axios.get('/api/offer/declineOffer/'+id).then((response) => {
                    Swal.fire(
                        'Declined!',
                        'Offer Declined.',
                        'success'
                    )
                    document.getElementById('offer_row_'+id).remove();
                });
               
                }
                })
       
        },
        async markAsView(id){
            const response = axios.get('/api/offer/markAsView/'+id).then((response) => {
                if(document.getElementById('dot_'+id)){
                    document.getElementById('dot_'+id).remove();
                }
                
            });
        }
    },
    mounted(){
        axios.get('/api/offer/getOffers/'+this.id).then((response) => {
            this.offers = response.data;
        });

        window.Echo.channel('make-offer-event').listen('MakeOfferEvent', event => {
            if(event.offer.product_id == this.id){
                this.offers.push(event.offer);
            }
        });
    }
}
</script>