<template>
  <nav class="header__menu mobile-menu" v-if="mounted">
    <ul class="text-start d-lg-flex d-xl-flex d-md-flex justify-content-between" v-if="logged">

       <li class="menu-1 cat mr-xl-5 mr-lg-5 mr-md-2 d-lg-flex d-xl-flex d-md-flex align-items-center">                                
                                <Drop></Drop>
                            </li>
                            <li class="search-item search-switch">
                                <!-- <input type="search" name="search" placeholder="Search here" id="search"> -->
                                <Search></Search>
                                <!-- <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a> -->
                                <!-- <i class="fas fa-search"></i> -->
                            </li>
                        
                            <li class="d-xl-flex d-lg-flex d-md-flex icons">
                               <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_36" data-name="Group 36" transform="translate(-742 -317)">
                                        <g id="Group_35" data-name="Group 35" transform="translate(42.573 14.174)">
                                        <path id="Path" d="M3.623,11.52A1.464,1.464,0,0,0,5.14,13.139h.744a.831.831,0,0,0,.83-.779,3.55,3.55,0,0,1,1.07-2.184l1-.983a8.468,8.468,0,0,0,1.636-2.132,4.678,4.678,0,0,0,.467-2.056,4.722,4.722,0,0,0-1.439-3.69A5.782,5.782,0,0,0,5.4,0,5.8,5.8,0,0,0,1.314,1.379,4.5,4.5,0,0,0,.057,3.407,1.478,1.478,0,0,0,1.626,5.2,3.083,3.083,0,0,0,3.69,3.865c.082-.09.163-.179.244-.265A1.918,1.918,0,0,1,5.4,3.013q1.919,0,1.919,2.158a2.731,2.731,0,0,1-.369,1.366A8.206,8.206,0,0,1,5.46,8.21a5.8,5.8,0,0,0-1.525,2.081A5.6,5.6,0,0,0,3.623,11.52Z" transform="translate(710.985 311.25)" fill="#fecc2f"></path>
                                        <path id="Path-2" data-name="Path" d="M.554.562A1.894,1.894,0,0,0,0,1.966,1.9,1.9,0,0,0,.541,3.358a1.972,1.972,0,0,0,1.452.549,1.93,1.93,0,0,0,1.439-.549,1.878,1.878,0,0,0,.554-1.392A1.872,1.872,0,0,0,3.42.562,1.916,1.916,0,0,0,1.993,0,1.957,1.957,0,0,0,.554.562Z" transform="translate(714.144 326.343)" fill="#fecc2f"></path>
                                        </g>
                                        <g id="Ellipse_49" data-name="Ellipse 49" transform="translate(742 317)" fill="none" stroke="#fecc2f" stroke-width="1">
                                        <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                        <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                    </g>
                                    </svg>
                               </a>   
                               <a href="#">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                    <g id="Group_37" data-name="Group 37" transform="translate(-784 -317)">
                                        <g id="Icon_love_solid" transform="translate(790.583 326.125)">
                                        <path id="Path" d="M1.6,9.7A5.729,5.729,0,0,1,5.729,0C7.667,0,9.38,2.134,10.417,3.606,11.454,2.134,13.166,0,15.1,0a5.729,5.729,0,0,1,3.985,9.845l-7.926,8.139a1.042,1.042,0,0,1-1.492,0Z" fill="#fd1266"></path>
                                        </g>
                                        <g id="Ellipse_48" data-name="Ellipse 48" transform="translate(784 317)" fill="none" stroke="#fd1266" stroke-width="1">
                                        <circle cx="17" cy="17" r="17" stroke="none"></circle>
                                        <circle cx="17" cy="17" r="16.5" fill="none"></circle>
                                        </g>
                                    </g>
                                    </svg>
                               </a>  
                               
                                <Cart></Cart>
                                <Notification></Notification>
                                <a v-on:click="GotoAdmin" v-if="admin" style="
                                            border: 1px solid blue;
                                            border-radius: 30px;
                                            width: 40px;
                                            cursor:pointer">
                                <svg id="Capa_1" style="padding-left: 7px;padding-top: 5px;" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg"><g><g><g><g><g>
                                    <path d="m500.58 196.43-47.02-11.54c-2.22-6.09-4.78-12.19-7.66-18.24l24.49-40.82c3.54-5.9 2.61-13.46-2.26-18.32l-63.64-63.64c-4.86-4.87-12.42-5.8-18.32-2.26l-40.82 24.49c-6.05-2.88-12.15-5.44-18.24-7.66l-11.54-47.02c-1.65-6.7-7.66-11.42-14.57-11.42h-90c-6.91 0-12.92 4.72-14.57 11.42l-11.54 47.02c-6.09 2.22-12.19 4.78-18.24 7.66l-40.82-24.49c-5.9-3.54-13.45-2.61-18.32 2.26l-63.64 63.64c-4.87 4.86-5.8 12.42-2.26 18.32l24.49 40.82c-2.88 6.05-5.44 12.15-7.66 18.24l-47.02 11.54c-6.7 1.65-11.42 7.66-11.42 14.57v90c0 6.91 4.72 12.92 11.42 14.57l47.02 11.54c2.22 6.09 4.78 12.19 7.66 18.24l-24.49 40.82c-3.54 5.9-2.61 13.46 2.26 18.32l63.64 63.64c4.87 4.87 12.42 5.8 18.32 2.26l40.82-24.49c6.05 2.88 12.15 5.44 18.24 7.66l11.11 45.27.43 1.75c1.65 6.7 7.66 11.42 14.57 11.42l48-48 42 48c6.91 0 12.92-4.72 14.57-11.42l.43-1.75 11.11-45.27c6.09-2.22 12.19-4.78 18.24-7.66l40.82 24.49c5.9 3.54 13.45 2.61 18.32-2.26l63.64-63.64c4.87-4.86 5.8-12.42 2.26-18.32l-24.49-40.82c2.88-6.05 5.44-12.15 7.66-18.24l47.02-11.54c6.7-1.65 11.42-7.66 11.42-14.57v-90c0-6.91-4.72-12.92-11.42-14.57z" fill="#4086f4"/></g></g></g></g>
                                    <path d="m500.58 196.43-47.02-11.54c-2.22-6.09-4.78-12.19-7.66-18.24l24.49-40.82c3.54-5.9 2.61-13.46-2.26-18.32l-63.64-63.64c-4.86-4.87-12.42-5.8-18.32-2.26l-40.82 24.49c-6.05-2.88-12.15-5.44-18.24-7.66l-11.54-47.02c-1.65-6.7-7.66-11.42-14.57-11.42h-45v467l3-3 42 48c6.91 0 12.92-4.72 14.57-11.42l.43-1.75 11.11-45.27c6.09-2.22 12.19-4.78 18.24-7.66l40.82 24.49c5.9 3.54 13.45 2.61 18.32-2.26l63.64-63.64c4.87-4.86 5.8-12.42 2.26-18.32l-24.49-40.82c2.88-6.05 5.44-12.15 7.66-18.24l47.02-11.54c6.7-1.65 11.42-7.66 11.42-14.57v-90c0-6.91-4.72-12.92-11.42-14.57z" fill="#4175df"/><g><g>
                                    <path d="m301 352.25h-90c-8.28 0-15 6.71-15 15v131.58l.43 1.75c1.65 6.7 7.66 11.42 14.57 11.42h90c6.91 0 12.92-4.72 14.57-11.42l.43-1.75v-131.58c0-8.29-6.72-15-15-15z" fill="#fabe2c"/></g></g>
                                    <path d="m301 352.25h-45v159.75h45c6.91 0 12.92-4.72 14.57-11.42l.43-1.75v-131.58c0-8.29-6.72-15-15-15z" fill="#ff9f00"/><g id="Admin_1_"><g><g>
                                    <path d="m256 391c-74.439 0-135-60.561-135-135 0-27.368 8.182-53.744 23.66-76.275 15.099-21.978 36.088-38.877 60.697-48.868 4.624-1.878 9.881-1.332 14.02 1.456 4.141 2.787 6.623 7.452 6.623 12.443v103.217l30 20 30-20v-103.218c0-4.991 2.482-9.655 6.623-12.443 4.14-2.787 9.396-3.333 14.02-1.456 24.609 9.991 45.599 26.89 60.697 48.868 15.478 22.532 23.66 48.908 23.66 76.276 0 74.439-60.561 135-135 135zm45-135h.01z" fill="#fdd929"/></g></g></g>
                                    <path d="m391 256c0-27.368-8.182-53.744-23.66-76.275-15.099-21.978-36.088-38.877-60.697-48.868-4.624-1.877-9.88-1.332-14.02 1.456-4.141 2.787-6.623 7.452-6.623 12.443v103.217l-30 20v123.027c74.439 0 135-60.561 135-135z" fill="#fabe2c"/></g>
                                </svg>    
                                </a>     
                                <a class="pt-2 pl-2" style="border: solid 1px orange; border-radius:34px;" @click="logout">
                                <svg  height="20pt" viewBox="-15 0 511 511.99988" width="25pt" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m330.5 15.007812v422c0 8.398438-6.597656 15-15 15h-120c-8.402344 0-15-6.601562-15-15l-180-422c0-8.402343 6.597656-14.9999995 15-14.9999995h300c8.402344 0 15 6.5976565 15 14.9999995zm0 0" fill="#07485e"/>
                                    <path d="m330.5 15.007812v422c0 8.398438-6.597656 15-15 15h-120c-8.402344 0-15-6.601562-15-15l-45-105v-331.9999995h180c8.402344 0 15 6.5976565 15 14.9999995zm0 0" fill="#03232e"/>
                                    <path d="m202.097656 91.507812-180-90c-4.496094-2.101562-10.199218-2.101562-14.398437.601563-4.5 2.996094-7.199219 7.796875-7.199219 12.898437v422c0 6.597657 4.199219 12.300782 10.199219 14.097657l124.800781 41.703125 55.199219 18.296875c4.417969 1.769531 10.078125.769531 13.5-1.796875 3.902343-3 6.300781-7.5 6.300781-12.300782v-392c0-5.699218-3.300781-10.800781-8.402344-13.5zm0 0" fill="#ff8859"/>
                                    <path d="m210.5 105.007812v392c0 4.800782-2.402344 9.300782-6.300781 12.300782-3.390625 2.542968-9.039063 3.585937-13.5 1.796875l-55.199219-18.296875v-434.601563l66.597656 33.300781c5.101563 2.699219 8.402344 7.800782 8.402344 13.5zm0 0" fill="#ff3939"/>
                                    <path d="m368.425781 330.234375c-4.878906-2.605469-7.925781-7.6875-7.925781-13.226563v-15h-105c-8.292969 0-15-6.710937-15-15v-60c0-8.292968 6.707031-15 15-15h105v-15c0-5.539062 3.046875-10.621093 7.925781-13.230468 4.863281-2.589844 10.796875-2.296875 15.394531.75l90 60c4.175782 2.78125 6.679688 7.46875 6.679688 12.480468 0 5.007813-2.503906 9.695313-6.679688 12.476563l-90 60c-4.652343 3.105469-10.585937 3.332031-15.394531.75zm0 0" fill="#ff3939"/>
                                    <path d="m150.5 227.007812v60c0 8.398438-6.597656 15-15 15s-15-6.601562-15-15v-60c0-8.402343 6.597656-15 15-15s15 6.597657 15 15zm0 0" fill="#fff5f5"/>
                                    <path d="m150.5 227.007812v60c0 8.398438-6.597656 15-15 15v-90c8.402344 0 15 6.597657 15 15zm0 0" fill="#efe2dd"/>
                            </svg>    
                                </a>           
                            </li>
                             <li class="menu-1 menu-user d-lg-flex d-md-flex d-xl-flex align-items-center">
                                 <!-- <a href="#"> -->
                                <div class="dropdown drop-user1">
                                    <button class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropsdown" type="button" aria-expanded="false">
                                        <span>User Name</span> 
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" id="Icon_down_solid" width="20.833" height="20.833" viewBox="0 0 20.833 20.833">
                                            <path id="Shape" d="M10.417,20.833A10.417,10.417,0,1,1,20.833,10.417,10.428,10.428,0,0,1,10.417,20.833ZM5.208,7.291A1.042,1.042,0,0,0,4.472,9.07L9.68,14.278a1.042,1.042,0,0,0,1.474,0L16.361,9.07A1.042,1.042,0,1,0,14.888,7.6l-4.472,4.472L5.945,7.6A1.035,1.035,0,0,0,5.208,7.291Z" fill="#fff"/>
                                        </svg> -->
                                        <svg id="Icon_down" xmlns="http://www.w3.org/2000/svg" width="10.286" height="6" viewBox="0 0 10.286 6">
                                            <path id="Path" d="M.251,1.463,4.537,5.749a.857.857,0,0,0,1.212,0l4.286-4.286A.857.857,0,0,0,8.823.251l-3.68,3.68L1.463.251A.857.857,0,1,0,.251,1.463Z" fill="#23ccfd"></path>
                                        </svg>

                                        <svg class="user-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="100">
                                            <defs>
                                                <filter id="Shape" x="0" y="0" width="100" height="100" filterUnits="userSpaceOnUse">
                                                <feOffset dy="10" input="SourceAlpha">
                                                <feGaussianBlur stdDeviation="10" result="blur">
                                                <feFlood flood-opacity="0.161">
                                                <feComposite operator="in" in2="blur">
                                                <feComposite in="SourceGraphic">
                                                </feComposite></feComposite></feFlood></feGaussianBlur></feOffset></filter>
                                            </defs>
                                            <g id="Icon_user_solid">
                                                <g id="Icon_user_solid-2" data-name="Icon_user_solid" transform="translate(3.333 3.333)">
                                                <g>
                                                    <path class="user-acc" id="Shape-2" data-name="Shape" d="M20,40A20,20,0,1,1,40,20,20.023,20.023,0,0,1,20,40Zm0-18a20.237,20.237,0,0,0-6.563,1.313C11.41,24.093,8.82,25.54,8,28c1.477,4.428,7.388,6,12,6s10.523-1.571,12-6c-.821-2.461-3.41-3.908-5.438-4.688A20.237,20.237,0,0,0,20,22ZM20,6a6,6,0,1,0,6,6A6.007,6.007,0,0,0,20,6Z" transform="translate(30 20)" fill="#23ccfd"></path>
                                                </g>
                                                </g>
                                            </g>
                                        </svg>

                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" id="m-user" aria-labelledby="dropdownMenuButton22">
                                        <li><a class="dropdown-item" href="selling.html">Selling</a></li>
                                        <li><a class="dropdown-item" href="buying.html">Buying</a></li>
                                        <li><a class="dropdown-item" href="subscriptions.html">Subscriptions</a></li>
                                        <li><a class="dropdown-item" href="account.html">My Accout</a></li>
                                        

                                    </ul>
                                </div>
                                 
                               
                               
                            </li>
                                      
                        </ul>
                    <div class="d-xl-flex d-lg-flex d-md-flex icons float-right" v-if="!logged">
                        <router-link class="btn btn-primary" to="/login">Join <i class="fas fa-sign-in-alt"></i></router-link>
                    </div>
                    </nav>
            
</template>

<script>
import Drop from "./DropdownComponent";
import Cart from "./CartComponent";
import Notification from "./NotificationComponent";
import Search from "./SearchComponent";
export default({
    components:{
        Drop,
        Cart,
        Notification,
        Search,
    },
    data :()=>({
        logged : false,
        mounted: false,
        admin : false,  
    }),
    methods:{
        logout(){
            localStorage.removeItem('token');
            localStorage.removeItem('currentUser');
            localStorage.removeItem('auth');
            window.location.href= "/";
        },
        GotoAdmin:function(){
            console.log('xx');
            window.location.href = "/admin";
        }
    },
 created(){
     console.log(localStorage.getItem('token'));
  
    //  Fire.$on('LoginEvent',()=>{
    //      this.logged = true;
    //  })
 },
 mounted(){
    if(localStorage.getItem('token')){
         this.logged = true;
         if(JSON.parse(localStorage.getItem('currentUser')).role == 0){
             this.admin = true;
         }
     }
     this.mounted = true;
 }
})
</script>