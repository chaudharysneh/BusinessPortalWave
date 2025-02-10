<?php include 'header.php'; ?>
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
                        <h4 class="light-text-still mb-0">All FAQ's</h4>
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
                                        <!-- <th scope="col" class="light-text font-weight-bolder sort" data-sort="status">FAQ Title</th> -->
                                        <th scope="col" class="light-text font-weight-bolder sort">Category</th>
                                        <th scope="col" class="light-text font-weight-bolder sort" data-sort="completion">Question</th>
                                        <th scope="col" class="light-text font-weight-bolder sort">Answer</th>
                                        <th scope="col" class="light-text font-weight-bolder sort">Created At</th>
                                        <th scope="col" class="light-text font-weight-bolder sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list">

                                    <tr>
                                        <th scope="row" class="light-text">1</th>
                                        <!-- <td class="light-text">How can I find a reliable <br> service provider for home maintenance?
										</td> -->
                                        <td class="light-text">Service Providers</td>
                                        <td class="light-text">Are the businesses listed on the <br> portal verified?</td>
                                        <td class="light-text">Yes, all businesses listed on the <br> portal go through a verification process <br> by the admin. Business owners must <br> provide valid documentation before being approved, <br> ensuring reliability and trustworthiness for residents.</td>
                                        <td class="light-text">2025-02-10</td>
                                        <td>
                                            <div class="d-flex">
                                            <div class="action-icons edit-btn action-icon-border btn p-2 bg-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></div>
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
                                        <!-- <td>102</td> -->
                                        <!-- <td class="light-text"> Can I book an appointment with a business through the portal?
										</td> -->
                                        <td class="light-text">Booking & Appointments</td>
                                        <td class="light-text"> How do I schedule a service <br> with a listed business?</td>
                                        <td class="light-text"> If the business has enabled appointment <br> bookings, you can visit their profile <br> and use the "Book Now" button to <br>schedule a service. The business owner <br> will confirm your request, and you'll <br>receive a notification once it's approved.</td>
                                        <td class="light-text">2025-02-10</td>
                                        <td>
                                            <div class="d-flex">
                                            <div class="action-icons edit-btn action-icon-border btn p-2 bg-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></div>
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
                                        <th scope="row" class="light-text">3</th>
                                        <!-- <td>102</td> -->
                                        <!-- <td class="light-text"> What if I have a complaint about a business?
										</td> -->
                                        <td class="light-text">Customer Support</td>
                                        <td class="light-text">How can I report an issue <br> with a business listed on the portal?</td>
                                        <td class="light-text"> If you encounter any issues with <br> a business, you can report it <br> using the "Report Business" feature on <br>their profile. Our support team will <br> review the complaint and take appropriate <br> action based on our guidelines.</td>
                                        <td class="light-text">2025-02-10</td>
                                        <td>
                                            <div class="d-flex">
                                                <div class="action-icons edit-btn action-icon-border btn p-2 bg-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-pencil-square dark-text-still opacity-10"></i></div>


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

                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header dark-bg-still">
                                                    <h5 class="modal-title light-text-still" id="exampleModalLabel">Edit FAQ's</h5>
                                                    <button type="button" class="btn-close light-text-still" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="" accept-charset="UTF-8" role="form" id="service-edit" novalidate="novalidate"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="">
                                                        <div class="modal-body">
                                                            <div class="msg"></div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="">
                                                                        <label for="category_id" class="control-label required">Category</label>
                                                                        <select class="form-control" id="category_id" name="category_id">
                                                                            <option value="">Select Category</option>
                                                                            <option value="72" selected="selected">Test</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group ">
                                                                        <label for="service_name" class="control-label required">Question</label>
                                                                        <input class="form-control " placeholder="Service Name" name="service_name" type="text" value="Test" id="service_name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group ">
                                                                        <label for="address" class="control-label required">Answer</label>
                                                                        <textarea class="form-control" placeholder="Address" rows="2" name="address"  id="address">Test</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark-bg light-text" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn dark-bg light-text">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

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



<?php include 'footer.php'; ?>