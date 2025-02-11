<?php include 'layout/header.php'; ?>

<style>
  p.text-sm.mb-0.text-uppercase.font-weight-bold {
    font-family: 'Poppins', 'Lato';
  }

  .fc-theme-standard .fc-scrollgrid {
    border: 1px solid #ebebeb;
    border-bottom: none;
    /* border: 1px solid red; */
  }

  a.fc-daygrid-day-number {
    color: #FEFEFE;
    /* color: red; */
  }

  .fc-theme-standard td,
  .fc-theme-standard th {
    border: 1px solid #ebebeb;
  }

  .fc .fc-toolbar.fc-header-toolbar {
    margin-bottom: 0.88em;
  }

  h4.text-capitalize.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  h4.mb-0.heading-left.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  h4.mb-0.text-light {
    font-family: 'Poppins';
    font-weight: 500;
  }

  .font-pop {
    font-family: 'Poppins';
    font-weight: 500;
  }

  table.fc-col-header {
    background: #21213e;
  }

  .fc-scrollgrid-sync-table tbody {
    height: 480px
  }


#calendar {
    border-radius: 0px;
    overflow: hidden;
  }

  .fc {
    border-radius: 15px;
  }

  .fc-view-harness {
    border-radius: 15px;
    overflow: hidden;
  }
</style>
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl d-none" id="navbarBlur"
  data-scroll="false">
  <div class="container-fluid py-1 px-3">
  </div>
</nav>

