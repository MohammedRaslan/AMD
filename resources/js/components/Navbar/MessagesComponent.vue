<template>
    <router-link to="/messages" class="position-relative">
        <div
            class="mesg"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title=""
            data-bs-original-title="Messages"
        >
            <svg
            width="22"
            height="22"
            fill="#fff"
            version="1.1"
            id="Capa_1"
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px"
            y="0px"
            viewBox="0 0 512 512"
            style="enable-background: new 0 0 512 512"
            xml:space="preserve"
            >
            <g>
                <g>
                <polygon
                    points="339.392,258.624 512,367.744 512,144.896 		"
                ></polygon>
                </g>
            </g>
            <g>
                <g>
                <polygon
                    points="0,144.896 0,367.744 172.608,258.624 		"
                ></polygon>
                </g>
            </g>
            <g>
                <g>
                <path
                    d="M480,80H32C16.032,80,3.36,91.904,0.96,107.232L256,275.264l255.04-168.032C508.64,91.904,495.968,80,480,80z"
                ></path>
                </g>
            </g>
            <g>
                <g>
                <path
                    d="M310.08,277.952l-45.28,29.824c-2.688,1.76-5.728,2.624-8.8,2.624c-3.072,0-6.112-0.864-8.8-2.624l-45.28-29.856
L1.024,404.992C3.488,420.192,16.096,432,32,432h448c15.904,0,28.512-11.808,30.976-27.008L310.08,277.952z"
                ></path>
                </g>
            </g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            <g></g>
            </svg>
        </div>

        <span v-show="count > 0" style="top:-10px !important" class="quantity-cart">{{ this.count}}</span>
    </router-link>
</template>
<script>
export default ({
    data:()=>({
        count: 0,
        notifications: {},
        message : "",
    }),
    mounted(){
      

        window.Echo.channel('message-event').listen('MessageEvent', event => {
          
            if(event.offer.email == JSON.parse(localStorage.getItem('currentUser'))['email']){
                  this.count = parseInt(this.count) + 1;
                  this.message = '';

            }
        });
    }
})
</script>



