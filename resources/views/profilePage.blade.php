
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.left{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 30vw;
    
} 

.right{
    width: 70vw;
}

img{
    height: 90vh;
}

.description-1{
    height: 100vh;
    width: 100vw;
}



</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">QR-Resto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
 </ul>
      <a style="margin-right:20px;"class="btn btn-outline-primary my-2 my-sm-0" href="{{route('login')}}">Login</a>
      <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('register')}}">Register</a>
   </button>
  </div>
</nav>

<div class="container">

    <div class="row">
    <div class="left col col-6 col-lg-6 col-md-6 d-flex">
        <div>
       <h1> All-In-One QR Restaurant System</h1>  
      <a class="btn btn-warning my-2 my-sm-0" href="{{route('register')}}">Learn More</a>
        </div>
        </div>
    <div class="right col col-6 col-lg-6 col-md-6">
        <img src="{{asset('img/iPhone 14 Pro - Copy@1-1434x794.png')}}"  alt="">
    </div>
</div>
</div>

<section class="description-1">

</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>