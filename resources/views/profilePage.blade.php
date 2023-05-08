

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Landing Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="{{asset('css/profilePage.css')}}">
</head>
<body>
  <!-- Navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">QR-Resto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main content -->
  <div class="container my-5">
    <div class="row">
      <div class="center col-md-6">
        <h1>All in one QR-Code-Restaurant</h1>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, ligula sed rhoncus auctor, massa turpis efficitur eros, id luctus odio dolor nec velit. Integer vitae ullamcorper odio.</p>

        <a class="btn btn-warning hover my-2 my-sm-0" href="{{route('register')}}">Learn More</a>
      </div>
      <div class="center col-md-6">
        <img   src="{{asset('img/qr-code.png')}}" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>



<div class="feat bg-gray pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="section-head col-sm-12">
          <h4><span>Why Choose</span> Us?</h4>
          <p>Make your restaurant more modern with QR Restaurant without the headache of developing one.</p>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_one">   <i class='bx bxs-time-five' ></i></span>
            <h6>Eficient</h6>
            <p>We use latest technology for the latest world because we know the demand of peoples.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_two">     <i class='bx bxs-plane-alt' ></i>   </span>
            <h6>Convenient</h6>
            <p>We are always trying to make things convenient and and always lisen our costomers and we mix these two things and make beast design.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="item"> <span class="icon feature_box_col_three">  <i class='bx bxs-message-alt-dots' ></i> </span>
            <h6>24 x 7 User Support</h6>
            <p>If our customer has any problem and any query we are always happy to help then.</p>
          </div>
        </div>
     </div>
    </div>
  </div>



  

  <!-- Secondary content -->
  <div class="container  secondary my-5">
    <div class="row">
      <div class="col-md-6">
        <img   src="{{asset('img/sushi.png')}}"    alt="Image" class="img-fluid">
      </div>
      <div class=" center col-md-6">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, ligula sed rhoncus auctor, massa turpis efficitur eros, id luctus odio dolor nec velit. Integer vitae ullamcorper odio.</p>
      </div>
    </div>
  </div>



<section class="home-testimonial">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Testimonials</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>Explore the students experience</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo; Efficiency and quality have always been our top priorities at Los Pollos Hermanos. This QR code restaurant application helps us deliver both seamlessly, and I am proud to endorse it as a satisfied user and testimonial.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://i.ytimg.com/vi/OJ10cVu2R5I/maxresdefault.jpg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Gustavo Fring</div>
                                <div class="link-position d-flex justify-content-center">Los Pollos Hermanos</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo; As a Michelin-starred chef, I demand nothing but excellence. This QR code restaurant app has taken our service to the next level, delivering efficiency, convenience, and quality. Proud to endorse it as a satisfied user and testimonial.&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://parade.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTkwNTc4MTE4NTMyMDE1OTk2/gordonramsay_kitchenmaster-ftr.jpg" alt=""></div>
                                <div class="link-name d-flex justify-content-center">Gordon Ramsay</div>
                                <div class="link-position d-flex justify-content-center">Michelin Star Restaurant Owner</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 style-3">
                        <div class="tour-item ">
                            <div class="tour-desc bg-white">
                                <div class="tour-text color-grey-3 text-center">&ldquo; At my ice cream joint, we're all about convenience and smiles. This QR code restaurant app delivers both, making sure you get your favorite treats in no time. As a proud user and testimonial, I'm telling you, it's a game-changer!&rdquo;</div>
                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="https://images.genius.com/b7856ba4b9670f426d8b347b3fc20a52.403x363x1.png  " alt=""></div>
                                <div class="link-name d-flex justify-content-center">John Cena</div>
                                <div class="link-position d-flex justify-content-center">Bing Chilling Maker</div>
                            </div>
                        </div>
                    </div>

<footer class="bg-light text-center text-lg-start" >
  <!-- Copyright -->
  <div class="text-center p-3" style="padding:50px;  display:flex;  justify-content:center; align-items:center; width:42rem;height:50vh;background-color: rgba(255, 255, 255, 0.2);">
    © 2023 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">QR-Resto.com</a>
  </div>
  <!-- Copyright -->
</footer>


                </div>
        </section>
</section>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
