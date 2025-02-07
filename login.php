
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
   Wave
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<style>
  .font-pop{
  font-family: 'Poppins';
}
</style>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        
      </div>
    </div>
  </div>
<main class="main-content  mt-0 position-relative">
    <!-- <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Login</h1>
          </div>
        </div>
      </div>
    </div> -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" 
                     style="background-image: url('https://raghava.world/wp-content/uploads/slider/cache/a89a42f9452667d9559f0ad449b04eec/MicrosoftTeams-image-3.jpg');">
                     
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center mx-auto">
                                <h1 class="text-white mb-0 mt-2 font-pop">Login</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" 
                     style="background-image: url('https://www.jkcement.com/wp-content/uploads/2023/12/residential-building-with-windows-balconies-1024x683-jpg.webp');">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center mx-auto">
                                <h1 class="text-white mb-0 mt-2 font-pop">Login</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" 
                     style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg');">
                    <span class="mask bg-gradient-dark opacity-6"></span>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 text-center mx-auto">
                                <h1 class="text-white mb-0 mt-2 font-pop">Login</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
      <!-- <div class="row justify-content-center"> -->

        <div class="col-xl-5 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-body p-5">
              <!-- <div class="card-body"> -->
                  <form role="form">
                    <div class="mb-3">
                      
                      <input type="email" class="form-control " placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="email" class="form-control " placeholder="Password" aria-label="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label text-center" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <!-- <button type="button" class="btn btn-lg btn-dark btn-lg w-100 mt-4 mb-0">Login</button> -->

                      <button type="button" class="btn bg-dark w-100 mt-4 mb-0 text-white">Login</button>
                    </div>
                  </form>
                <!-- </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>