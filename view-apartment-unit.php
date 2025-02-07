<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">View Apartment Units</li>
          </ol>
        </nav>
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
<div class="container-fluid py-4 pt-0">
    
	<div class="row mt-4">
		<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-header bg-dark text-white">					
					<div class="d-flex align-items-center">
	                <h4 class="text-white mb-0">View Apartment Number</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="units.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				
				<form method="POST" action="units.php" accept-charset="UTF-8" role="form" id="units-edit" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
      <div class="card-body">
      	<div class="row">
    <div class="col-md-4">    
  
            <div class="form-group ">
                        <img src="./assets/img/home-decor-1.jpg" width="250" height="250">                       
                      </div>
               
           <!--  <label for="block_number" class="control-label required">Core <span style="color: red">*</span></label>
            <input class="form-control " placeholder="Core" name="block_number" type="text" value="1" id="block_number"> -->
            
    </div>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-app icon-set"></i> &nbsp;Core :</b> 1 </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-key-25"></i> &nbsp; No of keys :</b> 5 </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-delivery-fast"></i> &nbsp; Parking Bay / Permit Number :</b> 11 </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-key-25"></i> &nbsp; Key Waiver :</b> 33 </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-circle-08"></i> &nbsp;Letting Agent Information :</b> 22 </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-ambulance"></i> &nbsp;Bicycle / Scooter Information :</b> 44 </label> 
                    </div>
            </div>
        </div>

        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 1 Label :</b> sample-2.pdf </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 1 :</b> sample-2.pdf </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 2 Label :</b>  </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 2 :</b>  </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 3 Label :</b>  </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 3 :</b>  </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-book-bookmark"></i> &nbsp;Document File 4 Label :</b>  </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="fa fa-upload"></i> &nbsp;Upload Document File 4 :</b>  </label> 
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


<?php include 'footer.php';?>