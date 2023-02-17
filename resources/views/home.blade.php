<style>
  .card {
    width: 18rem;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    margin: 50px auto;

    text-align: center;

  }

  .card-header {
    background-color: #343a40;
    color: #fff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 10px;
  }

  .card-body {
    padding: 20px;
  }

  .card-title {
    font-weight: bold;
    font-size: 20px;
  }

  .stat-number {
    font-weight: bold;
    color: #007bff;
  }

  .text{
    text-decoration: underline black;

    
  }



.card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}

</style>

 
   @include('nav-bar')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="home-section">

          <h1>dashboard</h1>
        <div class="row">


 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats mb-0 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Number Of Tables</h5>
                      <span class="h2 font-weight-bold mb-0">{{$tableCount}} <i class='bx bx-chair'></i> </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            


   <div class="col-xl-4  col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats mb-0 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Number of Menus </h5>
                      <span class="h2 font-weight-bold mb-0">{{$listItemCount}}   <i class='bx bx-food-menu' ></i></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4  col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats mb-0 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Order Count</h5>
                      <span class="h2 font-weight-bold mb-0">{{$orderCount}} <i class='bx bxl-telegram' ></i></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>

            <div class="col-xl-4  col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats mb-0 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">User Count</h5>
                      <span class="h2 font-weight-bold mb-0">{{$UserCount}} <i class='bx bx-user'></i></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4  col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats mb-0 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Role Count</h5>
                      <span class="h2 font-weight-bold mb-0">{{$RoleCount}}  <i class='bx bx-shield-quarter' ></i></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>












</div>
</div>

     
  </section>

 