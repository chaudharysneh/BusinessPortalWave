<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">View Residents Member</li>
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
<div class="container-fluid py-4 pt-2 ">
	<div class="row">
		<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-header bg-dark text-white">					
					<div class="d-flex align-items-center">
	                <h4 class="text-white mb-0">View Residents Member</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="resident-and-concierge.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				
				<form method="POST" action="" accept-charset="UTF-8" role="form" id="units-edit" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
      <div class="card-body">
      	<div class="row">
    <div class="col-md-4">    
  
            <div class="form-group ">
                        <img src="./assets/img/team-2.jpg" width="250" height="250">                       
                      </div>
               
           <!--  <label for="block_number" class="control-label required">Core <span style="color: red">*</span></label>
            <input class="form-control " placeholder="Core" name="block_number" type="text" value="1" id="block_number"> -->
            
    </div>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-app icon-set"></i> &nbsp;Apartment Number :</b> B-1611 </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-building"></i> &nbsp; Resident Type :</b> Owner - Property </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-single-02"></i> &nbsp;  First Name  :</b> Test </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-single-02"></i> &nbsp; Last Name  :</b> XYZ </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-circle-08"></i> &nbsp; Gender :</b> Male </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="fa fa-phone-alt"></i> &nbsp; Contact Number :</b> +1 (946) 869-1993 </label> 
                    </div>
            </div>
        </div>
         <hr class="bg-dark mt-0">
         <h5 class="font-weight-bolder">Correspondence Address</h5>
          <hr class="bg-dark">
          <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-square-pin"></i> &nbsp; Address :</b> Et doloremque </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-pin-3"></i> &nbsp; City :</b> Est natus </label> 
                    </div>
            </div>
        </div>
        <hr class="bg-dark mt-0">
          <div class="row">
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-square-pin"></i> &nbsp; Country :</b> Enim ea </label> 
                    </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group ">
            <label class="control-label" for="block_number"> <b><i class="ni ni-pin-3"></i> &nbsp; Postal Code :</b> 64293 </label> 
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
