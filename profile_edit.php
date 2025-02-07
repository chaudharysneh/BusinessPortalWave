<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
       <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Edit Profile</li>
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
	                <h4 class="text-white mb-0">Edit Profile</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="index.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				
				<div class="card-body">
					<form method="POST" action="https://portal.aptlymanaged.com/companySettings/1" accept-charset="UTF-8" role="form" id="profile_form" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input name="_token" type="hidden" value="">
					<div class="row">
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="company_name" class="control-label required">Building Name</label>
                            <input class="form-control " placeholder="Building Name" name="company_name" type="text" value="Mr Concierge" id="company_name">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="person_name" class="control-label required">Building Manager</label>
                            <input class="form-control " placeholder="Building Manager" name="person_name" type="text" value="XYZ" id="person_name">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="email" class="control-label required">Building Email</label>
                            <input class="form-control" placeholder="mrc@gmail.com" name="person_email" type="email" value="mrc@gmail.com" id="email">
                                                       
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="mobile" class="control-label required">Landline Number</label>
                            <input class="form-control " placeholder="Mobile Number" name="mobile" type="text" value="02072938887" id="mobile">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="landline" class="control-label">Additional Number</label>
                            <input class="form-control " placeholder="Additional Number" name="landline" type="text" value="02072938887" id="landline">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="subscription_time" class="control-label required">Subscription Renewal</label>
                            <input class="form-control" placeholder="Annually" name="annually" type="text" value="Annually" id="annually">
                                                        
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="apartment_count" class="control-label required">Number of Apartments</label>
                          <input class="form-control" placeholder="100" name="apartment_count" type="number" value="100" id="apartment_count">
                                                    </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="building_address" class="control-label required">Building Address</label>
                            <textarea class="form-control" placeholder="Airbnb Service in Dubai" rows="3" name="parking_information" cols="50"></textarea>
                            
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="building_image" class="control-label required">Building Image</label>
                            <input type="hidden" name="image_name" id="profile-img-tag-textarea">
                                                        <input type="file" name="building_image" id="building_image-1" class="inputfile inputfile-1" value="1683640817.png">
                            <br>
                            <br>
                            <img src="https://portal.aptlymanaged.com/public/front/building_image/1683640817.png" width="80" height="80" id="building-image-path" name="building-image-path">
                                                        <div class="modal profile-image-preview" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Upload Image</h4>
				<button type="button" class="close" id="close_image_crop">×</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div id="loading" style="display: none;">
					<img src="https://portal.aptlymanaged.com/public/build/images/loading-profile.gif" style=" z-index: +1;" width="150" height="150" alt="loading-profile" title="loading-profile">
				</div>
				<div class="image-wrap">
					<div id="upload-demo" class="croppie-container"><div class="cr-boundary" aria-dropeffect="none" style="width: 300px; height: 300px;"><img class="cr-image" alt="preview" aria-grabbed="false"><div class="cr-viewport cr-vp-square" tabindex="0" style="width: 300px; height: 300px;"></div><div class="cr-overlay"></div></div><div class="cr-slider-wrap"><input class="cr-slider" type="range" step="0.0001" aria-label="zoom"></div></div>
					<div id="preview-crop-image"></div>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="card-footer p-0">
			            <button type="submit" class="btn btn-dark mb-0">Save Details</button>
			        </div>

		</div>
	</div>
</div>                        </div>
                        
                    </div>
                </div>
				</div>
				<div class="card-footer">
			            <button type="submit" class="btn btn-dark mb-0">Save Details</button>
			        </div>
			</form>
			
		</div>
	</div>
</div>
</div>

<?php include 'footer.php';?>