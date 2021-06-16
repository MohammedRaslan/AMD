<template>
    <div>
        <div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div class="header-action">
                <h1 class="page-title">Dashboard</h1>
                <ol class="breadcrumb page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard">Dashboard</a></li>
                <!-- {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#admin-Activity">Statistics</a></li> --}} -->
            </ul>
        </div>
    </div>
</div>
<div class="section-body mt-4">
    <div class="container-fluid">
        <div class="row clearfix row-deck">
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Professors"></div>
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-users"></i>
                            <span>Users</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-th-list"></i>
                            <span>Categories</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff"></div>
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-book"></i>
                            <span>Products</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-tags"></i>
                            <span>Tags</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body">
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-certificate"></i>
                            <span>Coupons</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                <div class="card">
                    <div class="card-body ribbon">
                        <div class="ribbon-box green" data-toggle="tooltip" title="New Staff"></div>
                        <a href="" class="my_sort_cut text-muted">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Orders</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                <div class="row clearfix">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Egpremium Report</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between">
                                 
                                </div>
                                <div id="apex-chart-line-column"></div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-2">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>Fees</strong></div>
                                            <div class="float-right"><small class="text-muted">35%</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-indigo" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-uppercase font-10">Compared to last year</span>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-2">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>Donation</strong></div>
                                            <div class="float-right"><small class="text-muted">61%</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-yellow" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-uppercase font-10">Compared to last year</span>
                                    </div> 
                                    <div class="col-xl-3 col-md-6 mb-2">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>Income</strong></div>
                                            <div class="float-right"><small class="text-muted">87%</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-green" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-uppercase font-10">Compared to last year</span>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-2">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>Expense</strong></div>
                                            <div class="float-right"><small class="text-muted">42%</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-pink" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="text-uppercase font-10">Compared to last year</span>
                                    </div>                                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
        
            </div>
            
        </div>
    </div>
</div>
    </div>
</template>

<script>

export default ({
   data:()=>({
       username:JSON.parse(localStorage.getItem('currentUser'))['first_name'] + ' ' +JSON.parse(localStorage.getItem('currentUser'))['last_name'] ,
   }),
   methods:{
  
    },

    created(){
        this.$Progress.start();

    },
    mounted(){
       var user = JSON.parse(localStorage.getItem('currentUser'));
       
        this.$Progress.finish();

    }
})
</script>
