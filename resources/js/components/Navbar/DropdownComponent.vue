<template>
    <div class="dropdown drop-1 marketplace-categories" :class="{ 'borderrad': dropCategories }" v-on:click="clickDropCategories()">
        <button class="btn btn-outline-secondary dropdown-toggle marketplace-categories">
            <span>Marketplace</span>
            <svg id="Icon_down_solid" class="d-inline marketplace-categories" xmlns="http://www.w3.org/2000/svg" style="width: 22px; display: inline" width="20.833" height="20.833" viewBox="0 0 20.833 20.833"  :class="{ 'svg-tran': dropCategories }" >
                <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"></path>
            </svg>
        </button>

        <ul class="dropdown-menu dropdown-menu-dark" v-bind:class="{ 'show': dropCategories }" >
            <li v-for="category in categories" :key="category.id">
                <router-link class="dropdown-item" :to="{name: 'ShopCategoryComponent', params:{query: category.id}}">
                    {{ category.title }}
                </router-link>
            </li>
            <hr class="divider-x m-0 bg-maroon mx-2">
            <li>
                <router-link class="dropdown-item" to="/requestedItems">Requested items</router-link>
            </li>

        </ul>
    </div>

</template>

<script>
export default ({

//    ready: function(){
//     var self = this
//     // window.addEventListener('click', function(e){
//     //   if (! e.target.parentNode.classList.contains('marketplace-categories')){
//     //     self.blurDropCategories()
//     //   }
//     // }, false)
//   },



    data :()=>({
        categories : {},
        dropCategories: false
    }),
    methods: {
        blurDropCategories () {
            setTimeout(() => this.dropCategories = false, 320);
        },
        clickDropCategories () {
            this.dropCategories = !this.dropCategories
        },
    },
    mounted(){
        axios.get('/api/category/get/flag').then((response) => {
            this.categories = response.data;
        });

        var self = this
        window.addEventListener('click', function(e){
            if (! e.target.parentNode.classList.contains('marketplace-categories')){
                self.blurDropCategories()
                console.log(e.target);
            }
        }, false)
    }
})
</script>

