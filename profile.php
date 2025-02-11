<?php include 'header.php'; ?>
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

</div>
<div class="card shadow-lg mx-4 card-profile-bottom mt-0">

  <div class="card-body p-3">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="./assets/img/team-1.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      <div class="col-auto my-auto">
        <div class="h-100">
          <h5 class="mb-1">
            Sayo Kravits
          </h5>
          <p class="mb-0 font-weight-bold text-sm">
            Public Relations
          </p>
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> -->
    </div>
  </div>
</div>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <!-- <p class="mb-0">Edit Profile</p> -->
            <!-- <button class="btn btn-dark btn-sm ms-auto">Settings</button> -->
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">User Information</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Username</label>
                <input class="form-control" type="text" value="lucky.jesse">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Full name</label>
                <input class="form-control" type="text" value="Jesse">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Email address</label>
                <input class="form-control" type="email" value="jesse@example.com">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Phone</label>
                <input class="form-control" type="number" placeholder="+91 XXXXX XXXXX">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">

          <p class="text-uppercase text-sm">Cpmpany Information</p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Company Name</label>
                <input class="form-control" type="text" value="Rohan Stationary">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Company Logo</label>
                <input class="form-control" type="file" value="Jesse">
              </div>
            </div>
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
                <label for="example-text-input" class="form-control-label">Banner (Optional)</label>
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

            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Business Media</label>
                <div class="upload-box" id="uploadBox">
                  <i class="fas fa-cloud-upload-alt"></i>
                  <p>Drag & Drop or Click to Upload</p>
                  <input type="file" id="fileInput" hidden>
                </div>
                <div class="file-preview" id="filePreview"></div>
              </div>
            </div>
          </div>
          <hr class="horizontal dark">

          <p class="text-uppercase text-sm">Contact Information</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Address</label>
                <input class="form-control" type="text" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">City</label>
                <input class="form-control" type="text" value="New York">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Country</label>
                <input class="form-control" type="text" value="United States">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Postal code</label>
                <input class="form-control" type="text" value="437300">
              </div>
            </div>
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">About me</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">About me</label>
                <input class="form-control" type="text" value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-profile">
        <img src="./assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
          <div class="col-4 col-lg-4 order-lg-2">
            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
              <a href="javascript:;">
                <img src="./assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
              </a>
            </div>
          </div>
        </div>
        <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
          <div class="d-flex justify-content-between">
            <a href="javascript:;" class="btn btn-sm btn-light mb-0 d-none d-lg-block">Connect</a>
            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
          </div>
        </div>
        <div class="card-body pt-0">
          <div class="row">
            <div class="col">
              <div class="d-flex justify-content-center">
                <div class="d-grid text-center">
                  <span class="text-lg font-weight-bolder">22</span>
                  <span class="text-sm opacity-8">Friends</span>
                </div>
                <div class="d-grid text-center mx-4">
                  <span class="text-lg font-weight-bolder">10</span>
                  <span class="text-sm opacity-8">Photos</span>
                </div>
                <div class="d-grid text-center">
                  <span class="text-lg font-weight-bolder">89</span>
                  <span class="text-sm opacity-8">Comments</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <h5>
              Mark Davis<span class="font-weight-light">, 35</span>
            </h5>
            <div class="h6 font-weight-300">
              <i class="ni location_pin mr-2"></i>Bucharest, Romania
            </div>
            <div class="h6 mt-4">
              <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>University of Computer Science
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'layout/footer.php'; ?>