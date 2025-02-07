<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Add Apartment Units</li>
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
	                <h4 class="text-white mb-0">Add Apartment Number</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="units.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				
				<form method="POST" action="units.php" accept-charset="UTF-8" role="form" id="create-units" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
      <div class="card-body">
                <div class="row">
    <div class="col-md-4">
        <div class="form-group ">
            <label for="block_number" class="control-label required">Core <span style="color: red">*</span></label>
            <input class="form-control " placeholder="Core" name="block_number" type="text" id="block_number">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="flat_number" class="control-label required">Apartment Number <span style="color: red">*</span></label>
            <input class="form-control " placeholder="Apartment Number" name="flat_number" type="text" id="flat_number">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="no_of_keys" class="control-label">No of keys</label>
            <input class="form-control " placeholder="No. of Keys" name="no_of_keys" type="text" id="no_of_keys">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="parking_option" class="control-label">Parking Bay / Permit Number</label>
            <input class="form-control " placeholder="Parking Bay / Permit Number" name="parking_option" type="text" id="parking_option">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="key_waiver" class="control-label">Key Waiver</label>
            <input class="form-control " placeholder="Key Waiver" name="key_waiver" type="text" id="key_waiver">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="letting_agent_info" class="control-label">Letting Agent Information</label>
            <input class="form-control " placeholder="Letting Agent Information" name="letting_agent_info" type="text" id="letting_agent_info">
                    </div>
    </div>
    <div class="col-md-4">
        <div class="form-group ">
            <label for="bicycle_scooter_info" class="control-label">Bicycle / Scooter Information</label>
            <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files_label" class="control-label">Document File 1 Label</label>
            <input class="form-control " placeholder="Documents File 1 Name" name="documents_files_label[]" type="text" value="">
                    </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files" class="control-label">Upload Document File 1</label>
            <input name="documents_files[]" type="file">

                        
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files_label" class="control-label">Document File 2 Label</label>
            <input class="form-control " placeholder="Documents File 2 Name" name="documents_files_label[]" type="text" value="">
                    </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files" class="control-label">Upload Document File 2</label>
            <input name="documents_files[]" type="file">
                                </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files_label" class="control-label">Document File 3 Label</label>
            <input class="form-control " placeholder="Documents File 3 Name" name="documents_files_label[]" type="text" value="">
                    </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files" class="control-label">Upload Document File 3</label>
            <input name="documents_files[]" type="file">
                                </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files_label-4" class="control-label">Documents File 4 Label</label>
            <input class="form-control " placeholder="Documents File 4 Name" name="documents_files_label[]" type="text" value="">
                    </div>
    </div>
    <div class="col-md-3">
        <div class="form-group ">
            <label for="documents_files" class="control-label">Upload Documents File 4</label>
            <input name="documents_files[]" type="file">
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