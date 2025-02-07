<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Services</li>
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
	                <h4 class="text-white mb-0">Services</h4>
	                <button type="button" class="btn btn-block btn-white ms-auto mb-0" data-bs-toggle="modal" data-bs-target="#modal-services"><i class="ni ni-settings-gear-65"></i>&nbsp;&nbsp;Add Services</button>
	                 <!--<button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Default</button>-->
    
	              </div>
				</div>
				<div class="card-body">
		
			<hr class="bg-dark">
		    <table class="table table-flush dataTable-table mt-3" id="datatable-basic">
		    	<div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
									
								</div>
								<div class="dataTable-top">
									<div class="dataTable-dropdown">
										<label><select class="dataTable-selector">
											<option value="5">5</option>
											<option value="10" selected="">10</option>
											<option value="15">15</option>
											<option value="20">20</option>
											<option value="25">25</option>
										</select> entries per page</label></div></div>
		        <thead class="thead-light">
		            <tr role="row align-items-center">
		                <th class="text-dark font-weight-bolder sort" data-sortable="">#</th>
		                <th class="text-dark font-weight-bolder sort" data-sortable="">Type of <br>Service</th>
		                <th scope="col" class="text-dark font-weight-bolder sort" data-sort="status">Service  <br> Provider</th>
		                <th scope="col" class="text-dark font-weight-bolder sort">Contact No</th>
		                <th scope="col" class="text-dark font-weight-bolder sort" data-sort="completion"> Email</th>
		                <th scope="col" class="text-dark font-weight-bolder sort" data-sort="completion">Location</th>
		                <th scope="col" class="text-dark font-weight-bolder sort">Action</th>
		            </tr>
		        </thead>
		        <tbody>
		        	<tr role="row">
		        		<td>1</td>
		        		<td>XYZ</td>
		        		<td>ABC</td>
		        		<td>09454959444</td>
		        		<td>abc.@gmail.com</td>
		        		<td>XYZ</td>
		        		<td>
		        			<div class="d-flex">
		                		<button type="button" class="btn bg-gradient-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-pencil-square text-white opacity-10"></i>
</button>
                		
		                		  <button type="button" class="btn btn-block del-btn bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash text-white opacity-10"></i></button>
        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h6 class="modal-title" id="modal-title-default">Delete Conformation</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="" method="POST" id="delete_form">
                <input type="hidden" name="_token" value="">                
                <input type="hidden" name="_method" value="DELETE">                
                <div class="modal-body">
                    Are you sure want to delete?
                </div>
                   <div class="modal-footer">
                <button type="button" class="btn bg-gradient-primary">Delete</button>
                <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
              </div>
           
            </div>
          </div>
                                </div>
		                	</div>
		        		</td>
		        		</tr>
		        		<tr role="row">
		        		<td>1</td>
		        		<td>XYZ</td>
		        		<td>ABC</td>
		        		<td>09454959444</td>
		        		<td>abc.@gmail.com</td>
		        		<td>XYZ</td>
		        		<td>
		        			<div class="d-flex">
		                		<button type="button" class="btn bg-gradient-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-pencil-square text-white opacity-10"></i>
</button>
                		
		                		 <button type="button" class="btn btn-block del-btn bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash text-white opacity-10"></i></button>
		                	</div>
		        		</td>
		        		</tr>
		        		<tr role="row">
		        		<td>1</td>
		        		<td>XYZ</td>
		        		<td>ABC</td>
		        		<td>09454959444</td>
		        		<td>abc.@gmail.com</td>
		        		<td>XYZ</td>
		        		<td>
		        			<div class="d-flex">
		        				
