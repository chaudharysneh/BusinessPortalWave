<?php include 'header.php'; ?>
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
<nav class="navbar d-none navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3 mt-3">
                <!-- <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">View Service Details</li>
          </ol>
        </nav> -->
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbarSupportedContent">


                        <ul class="navbar-nav  justify-content-end">

                                <li class="nav-item ps-3 pe-2 d-flex align-items-center d-lg-none">
                                        <a href="javascript:;" class="nav-link text-dark p-0" id="iconNavbarSidenav">
                                                <div class="sidenav-toggler-inner">
                                                        <i class="sidenav-toggler-line bg-dark"></i>
                                                        <i class="sidenav-toggler-line bg-dark"></i>
                                                        <i class="sidenav-toggler-line bg-dark"></i>
                                                </div>
                                        </a>
                                </li>
                        </ul>
                </div>
        </div>
</nav>
<div class="container-fluid dark_cont_bg py-4 pt-0">

        <div class="row mt-4">
                <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
                        <div class="card dark-bg" style="border-radius: 18px;">
                                <div class="card-header dark-bg-still ">
                                        <div class="d-flex align-items-center">
                                                <h4 class="light-text-still mb-0">View Service Details</h4>
                                                <button class="btn bg-light ms-auto mb-0"><a href="service.php" class="dark-text-still"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
                                        </div>
                                </div>

                                <form method="POST" action="units.php" accept-charset="UTF-8" role="form" id="units-edit" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
                                        <div class="card-body">
                                                <div class="row">
                                                        <div class="col-md-4">
                                                        <div class="text-center mb-0">
        <img src="./assets/img/home-decor-1.jpg" class="w-100 rounded" alt="Profile Image" width="250" height="200">
    </div>
                                                                <br>
                                                                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                                                                        <div class="carousel-inner">

                                                                                <!-- First Slide with Two Images -->
                                                                                <div class="carousel-item active">
                                                                                        <div class="d-flex justify-content-between gap-2">
                                                                                                <img src="./assets/img/home-decor-1.jpg" class="d-block w-50 rounded" alt="Image 1" width="250" height="160">
                                                                                                <img src="./assets/img/home-decor-2.jpg" class="d-block w-50 rounded" alt="Image 2" width="250" height="160">
                                                                                        </div>
                                                                                </div>

                                                                                <!-- Second Slide with Two Images -->
                                                                                <div class="carousel-item">
                                                                                        <div class="d-flex justify-content-between gap-2">
                                                                                                <img src="./assets/img/home-decor-3.jpg" class="d-block w-50 rounded" alt="Image 3" width="250" height="160">
                                                                                                <img src="./assets/img/home-decor-2.jpg" class="d-block w-50 rounded" alt="Image 4" width="250" height="160">
                                                                                        </div>
                                                                                </div>

                                                                        </div>

                                                                        <!-- Controls -->
                                                                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                                                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Previous</span>
                                                                        </a>
                                                                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                                                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                <span class="sr-only">Next</span>
                                                                        </a>
                                                                </div>
                                                        </div>

                                                        <div class="col-md-8 mt-2">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-app icon-set"></i> &nbsp;Core :</b> 1 </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-key-25"></i> &nbsp; No of keys :</b> 5 </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-delivery-fast"></i> &nbsp; Parking Bay / Permit Number :</b> 11 </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-key-25"></i> &nbsp; Key Waiver :</b> 33 </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-circle-08"></i> &nbsp;Letting Agent Information :</b> 22 </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-ambulance"></i> &nbsp;Bicycle / Scooter Information :</b> 44 </label>
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <hr class="bg-dark mt-0">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 1 Label :</b> sample-2.pdf </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 1 :</b> sample-2.pdf </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 2 Label :</b> </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 2 :</b> </label>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <hr class="bg-dark mt-0">
                                                                <div class="row">
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 3 Label :</b> </label>
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                                <div class="form-group ">
                                                                                        <label class="control-label light-text" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 3 :</b> </label>
                                                                                </div>
                                                                        </div>
                                                                </div>




                                                        </div>


                                                </div>

                                        </div>

                                </form>
                        </div>
                </div>
        </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>