<template>

<div class="dropdown drop-1" >
    <button class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuMarket" data-bs-toggle="dropsdown" type="button" aria-expanded="false">
        <span>Marketplace</span>
            <svg id="Icon_down_solid" xmlns="http://www.w3.org/2000/svg" width="20.833" height="20.833" viewBox="0 0 20.833 20.833">
            <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"></path>
        </svg>
    </button>
    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuMarket">
        <li v-for="category in categories" :key="category.id">
            <router-link class="dropdown-item" :to="{name: 'ShopCategoryComponent', params:{query: category.id}}">{{ category.title }}</router-link>
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
      data :()=>({
          categories : {},
    }),

    mounted(){
        axios.get('/api/category/get/flag').then((response) => {
            this.categories = response.data;
        });
    }
})
</script>

