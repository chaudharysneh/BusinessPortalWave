<?php include 'layout/header.php'; ?>

<nav class="d-none navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
	<div class="container-fluid py-1 px-3 mt-3">
		<nav aria-label="breadcrumb mt-4">
			<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
				<li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
				<li class="breadcrumb-item text-dark active" aria-current="page">Apartment Units</li>
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
<!-- <div class="container-fluid py-4 pt-0" style="background-color: #000000e0;"> -->
<div class="container-fluid dark_cont_bg py-4 pt-0">

	<div class="row pt-4">
		<div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
			<div class="card dark-bg" style="border-radius: 18px;">
				<div class="card-header dark-bg-still">
					<div class="d-flex align-items-center">
						<h4 class="light-text-still mb-0">Services</h4>
						<button class="btn bg-light ms-auto mb-0"><a href="add-service.php" class="dark-text-still"><i class="ni ni-building mt-1"></i>&nbsp;&nbsp;Add Service</a></button>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive datatable overflow-hidden">

						<div>
							<table class="table table-flush dataTable-table" id="datatable-basic">
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
											</select> entries per page</label>
									</div>
								</div>
								<thead class="thead-light">
									<tr role="row align-items-center">
										<th class="light-text font-weight-bolder sort" data-sortable="">#</th>
										<th scope="col" class="light-text font-weight-bolder sort" data-sort="status">Service Name</th>
										<th scope="col" class="light-text font-weight-bolder sort">Cost</th>
										<th scope="col" class="light-text font-weight-bolder sort" data-sort="completion">Duration</th>
										<th scope="col" class="light-text font-weight-bolder sort">Pricing Type</th>
										<th scope="col" class="light-text font-weight-bolder sort">Status</th>
										<th scope="col" class="light-text font-weight-bolder sort">Action</th>
									</tr>
								</thead>
								<tbody class="list">

									<tr>
										<th scope="row" class="light-text">1</th>
										<!-- <td>102</td> -->
										<td>
											<div class="d-flex align-items-center">
												<img src="./assets/img/laundary.jpg" alt="Profile" class="rounded-2 me-2 object-fit-cover" width="140" height="80">
												<div class="light-text"><strong>Laundry & Dry Cleaning</strong> <br>Home Services</div>
											</div>
										</td>
										<td class="light-text">£15.00</td>
										<td class="light-text">Same-day</td>
										<td class="light-text">Starts From</td>
										<td class="light-text"><span class="text-white text-uppercase" style="background-color: #549959;font-weight:600;border-radius:8px; padding:6px 18px">Active</span></td>
										<td>
											<div class="d-flex">
												<div class="action-icons"><a href="edit-service.php" class="bg-light edit-btn p-2 action-icon-border"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></a></div>
												<div class="action-icons"><a href="view-service.php" class="bg-light view-btn action-icon-border"><i class="fa fa-eye dark-text-still opacity-10"></i></a></div>
												<button type="button" class="btn btn-block del-btn bg-light mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash dark-text-still opacity-10"></i></button>
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
									<tr>
										<th scope="row" class="light-text">2</th>
										<td>
											<div class="d-flex align-items-center">
												<img src="./assets/img/packagemanagement.jpg" alt="Profile" class="rounded-2 me-2 object-fit-cover" width="140" height="80">
												<div class="light-text"><strong>Package Management</strong> <br>Concierge Services</div>
											</div>
										</td>
										<td class="light-text">£5</td>
										<td class="light-text">1 hour</td>
										<td class="light-text">Fixed</td>
										<td class="light-text"><span class="text-white text-uppercase" style="background-color: #549959;font-weight:600;border-radius:8px; padding:6px 18px">Active</span></td>
										<td>
											<div class="d-flex">
												<div class="action-icons"><a href="edit-service.php" class="bg-light edit-btn p-2 action-icon-border"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></a></div>
												<div class="action-icons"><a href="view-service.php" class="bg-light view-btn action-icon-border"><i class="fa fa-eye dark-text-still opacity-10"></i></a></div>
												<button type="button" class="btn btn-block del-btn bg-light mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash dark-text-still opacity-10"></i></button>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row" class="light-text">3</th>
										<td>
											<div class="d-flex align-items-center">
												<img src="./assets/img/eventmanage.jpg" alt="Profile" class="rounded-2 me-2 object-fit-cover" width="140" height="80">
												<div class="light-text"><strong>Event Planning</strong> <br>Event Management</div>
											</div>
										</td>
										<td class="light-text">Custom Pricing</td>
										<td class="light-text">Varies</td>
										<td class="light-text">Custom</td>
										<td class="light-text"><span class="text-white text-uppercase" style="background-color: #549959;font-weight:600;border-radius:8px; padding:6px 18px">Active</span></td>
										<td>
											<div class="d-flex">
												<div class="action-icons"><a href="edit-service.php" class="bg-light edit-btn p-2 action-icon-border"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></a></div>
												<div class="action-icons"><a href="view-service.php" class="bg-light view-btn action-icon-border"><i class="fa fa-eye dark-text-still opacity-10"></i></a></div>
												<button type="button" class="btn btn-block del-btn bg-light mb-3 p-2" data-bs-toggle="modal" data-bs-target="#modal-delete"><i class="fa fa-trash dark-text-still opacity-10"></i></button>
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'layout/footer.php'; ?>