<!-- Button trigger modal -->
<button type="button" class="btn bg-gradient-primary p-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="fa fa-pencil-square text-white opacity-10"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Services</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="POST" action="" accept-charset="UTF-8" role="form" id="service-edit" novalidate="novalidate"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="">
        <div class="modal-body">
            <div class="msg"></div>
            <div class="row">
                <div class="col-md-4">
                        <div class="">
                            <label for="category_id" class="control-label required">Service Category</label>
                            <select class="form-control" id="category_id" name="category_id"><option value="">Select Category</option><option value="72" selected="selected">Test</option></select>
                                                    </div>
                    </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="service_name" class="control-label required">Service Name</label>
                        <input class="form-control " placeholder="Service Name" name="service_name" type="text" value="Test" id="service_name">
                                            </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="service_provider_name" class="control-label required">Service Provider Name</label>
                        <input class="form-control " placeholder="Service Provider Name" name="service_provider_name" type="text" value="Test" id="service_provider_name">
                                            </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="contact_number" class="control-label required">Contact Number</label>
                        <input class="form-control " placeholder="Contact Number" name="contact_number" type="text" value="02076636366" id="contact_number">
                                            </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="mobile_number" class="control-label required">Mobile Number</label>
                        <input class="form-control " placeholder="Mobile Number" name="mobile_number" type="text" id="mobile_number">
                                            </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="email" class="control-label required">Email</label>
                        <input class="form-control " placeholder="Email" name="email" type="text" value="www.aptlymanaged.com" id="email">
                                            </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="status" class="control-label required">Status</label>
                        <br>
                        <input type="radio" name="status" value="1" checked="">
                        Open
                        <input type="radio" name="status" value="0">
                        Close
                        <br>
                                                <div class="error_msg"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group ">
                        <label for="address" class="control-label required">Address</label>
                        <textarea class="form-control" placeholder="Address" rows="1" name="address" cols="50" id="address">Test</textarea>
                                            </div>
                </div>
            </div>
        </div>
         <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn bg-gradient-primary">Save changes</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>                		
		                	 <button type="button" class="btn btn-block del-btn bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash text-white opacity-10"></i></button>
		                	</div>
		        		</td>
		        		</tr>
		        </tbody>

		    </table>
		     <div class="dataTable-bottom">
		    	<div class="dataTable-info">Showing 1 to 10 of 57 entries</div>
		    	<nav class="dataTable-pagination">
		    		<ul class="dataTable-pagination-list">
		    			<li class="pager"><a href="#" data-page="1">‹</a></li>
		    			<li class="active"><a href="#" data-page="1">1</a></li>
		    			<li class=""><a href="#" data-page="2">2</a></li>
		    			<li class=""><a href="#" data-page="3">3</a></li>
		    			<li class=""><a href="#" data-page="4">4</a></li>
		    			<li class=""><a href="#" data-page="5">5</a></li>
		    			<li class=""><a href="#" data-page="6">6</a></li>
		    			<li class="pager"><a href="#" data-page="2">›</a>
		    			</li>
		    		</ul>
		    	</nav>
		    </div>
		</div>
		<div class="modal fade" id="modal-services" tabindex="-1" role="dialog" aria-labelledby="modal-services" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-services">Add Service</h6>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row p-2">
                    <div class="col-md-4">
                        <div class="">
                            <label for="category_id" class="control-label required">Service Category</label>
                            <select class="form-control" id="category_id" name="category_id"><option value="" selected="selected">Select Category</option><option value="72">Test</option></select>
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="service_name" class="control-label required">Type of Service</label>
                            <input class="form-control " placeholder="Type of Service" name="service_name" type="text" id="service_name">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="service_provider_name" class="control-label required">Service Provider</label>
                            <input class="form-control " placeholder="Service Provider" name="service_provider_name" type="text" id="service_provider_name">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="contact_number" class="control-label required">Contact Number</label>
                            <input class="form-control " placeholder="Contact Number" name="contact_number" type="text" id="contact_number">
                                                    </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="email" class="control-label required">Email / Website</label>
                            <input class="form-control " placeholder="Email / Website" name="email" type="text" id="email">
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="address" class="control-label required">Location</label>
                            <textarea class="form-control" placeholder="Location" rows="1" name="address" cols="50" id="address"></textarea>
                                                    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group ">
                            <label for="status" class="control-label required">Status</label>
                            <br>
                            <input type="radio" name="status" value="1" checked="">
                            Open
                            <input type="radio" name="status" value="0">
                            Closed
                            <br>
                                                        <div class="error_msg"></div>
                        </div>
                    </div>

                </div> 
          </div>
          <div class="modal-footer">
            <button type="button" class="btn bg-gradient-primary">Save changes</button>
            <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
</div>
</div>
</div>
</div>

<?php include 'footer.php';?>