<!-- <div class="container-fluid py-4" style="background-color: #000000e0;"> -->
<div class="container-fluid py-4 dark_cont_bg">
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card"
        style="background-image: linear-gradient(310deg, #e8ebef 0%, #95c7fd 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase dark-text-still font-weight-bold">Message Board</p>
                <h5 class="font-weight-bolder">
                  5300
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                <i class="ni ni-money-coins text-lg text-white opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card" style="background-image: linear-gradient(310deg, #eddde0 0%, #ffbfad 100%);
    border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase dark-text-still font-weight-bold">Services</p>
                <h5 class="font-weight-bolder">
                  2,300
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                <i class="ni ni-world text-lg text-white opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card"
        style="background-image: linear-gradient(310deg, #d9efe8 0%, #a6dfcf 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase dark-text-still font-weight-bold">Notifications</p>
                <h5 class="font-weight-bolder">
                  +3,462
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                <i class="ni ni-paper-diploma text-white text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card"
        style="background-image: linear-gradient(310deg, #f3e3dc 0%, #f1b89d 100%); border-radius: 15px;">
        <!-- <div class="card" style="border-radius: 15px;"> -->
        <div class="card-body p-3">
          <div class="row">
            <div class="col-8">
              <div class="numbers">
                <p class="text-sm mb-0 text-uppercase dark-text-still font-weight-bold">Chat</p>
                <h5 class="font-weight-bolder">
                  1030
                </h5>
              </div>
            </div>
            <div class="col-4 text-end">
              <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                <i class="ni ni-cart text-white text-lg opacity-10" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-9 mb-lg-0 mb-4">
      <div class="card z-index-2 h-100 dark-bg" style="border-radius: 15px;">
        <div class="card-header dark-bg-still pb-0 pt-3">
          <h4 class="text-capitalize light-text-still">Potential Customer Area</h4>
        </div>
        <div class="card-body p-3">
          <div id="chartdiv"></div>

          <!-- <div class="row">
            <div class="col-6 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #FFF4DE;">
                  <div class="card-body p-3">
                    <h2 class="text-center">8</h2>
                    <p class="text-center">Apartment</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #e1f0ff;">
                  <div class="card-body p-3">
                    <h2 class="text-center">17</h2>
                    <p class="text-center">Residents</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #f9cacf;">
                  <div class="card-body p-3">
                    <h2 class="text-center">5</h2>
                    <p class="text-center">Concierge</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #bff7f4;">
                  <div class="card-body p-3">
                    <h2 class="text-center">114</h2>
                    <p class="text-center">Parcels Pending</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-2">
              <div class="numbers">

                <div class="card" style="background-color: #c4f9ca;">
                  <div class="card-body p-3">
                    <h2 class="text-center">0</h2>
                    <p class="text-center">Today’s Requests</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-6 mt-2 mb-3">
              <div class="numbers">

                <div class="card" style="background-color: #d3c8fff7;">
                  <div class="card-body p-3">
                    <h2 class="text-center">1</h2>
                    <p class="text-center">Contractors Checked In</p>
                  </div>
                </div>
              </div>
            </div>




          </div> -->
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <!-- doghnut==================== -->
      <div class="card dark-bg mb-4" style="border-radius: 15px;">
        <div class="card-header pb-0 pt-3 dark-bg-still">
          <h4 class="text-capitalize light-text-still">Sales Status</h4>
        </div>
        <div class="card-body p-3 pt-1">
          <div class="chart-container" style="position: relative; width: 300px; height: 150px; margin: auto;">
            <canvas id="halfCircleChart"></canvas>
          </div>
        </div>
      </div>
      <!-- =============== -->

      <div class="card dark-bg" style="border-radius: 17px;">
        <div class="card-header dark-bg-still py-2">
          <div class="d-flex justify-content-between align-items-baseline">
            <h4 class="mb-0 light-text-still py-1">Services</h4>
            <!-- <button type="button" class="d-flex align-items-center  font-pop btn btn-block btn-light ms-auto mb-0"
              data-bs-toggle="modal" data-bs-target="#modal-services" style="color: #1A1A27;"><i
                class="ni ni-settings-gear-65"></i>&nbsp;&nbsp;Add Services</button> -->
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-flush dataTable-table mt-3" id="datatable-basic">
            <div class="dataTable-wrapper dataTable-loading no-footer sortable fixed-height fixed-columns">
            </div>
            <div class="dataTable-top">
              <div class="dataTable-dropdown">
                <label class="d-none"><select class="dataTable-selector">
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
                <th class="light-text font-weight-bolder sort" data-sortable="">Profile</th>
                <th scope="col" class="light-text font-weight-bolder sort" data-sort="status">Service </th>
                <th scope="col" class="light-text font-weight-bolder sort">Cost ($)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="light-text" role="row">
                <td>
                  <img src="./assets/img/kal-visuals-square.jpg" alt="Profile" class="rounded-5 object-fit-cover" width="40" height="40" style="border-radius:50%;">
                </td>
                <td>ABC</td>
                <td>26$</td>
              </tr>


              <tr class="light-text" role="row">
                <td>
                  <img src="./assets/img/bruce-mars.jpg" alt="Profile" class="rounded-5 object-fit-cover" width="40" height="40" style="border-radius:50%;">
                </td>
                <td>ABC</td>
                <td>65$</td>
              </tr>

              <tr class="light-text" role="row">
                <td>
                  <img src="./assets/img/team-1.jpg" alt="Profile" class="rounded-5 object-fit-cover" width="40" height="40" style="border-radius:50%;">
                </td>
                <td>ABC</td>
                <td>23$</td>
              </tr>
              <tr class="light-text" role="row">
                <td>
                  <img src="./assets/img/team-1.jpg" alt="Profile" class="rounded-5 object-fit-cover" width="40" height="40" style="border-radius:50%;">
                </td>
                <td>ABC</td>
                <td>12$</td>
              </tr>
              <tr class="light-text" role="row">
                <td>
                  <img src="./assets/img/team-1.jpg" alt="Profile" class="rounded-5 object-fit-cover" width="40" height="40" style="border-radius:50%;">
                </td>
                <td>ABC</td>
                <td>9$</td>
              </tr>


            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-lg-9 mb-lg-0 mb-4">
      <div class="card dark-bg" style="border-radius: 15px;">
        <div class="card-header pb-0 pt-3 dark-bg-still">
          <h4 class="text-capitalize light-text-still">Events and Appointments </h4>
        </div>
        <div class="card-body p-3">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card dark-bg" style="border-radius: 17px;">
        <div class="card-header dark-bg-still py-2">
          <div class="d-flex justify-content-between align-items-baseline">
            <h4 class="mb-0 heading-left light-text-still py-1">Revence Acquisition Reports</h4>

          </div>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="Chart1" style="width: 100%; height: 453px; margin-left: -35px;"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modal-services" tabindex="-1" role="dialog" aria-labelledby="modal-services"
      aria-hidden="true">
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
                  <select class="form-control" id="category_id" name="category_id">
                    <option value="" selected="selected">Select Category</option>
                    <option value="72">Test</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="service_name" class="control-label required">Type of Service</label>
                  <input class="form-control " placeholder="Type of Service" name="service_name" type="text"
                    id="service_name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="service_provider_name" class="control-label required">Service Provider</label>
                  <input class="form-control " placeholder="Service Provider" name="service_provider_name" type="text"
                    id="service_provider_name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group ">
                  <label for="contact_number" class="control-label required">Contact Number</label>
                  <input class="form-control " placeholder="Contact Number" name="contact_number" type="text"
                    id="contact_number">
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
                  <textarea class="form-control" placeholder="Location" rows="1" name="address" cols="50"
                    id="address"></textarea>
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
  <?php include 'layout/footer.php'; ?>


  <script>
    const ctx1 = document.getElementById("Chart1").getContext("2d");
    const chart1 = new Chart(ctx1, {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Fab",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "",
          backgroundColor: "transparent",
          borderColor: "#365CF5",
          data: [
            600, 800, 750, 880, 940, 880, 900, 770, 920, 890, 976, 1100,
          ],
          pointBackgroundColor: "transparent",
          pointHoverBackgroundColor: "#365CF5",
          pointBorderColor: "transparent",
          pointHoverBorderColor: "#fff",
          pointHoverBorderWidth: 5,
          borderWidth: 5,
          pointRadius: 8,
          pointHoverRadius: 8,
          cubicInterpolationMode: "monotone", // Add this line for curved line
        }, ],
      },
      options: {
        plugins: {
          tooltip: {
            callbacks: {
              labelColor: function(context) {
                return {
                  backgroundColor: "#ffffff",
                  color: "#171717"
                };
              },
            },
            intersect: false,
            backgroundColor: "#f9f9f9",
            title: {
              fontFamily: "Plus Jakarta Sans",
              color: "#8F92A1",
              fontSize: 12,
            },
            body: {
              fontFamily: "Plus Jakarta Sans",
              color: "#171717",
              fontStyle: "bold",
              fontSize: 16,
            },
            multiKeyBackground: "transparent",
            displayColors: false,
            padding: {
              x: 30,
              y: 10,
            },
            bodyAlign: "center",
            titleAlign: "center",
            titleColor: "#8F92A1",
            bodyColor: "#171717",
            bodyFont: {
              family: "Plus Jakarta Sans",
              size: "16",
              weight: "bold",
            },
          },
          legend: {
            display: false,
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        title: {
          display: false,
        },
        scales: {
          y: {
            grid: {
              display: false,
              drawTicks: false,
              drawBorder: false,
            },
            ticks: {
              padding: 35,
              max: 1200,
              min: 500,
              color: "#fefefe",
            },
          },
          x: {
            grid: {
              drawBorder: false,
              color: "rgba(143, 146, 161, .1)",
              zeroLineColor: "rgba(143, 146, 161, .1)",
            },
            ticks: {
              padding: 20,
              color: "#fefefe",
            },
          },
        },
      },
    });
    // =========== chart one end
  </script>

<script>
        const ctx = document.getElementById('halfCircleChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Grocery', 'Sticks', 'Food', 'Delivery', 'Purple'],
                datasets: [{
                    data: [12, 19, 10, 15, 8],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                rotation: -90, // Rotate to start from top
                circumference: 180, // Limit to half circle
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                        color: 'white' // Set label text color to black
                    }
                    }
                }
            }
        });
    </script>