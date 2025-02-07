<?php include 'header.php';?>
 <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Edit Building Details</li>
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
<div class="container-fluid">
    
      
            
              
	<div class="row mt-4">
		<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
			<div class="card">
				<div class="card-header bg-dark text-white">					
					<div class="d-flex align-items-center">
	                <h4 class="text-white mb-0">Edit Building Details</h4>
	                <button class="btn btn-white ms-auto mb-0 align-items-center"><a href="index.php"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
	              </div>
				</div>
				<form method="POST" action="" accept-charset="UTF-8" role="form" id="settings-edit" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input name="_token" type="hidden" value="">
				<div class="card-body">
					<div class="row">
						<hr class="bg-dark">
						<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">							
						<h5>Details</h5>
						<hr class="bg-dark">
						</div>
					</div>
					<div class="row">
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Parking Information</label>
					            <textarea class="form-control " placeholder="Parking Information" rows="4" name="parking_information" cols="50">Underground parking</textarea>
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Concierge Information</label>
					            <textarea class="form-control " placeholder="Concierge Information" rows="4" name="concierge_information" cols="50">Concierge 24/7 Monday - Sunday</textarea>
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Fitness Centre Information</label>
					            <textarea class="form-control " placeholder="Fitness Centre Information" rows="4" name="fitness_centre_information" cols="50">Gym &amp; Spa - Opening hours: 6am - 11pm</textarea>
					        </div>
					    </div>
					</div>
					<div class="row">
						<hr class="bg-dark">
						<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">							
						<h5>Emergency Numbers</h5>
						<hr class="bg-dark">
						</div>
					</div>
					<div class="row">
					    <div class="col-md-12">
					        <a class="store_details btn" href="javascript:;">Add More Emergency Numbers</a>
					    </div>
					</div>
					<div class="row mb-5">
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Title / Name -1</label>
					            <input type="text" class="form-control" name="emergency_captions[]" value="Thames Water">
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Contact Number -1</label>
					            <input type="text" class="form-control" name="emergency_numbers[]" value="020743773737">
					        </div>
					    </div>
					        <div class="col-md-4">
					        <br>
					        <a class="remove-field btn btn-dark mt-2" data-id="020743773737" href="javascript:;">Remove</a>
					    </div>
					</div>
					<div class="row mb-5">
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Title / Name -2</label>
					            <input type="text" class="form-control" name="emergency_captions[]" value="Managing Agent">
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Contact Number -2</label>
					            <input type="text" class="form-control" name="emergency_numbers[]" value="020747848">
					        </div>
					    </div>
					        <div class="col-md-4">
					        <br>
					        <a class="remove-field btn btn-dark mt-2" data-id="020747848" href="javascript:;">Remove</a>
					    </div>
					</div>
					<div class="row remove_0207523612 mb-5">
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Title / Name -3</label>
					            <input type="text" class="form-control" name="emergency_captions[]" value="Fire Service">
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group">
					            <label>Contact Number -3</label>
					            <input type="text" class="form-control" name="emergency_numbers[]" value="0207523612">
					        </div>
					    </div>
					        <div class="col-md-4">
					        <br>
					        <a class="remove-field btn btn-dark mt-2" data-id="0207523612" href="javascript:;">Remove</a>
					    </div>
					</div>
					<div class="row">
						<hr class="bg-dark">
						<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">							
						<h5>Building Documents</h5>
						<hr class="bg-dark">
						</div>
					</div>
					<div class="row">
					    <div class="col-md-3">
					        <div class="form-group ">
					            <label for="documents_files_label" class="control-label">Document File 1 Label</label>
					            <input class="form-control " placeholder="Documents File 1 Name" name="documents_files_label[]" type="text" value="Test Sample file 1">
					                    </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group ">
					            <label for="documents_files" class="control-label">Upload Document File 1</label>
					            <input name="documents_files[]" type="file">
					                            <p class="mb-0"><a href="./docs/simple-pdf" target="_blank">Test Sample file 1</a>
					                    <div class="input-rc"><input type="checkbox" id="delete_files_chk_0" name="delete_files_chk[]" class="delete_files_chk" data-id="<a href=&quot;https://portal.aptlymanaged.com/public/front/documents_files/1689767598_0.pdf&quot; target=&quot;_blank&quot;>Test Sample file 1</a>" value="1689767598_0.pdf"><span class="input-rc-span"></span></div> Delete
					                </p>
					                        
					        </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group ">
					            <label for="documents_files_label" class="control-label">Document File 2 Label</label>
					            <input class="form-control " placeholder="Documents File 2 Name" name="documents_files_label[]" type="text" value="Test Sample file 2">
					                    </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group ">
					            <label for="documents_files" class="control-label">Upload Document File 2</label>
					            <input name="documents_files[]" type="file">
					                            <p class="mb-0"><a href="./docs/simple-pdf" target="_blank">Test Sample file 2</a>
					                    <div class="input-rc"><input type="checkbox" id="delete_files_chk_1" name="delete_files_chk[]" class="delete_files_chk" data-id="<a href=&quot;https://portal.aptlymanaged.com/public/front/documents_files/1689767598_1.pdf&quot; target=&quot;_blank&quot;>Test Sample file 2</a>" value="1689767598_1.pdf"><span class="input-rc-span"></span></div> Delete
					                </p>
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
					            <input class="form-control text-dark" placeholder="Documents File 4 Name" name="documents_files_label[]" type="text" value="">
					                    </div>
					    </div>
					    <div class="col-md-3">
					        <div class="form-group ">
					            <label for="documents_files" class="control-label">Upload Documents File 4</label>
					            <input name="documents_files[]" type="file">
					        </div>
					    </div>
					</div>
					<hr class="bg-dark">
					<div class="card-footer p-0">
			            <button type="submit" class="btn btn-dark mb-0">Submit</button>
			        </div>
			    </div>
			</form>


				</div>
			</div>
		</div>
	</div>
	
</div>
<?php include 'footer.php';?>
