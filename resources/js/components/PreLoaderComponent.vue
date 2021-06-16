<template>
    <div id="preloder" :style="{display: display}">
        <div class="loader" :style="{display: display}" ></div>
    </div>
</template>
<script>

export default ({
 data:()=>({
  display: 'block !important',
}),
mounted(){
    Fire.$on('mounted',()=>{
        this.display = 'none !important';
        
    });
}
})
</script>
