<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
       <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Add Resident</li>
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
	                <h4 class="text-white mb-0">Add Apartment Resident</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="resident-and-concierge.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				<form method="POST" action="" accept-charset="UTF-8" role="form" id="create-user" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
    <div class="card-body">
      <h5>Resident Details</h5>
<hr class="bg-dark">
<div class="row">
    <div class="col-md-4">
        <div class="form-group ">
            <label for="unit_id" class="control-label required">Apartment Number <span style="color: red">*</span></label>
            <select class="select2 select2-hidden-accessible form-control" id="unit_id" name="unit_id" data-select2-id="select2-data-unit_id" tabindex="-1" aria-hidden="true">
            	<option value="" selected="selected" data-select2-id="select2-data-2-3cdo">Select Unit</option>
            	<option value="527">1-101</option>
            	<option value="528">1-102</option>
            	<option value="530">2-201</option>
            	<option value="532">2-203</option>
            	<option value="533">3-301</option>
            	<option value="534">3-302</option>
            	<option value="535">3-303</option>
            	<option value="874">B-1611</option>
            </select>
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="member_type" class="control-label required">Resident Type <span style="color: red">*</span></label>
            <select class="form-control" id="member_type" name="member_type">
            	<option value="" selected="selected">Select Resident Type</option>
            	<option value="owner_living">Owner - Living at property</option>
            	<option value="owner_away">Owner - Living away from property</option>
            	<option value="tenant">Tenant</option></select>
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="gender" class="control-label required">Gender </label>
            <br>
            <input type="radio" name="gender" value="male">
            Male
            <input type="radio" name="gender" value="female">
            Female
            <input type="radio" name="gender" value="prefer">
            Prefer not to say
            <br>
                    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group ">
            <label for="first_name" class="control-label required">First Name <span style="color: red">*</span></label>
            <input class="form-control " placeholder="First Name" name="first_name" type="text" id="first_name">
                    </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group ">
            <label for="last_name" class="control-label required">Last Name <span style="color: red">*</span></label>
            <input class="form-control " placeholder="Last Name" name="last_name" type="text" id="last_name">
                    </div>
    </div>

    <div class="col-md-4">
        <div class="form-group ">
        <label for="phone_number" class="control-label">Contact Number</label>
        <input class="form-control " placeholder="Contact Number" name="phone_number" type="text" id="phone_number">
                </div>
    </div>    
</div>
<div class="row">
  <div class="col-md-4">
        <div class="form-group">
            <label for="member_image" class="control-label required">Profile Image</label>
            <br>
            <input type="hidden" name="member_images" id="profile-img-tag-textarea">
                        <input type="file" accept="image/*" name="member_image" id="member_image-1" class="inputfile inputfile-1">
            <br>
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
			<div class="modal-footer">
				<button type="button" class="btn btn-primary upload-image" id="cropimage">Crop</button>
			</div>

		</div>
	</div>
</div>        </div>
        <span class="text-danger" id="image-dimension"></span>
    </div>
</div>
<hr class="bg-dark">
<h5>Correspondence Address</h5>
<hr class="bg-dark">
<div class="row">
    <div class="col-md-4">
        <div class="form-group ">
            <label for="address" class="control-label">Address</label>
            <input class="form-control " placeholder="Address" name="address" type="text" id="address">
                    </div>
    </div>
    <div class="col-md-2">
        <div class="form-group ">
            <label for="city" class="control-label">City</label>
            <input class="form-control " placeholder="City" name="city" type="text" id="city">
                    </div>
    </div>
    <div class="col-md-2">
        <div class="form-group ">
            <label for="country" class="control-label">Country</label>
            <input class="form-control " placeholder="Country" name="country" type="text" id="country">
                    </div>
    </div>
    <div class="col-md-2">
        <div class="form-group ">
            <label for="zip_code" class="control-label">Postal Code</label>
            <input class="form-control " placeholder="Postal Code" name="zip_code" type="text" id="zip_code">
                    </div>
    </div>
</div>
<hr class="bg-dark">
<h5>Resident App Login Details</h5>
<hr class="bg-dark">
<div class="row">
    <div class="col-md-3">
        <div class="form-group ">
            <label for="email" class="control-label required">Email/Username <span style="color: red">*</span></label>
            <br>
                        <input class="form-control " placeholder="Email/Username" name="email" type="text" id="email">
                                </div>
    </div>


        <div class="col-md-3">
        <div class="form-group ">
            <label for="password" class="control-label required">Password <span style="color: red">*</span></label>
            <input class="form-control" name="password" type="password" value="" id="password">
                    </div>
    </div>
    </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-dark">Submit</button>
    </div>
    </form>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>