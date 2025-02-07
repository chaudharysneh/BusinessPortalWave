<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Change Password </li>
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
	                <h4 class="text-white mb-0">Change Password</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="dashboard.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				
				<div class="card-body">
					<form method="POST" action="https://portal.aptlymanaged.com/companySettings/1" accept-charset="UTF-8" role="form" id="update_password" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input name="_token" type="hidden" value="">
					<div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label class="form-control-label" for="validationDefault01">Current Password:</label>
                            <input type="password" name="old_password" value="" class="form-control  " placeholder="Current Password">
                                                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label class="form-control-label" for="validationDefault01">New Password:</label>
                            <input type="password" name="password" class="form-control  " placeholder="New Password" id="password">
                                                    </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="form-group">
                            <label class="form-control-label" for="validationDefault01">Confirm Password:</label>
                            <input type="password" name="password_confirmation" class="form-control  " placeholder="Confirm Password">                         </div>
                    </div>

                </div>
                <div class="card-footer p-0">
			            <button type="submit" class="btn btn-dark mb-0">Update</button>
			        </div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
<?php include 'footer.php';?>