<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Apartment Resident</li>
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
	                <h4 class="text-white mb-0">Apartment Residents</h4>
	                <button class="btn btn-white ms-auto mb-0"><a href="add-resident.php"><i class="ni ni-building"></i>&nbsp;&nbsp;Add Residents</a></button>
	              </div>
				</div>
				<div class="card-body">
		<h3>Filter</h3>
        <div class="row">
                <div class="col-md-4">
                    <label>Select Apartment Number</label>
                    <select class="select2 form-control search-input-select select2-hidden-accessible" name="unit" data-select2-id="select2-data-1-npku" tabindex="-1" aria-hidden="true"><option value="" selected="selected" data-select2-id="select2-data-3-huoj">Select Apartment</option><option value="527">1-101</option><option value="528">1-102</option><option value="530">2-201</option><option value="532">2-203</option><option value="533">3-301</option><option value="534">3-302</option><option value="535">3-303</option><option value="874">B-1611</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-vdlf" style="width: 282.328px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-unit-fx-container"><span class="select2-selection__rendered d-none" id="select2-unit-fx-container" role="textbox" aria-readonly="true" title="Select Apartment">Select Apartment</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
            </div>
			<hr class="bg-dark">
            <div class="table-responsive datatable">
				
			
                <table class="table table-flush dataTable mt-3 table-responsive" id="datatable-basic">
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
                            <th class="text-dark font-weight-bolder sort" data-sortable="">Name</th>
                            <th scope="col" class="text-dark font-weight-bolder sort" data-sort="status">Resident <br> Type</th>
                            <th scope="col" class="text-dark font-weight-bolder sort">Apartment No</th>
                            <th scope="col" class="text-dark font-weight-bolder sort" data-sort="completion">Contact Email</th>
                            <th scope="col" class="text-dark font-weight-bolder sort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                   
    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
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
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                   <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                   <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
                            <tr role="row">
                            <td>1</td>
                            <td>test</td>
                            <td>owner_living</td>
                            <td>B-1611</td>
                            <td>abc.@gmail.com</td>
                            <td>
                                <div class="d-flex">
                                    <div class="action-icons"><a href="edit-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-pencil-square text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="view-resident-concierge.php" class="bg-dark p-2 action-icon-border"><i class="fa fa-eye text-white opacity-10"></i></a>
                                </div>
                                
                                <div class="action-icons"><a href="send-login-details.php" class="bg-dark p-2 action-icon-border"><i class="ni ni-send text-white opacity-10"></i></a>
                                </div>
                                    <button type="button" class="btn btn-block bg-gradient-primary mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-default"><i class="fa fa-trash text-white opacity-10"></i></button>
                                </div>
                            </td>
                            </tr>
    
                    </tbody>
                </table>
                </div>
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
</div>
</div>
</div>
</div>
                



<?php include 'footer.php';?>