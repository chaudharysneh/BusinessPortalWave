<?php include 'header.php'; ?>
<nav class="navbar d-none navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3 mt-3">
        <!-- <nav aria-label="breadcrumb mt-4">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item "><a class="opacity-5 text-dark" href="index.php">Home</a></li>
            <li class="breadcrumb-item text-dark active" aria-current="page">Add Apartment Units</li>
          </ol>
        </nav> -->
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

<div class="container-fluid dark_cont_bg py-4 pt-0">


    <div class="row mt-4">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card dark-bg" style="border-radius: 18px;">
                <div class="card-header dark-bg-still text-white">
                    <div class="d-flex align-items-center">
                        <h4 class="light-text-still mb-0">Edit Service Details</h4>
                        <button class="btn light-bg ms-auto mb-0"><a href="units.php" class="dark-text-still"><i class="ni ni-bold-left mt-1"></i>&nbsp;&nbsp; Back</a></button>
                    </div>
                </div>

                <form method="POST" action="units.php" accept-charset="UTF-8" role="form" id="create-units" enctype="multipart/form-data" novalidate="novalidate"><input name="_token" type="hidden" value="GBmvPKRydnhhv9WnYvN5p1safhB4NcQ5qQxyRDaw">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="block_number" class="control-label light-text required">Service Name<span style="color: red">*</span></label>
                                    <input class="form-control " placeholder="Core" name="block_number" type="text" id="block_number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service_category" class="control-label light-text required">Service Category <span style="color: red">*</span></label>
                                    <select class="form-control form-select" name="service_category" id="service_category">
                                        <option value="" disabled selected>Select a Service Category</option>
                                        <option value="concierge">Concierge Services</option>
                                        <option value="home_services">Home Services</option>
                                        <option value="event_management">Event Management</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="no_of_keys" class="control-label light-text">Service Description</label>
                                    <textarea class="form-control" rows="1" placeholder="No. of Keys" name="no_of_keys" type="text" id="no_of_keys"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="pricing_option" class="control-label light-text light-text">Pricing Type</label>
                                    <select class="form-control form-select" name="pricing_type" id="pricing_type">
                                        <option value="" disabled selected>Select a Pricing Type</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="starting_from">Starting From</option>
                                        <option value="custom">Custom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="key_waiver" class="control-label light-text">Cost</label>
                                    <input class="form-control " placeholder="$11" name="cost" type="text" id="key_waiver">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="letting_agent_info" class="control-label light-text">Duration</label>
                                    <input class="form-control " placeholder="Letting Agent Information" name="letting_agent_info" type="text" id="letting_agent_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Features</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Benefits</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Availability</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Status</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Contact Phone</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="bicycle_scooter_info" class="control-label light-text">Contact Email</label>
                                    <input class="form-control " placeholder="Bicycle / Scooter Information" name="bicycle_scooter_info" type="text" id="bicycle_scooter_info">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <style>
                                .upload-box {
                                    border: 2px dashed #007bff;
                                    padding: 15px;
                                    text-align: center;
                                    cursor: pointer;
                                    border-radius: 10px;
                                    transition: 0.3s;
                                    background: #dfefff;
                                }

                                .upload-box:hover {
                                    background-color: #f8f9fa;
                                }

                                .upload-box i {
                                    font-size: 40px;
                                    color: #007bff;
                                }

                                .upload-box p {
                                    margin-top: 10px;
                                    color: #6c757d;
                                }

                                .file-preview {
                                    margin-top: 10px;
                                    font-size: 14px;
                                    color: #28a745;
                                }
                            </style>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Service Image</label>
                                    <!-- <input class="form-control" type="file"> -->
                                    <div class="upload-box" id="uploadBox">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p>Drag & Drop or Click to Upload</p>
                                        <input type="file" id="fileInput" hidden>
                                    </div>
                                    <div class="file-preview" id="filePreview"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Gallery Images (Multiple)</label>
                                    <!-- <input class="form-control" type="file"> -->
                                    <div class="upload-box" id="uploadBox">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p>Drag & Drop or Click to Upload</p>
                                        <input type="file" id="fileInput" hidden>
                                    </div>
                                    <div class="file-preview" id="filePreview"></div>
                                </div>
                            </div>

                            <script>
                                const uploadBox = document.getElementById("uploadBox");
                                const fileInput = document.getElementById("fileInput");
                                const filePreview = document.getElementById("filePreview");

                                uploadBox.addEventListener("click", () => fileInput.click());

                                fileInput.addEventListener("change", (event) => {
                                    const file = event.target.files[0];
                                    if (file) {
                                        filePreview.textContent = `Selected File: ${file.name}`;
                                    } else {
                                        filePreview.textContent = "";
                                    }
                                });

                                uploadBox.addEventListener("dragover", (event) => {
                                    event.preventDefault();
                                    uploadBox.style.backgroundColor = "#e9ecef";
                                });

                                uploadBox.addEventListener("dragleave", () => {
                                    uploadBox.style.backgroundColor = "#fff";
                                });

                                uploadBox.addEventListener("drop", (event) => {
                                    event.preventDefault();
                                    uploadBox.style.backgroundColor = "#fff";

                                    const file = event.dataTransfer.files[0];
                                    if (file) {
                                        fileInput.files = event.dataTransfer.files;
                                        filePreview.textContent = `Selected File: ${file.name}`;
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer pt-2">
                        <button type="submit" class="btn light-bg dark-text px-5 float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>