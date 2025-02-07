<?php include 'header.php';?>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3 mt-3">
        <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Message Board</li>
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
			<div class="card mb-4">
				<div class="card-header bg-dark text-white">					
					<div class="d-flex align-items-center">
	                <h4 class="text-white mb-0">Message Board</h4>
	                <!-- <button class="btn btn-white ms-auto mb-0"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Add Residents</button> -->
	              </div>
				</div>
				<div class="card-body">
					<section class="feed-main-wrap">
						<div class="feed-wrap">
							<div class="create-post-wrap">
						        <h2>Choose Online Concierge</h2>
						        <div class="write-post">
						          <ul class="concierge-list pl-0">
						            <li onclick="setConcierge(1076,'https://portal.aptlymanaged.com/public/front/concierges_image/1686043914.png')" id="conlist" class="active active_1076">
						              Mr C
						              <span id="online" style="color: green;"><i class="fas fa-circle"></i></span>
						          </li>
						         
						         <li onclick="setConcierge(1077,'https://portal.aptlymanaged.com/public/front/concierges_image/1686043901.png')" id="conlist" class="active active_1077">
						              ABC
						              <span id="online" style="color: green;"><i class="fas fa-circle"></i></span>
						          </li>
						          
						          <li onclick="setConcierge(1101,'https://portal.aptlymanaged.com/public/front/concierges_image/1708866165.png')" id="conlist" class="active active_1101">
						              XYZ
						              <span id="online" style="color: green;"><i class="fas fa-circle"></i></span>
						          </li>
						        
						       
						                        
						                      </ul>
						        </div>
						      </div>
						      <div class="create-post-wrap">
        <h2>Create Post</h2>
        <div class="write-post">
        	<div class="row">
        		<form method="post" id="upload_status_form" enctype="multipart/form-data">
        			<div class="row">
        				<div class="col-md-2">
        			 <div class="pro_img" id="default">
			            <div class="btn bg-dark text-white p-2">Choose Concierge</div>
			          </div>
        		</div>
        		<div class="col-md-9">
        			 
            <input type="hidden" name="_token" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
            <textarea class="form-control" placeholder="Write something here..." name="description" id="user_status" rows="4" cols="50"></textarea>
           	
            	 
        		</div>
        			</div>
        		

 <hr class="bg-dark mt-2">
 <div class="form-group">
	<label for="documents_files" class="control-label"></label>
	<input name="documents_files[]" type="file">
 </div>
<div class="row">
	<div class="col-md-4">
<label for="owners" class="control-label">Disable Comments</label>
	 <div class="input-rc">
	 <input type="checkbox" name="chk_comment" id="chk_comment" value="1"><span class="input-rc-span"></span>
	 </div>
	
	</div>
<div class="col-md-4">
	<label for="core" class="control-label">Core</label>
    <select id="coreOpt" name="coreOpt" class="form-control">
        <option value="all">All</option>
        <option value="1">1 </option>
        <option value="2">2 </option>
        <option value="3">3 </option>
        <option value="B">B </option>
    </select>
</div> 
<div class="col-md-4">
	<label for="owners" class="control-label">By Tenant or Owners</label>
    <select id="ownOpt" name="ownOpt" class="form-control">
        <option value="all">All</option>
            <option value="1">Tenants Only</option>
            <option value="2">Owners Only</option>
    </select>
</div>

</div>
<div class="card-footer board-btn">
			            <button type="submit" class="btn btn-dark mb-0">Post</button>
			        </div>
 </form>
        	
        	</div>
         
          
         
         
        </div>
      </div>
     
						</div>
					</section>
				</div>
			</div>
					<div class="card mt-4">
						<div class="card-body">
		                                  <div class="d-flex justify-content-center row">
		        <div class="col-md-12">
		                <div class="bg-white p-4">
		                    <div class="d-flex flex-row user-info"><img class="rounded-circle m-2" src="./assets/img/team-2.jpg" width="60">
		                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
		                    </div>
		                    <div class="mt-2">
		                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		                    </div>
		                </div>
		                <div class="bg-white">
		                    <div class="d-flex flex-row fs-12">
		                        <div class="like p-3 cursor"><i class="fa fa-thumbs-up text-dark">&nbsp;</i><span class="ml-1">&nbsp;Like</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-comment text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Comment</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-share text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Share</span></div>
		                    </div>
		                </div>
		                <div class="p-2">
		                    <div class="d-flex flex-row align-items-start">
		                        <img class="rounded-circle m-2" src="./assets/img/team-2.jpg" width="60">
		                        <textarea class="form-control ml-1 shadow-none textarea"></textarea>
		                    </div>
		                    <div class="mt-2 text-right" style="float: right;">
		                        <button class="btn btn-dark shadow-none" type="button">Post comment</button>
		                        <button class="btn btn-outline-dark ml-1 shadow-none" type="button">Cancel</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		        </div>
		    </div>

		    	<div class="card mt-4">
						<div class="card-body">
		                                  <div class="d-flex justify-content-center row">
		        <div class="col-md-12">
		                <div class="bg-white p-4">
		                    <div class="d-flex flex-row user-info"><img class="rounded-circle m-2" src="./assets/img/team-1.jpg" width="60">
		                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
		                    </div>
		                    <div class="mt-2">
		                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		                    </div>
		                </div>
		                <div class="bg-white">
		                    <div class="d-flex flex-row fs-12">
		                        <div class="like p-3 cursor"><i class="fa fa-thumbs-up text-dark">&nbsp;</i><span class="ml-1">&nbsp;Like</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-comment text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Comment</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-share text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Share</span></div>
		                    </div>
		                </div>
		                <div class="p-2">
		                    <div class="d-flex flex-row align-items-start">
		                        <img class="rounded-circle m-2" src="./assets/img/team-1.jpg" width="60">
		                        <textarea class="form-control ml-1 shadow-none textarea"></textarea>
		                    </div>
		                    <div class="mt-2 text-right" style="float: right;">
		                        <button class="btn btn-dark shadow-none" type="button">Post comment</button>
		                        <button class="btn btn-outline-dark ml-1 shadow-none" type="button">Cancel</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		        </div>
		    </div>

	<div class="card mt-4">
						<div class="card-body">
		                                  <div class="d-flex justify-content-center row">
		        <div class="col-md-12">
		                <div class="bg-white p-4">
		                    <div class="d-flex flex-row user-info"><img class="rounded-circle m-2" src="./assets/img/team-3.jpg" width="60">
		                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
		                    </div>
		                    <div class="mt-2">
		                        <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		                    </div>
		                </div>
		                <div class="bg-white">
		                    <div class="d-flex flex-row fs-12">
		                        <div class="like p-3 cursor"><i class="fa fa-thumbs-up text-dark">&nbsp;</i><span class="ml-1">&nbsp;Like</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-comment text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Comment</span></div>
		                        <div class="like p-3 cursor"><i class="fa fa-share text-dark"></i>&nbsp;<span class="ml-1">&nbsp;Share</span></div>
		                    </div>
		                </div>
		                <div class="p-2">
		                    <div class="d-flex flex-row align-items-start">
		                        <img class="rounded-circle m-2" src="./assets/img/team-3.jpg" width="60">
		                        <textarea class="form-control ml-1 shadow-none textarea"></textarea>
		                    </div>
		                    <div class="mt-2 text-right" style="float: right;">
		                        <button class="btn btn-dark shadow-none" type="button">Post comment</button>
		                        <button class="btn btn-outline-dark ml-1 shadow-none" type="button">Cancel</button>
		                    </div>
		                </div>
		            </div>
		        </div>
		        </div>
		    </div>


                        </div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>