<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Wave
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link href="/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>

</head>
<style>
  .dark-bg {
    /* background: #161f2e !important; */
    background: #1A1A27;
    /* background: #000000f0  !important; */
  }

  /* for static======== */
  .dark-bg-still {
    background: #1A1A27;
  }

  /* =========== */
  .light-bg {
    background: #FEFEFE;
  }

  .dark-text {
    color: #1A1A27;
  }

  .dark-text-still {
    color: #1A1A27;
  }

  .light-text {
    /* color: #FEFEFE; */
    color: #fff;
  }

  .light-text-still {
    color: #fff;
  }

  /* .grey-text {
    color: #fff;
  } */

  .dark_cont_bg {
    background-color: #21213e;
  }

  .light_cont_bg {
    background-color: #F6F7F8;
  }

  .sidebar-dropdown {
    background: #67748e63;
  }

  a.nav-link:hover {
    background: #67748e63;
    border-radius: 8px;
  }

  .fc .fc-toolbar-title {
    color: #fff;
  }

  .nav-link:hover,
  .sidebar-dropdown:hover {
    background: #67748e63;
    color: #fff !important;
  }

  .nav-link:active,
  .sidebar-dropdown:active {
    background: #67748e63;
    color: #fff !important;
  }

  .nav-link:focus,
  .sidebar-dropdown:focus {
    /* background: #67748e63; */
    color: #fff !important;
  }

  .navbar-vertical .navbar-brand>img,
  .navbar-vertical .navbar-brand-img {
    max-height: 100px;
  }

  .search {
    width: 100%;
    position: relative;
    display: flex;
  }

  .searchTerm {
    width: 100%;
    border: none;
    border-right: none;
    padding: 10px;
    height: 35px;
    border-radius: 8px 0px 0px 8px;
    outline: none;
    color: rgba(136, 136, 136, 0.78);
    background: #e9ecef;
  }

  .searchTerm:focus {
    color: #888888;
  }

  .searchButton {
    width: 75px;
    height: 35px;
    border: none;
    background: #e9ecef;
    text-align: center;
    color: #888888;
    border-radius: 0 8px 8px 0;
    cursor: pointer;
    font-size: 20px;
  }

  .header .wrap {
    width: 30%;
    position: sticky;
    /* top: 50%;
        left: 34%;
        transform: translate(-50%, -50%); */
  }

  .dataTable-dropdown label{
    color:#fff;
  }
</style>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-120 nav_br dark_cont_bg position-absolute w-100"></div>
  <aside class="sidenav dark-bg-still navbar navbar-vertical navbar-expand-xs border-0 fixed-start" id="sidenav-main">
    <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-lg-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0 py-0" href="index.php " target="_blank">
        <img src="./assets/img/wavelogo.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class=" font-weight-bold h3 brandname text-white" style="margin-left: -10px;">WAVE </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center ml-md-auto">
        <li class="nav-item my-1">
          <a class="nav-link" href="index.php">
            <div
              class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-sm light-text-still opacity-10"></i>
            </div>
            <span class="nav-link-text ms-0 light-text-still">Dashboard</span>
            <!-- <span class="nav-link-text ms-1 text-white">Dashboard</span> -->
          </a>
        </li>
        <li class="nav-item my-1">
          <div class="dropdown">
            <button class="btn dropdown-toggle sidebar-dropdown nav-link light-text-still" type="button"
              id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings text-sm light-text-still opacity-10"></i>
              </div>Settings
            </button>
            <ul class="dropdown-menu dark-bg-still ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
              <li class="">
                <a class="dropdown-item d-flex" href="companysettings.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Edit Building Details</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="units.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Apartment Units</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="profile_edit.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-pencil-alt light-text-still text-sm opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Edit Profile</span>
                </a>
              </li>
              <li class="">
                <a class="dropdown-item d-flex" href="change-password.php">
                  <div
                    class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-key-25 text-sm light-text-still opacity-10"></i>
                  </div><span class="mt-1 light-text-still">Change Password</span>
                </a>
              </li>

            </ul>
          </div>
        </li>
        <div class="dropdown">
          <button class="btn dropdown-toggle sidebar-dropdown1 nav-link light-text-still" type="button"
            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <div
              class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-settings light-text-still text-sm opacity-10"></i>
            </div> Apartment & Building
          </button>
          <ul class="dropdown-menu dark-bg-still ps-3 mx-3 mt-2" aria-labelledby="dropdownMenuButton">
            <li class="">
              <a class="dropdown-item d-flex" href="resident-and-concierge.php">
                <div
                  class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-building light-text-still text-sm opacity-10"></i>
                </div><span class="mt-1 light-text-still">Resident and Concierge </span>
              </a>
            </li>
            <li class="">
              <a class="dropdown-item d-flex" href="message_board.php">
                <div
                  class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="ni ni-chat-round light-text-still text-sm opacity-10"></i>
                </div><span class="mt-1 light-text-still">Message Board </span>
              </a>
            </li>
          </ul>

          <li class="nav-item my-1">
            <a class="nav-link " href="services.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-settings-gear-65 light-text-still text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Services</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="notifications.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-notification-70 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Notifications</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="chat.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-chat-round text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Chat</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="profile.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Profile</span>
            </a>
          </li>
          <li class="nav-item my-1">
            <a class="nav-link " href="sign-up.php">
              <div
                class="icon icon-shape icon-sm border-radius-md bg-none text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-copy-04 text-sm light-text-still opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1 light-text-still">Sign up</span>
            </a>
          </li>
      </ul>
    </div>

  </aside>

  <main class="main-content position-relative" id="main">
    <!--<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>-->
    <header class="header-newtheme mx-4">
      <div class="top-content d-flex justify-content-between">
        <div class="greting-msg text-start light-text-still">
          <div class="sidenav-header">
            <a class="navbar-brand m-0 py-0" href="index.php " target="_blank">
              <img src="./assets/img/wavelogo.png" class="navbar-brand-img h-100" alt="main_logo">
              <span class=" font-weight-bold h3 brandname light-text" style="margin-left: -10px;">WAVE </span>
            </a>
          </div>
        </div>

        <div class="d-flex gap-2 align-items-center">

          <div class="light-bg" style="border-radius: 25px; padding: 4px; display: flex; align-items: center; gap: 12px; ">

            <button type="button" class="shadow-none btn btn-block mb-0 dark-bg" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px; border-radius:25px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end light-text px-2 rounded lock-icon"
                href="index.php">Dashboard</a></button>
            <button type="button" class="shadow-none btn btn-block mb-0 " data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px; border-radius:25px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">Service</a></button>
            <button type="button" class=" shadow-none btn btn-block mb-0" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">About Us</a></button>
            <button type="button" class=" shadow-none btn btn-block mb-0" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">Contact us</a></button>
            <button type="button" class=" shadow-none btn btn-block mb-0 " data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">Post</a></button>
            <button type="button" class="shadow-none btn btn-block mb-0 " data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">Sales</a></button>
            <button type="button" class="shadow-none btn btn-block mb-0 " data-bs-toggle="modal" data-bs-target="#modal-default" style="padding:10px;"><a
                style="position: sticky;top: 1.25rem; cursor:pointer;font-size:18px;" class="text-end dark-text px-2 rounded lock-icon"
                href="index.php">Promotions</a></button>
          </div>

          <button type="button" class="btn btn-block mb-1 light-bg" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding: 10px;border-radius: 25px;"><a
              style="position: sticky;top: 1.25rem; cursor:pointer;" class="d-flex align-items-center  gap-1 text-end dark-text px-2 rounded "
              href="index.php"><i class="ni ni-settings dark-text" style="font-size: 20px;"></i> <span class="dark-text" style="font-size: 18px;font-weight:bold;">Setting</span></a></button>

          <button id="theme-toggle" class="theme-toggle-btn light-bg shadow-none btn btn-block mb-2" style="padding: 12px 8px;border-radius: 50%;">
            <a style="position: sticky;top: 1.25rem; cursor:pointer;"
              class="text-end dark-text pt-2 px-2 rounded lock-icon">
              <i id="theme-icon" class="fas fa-sun" style="font-size: 20px;color:orange;"></i>
            </a>
          </button>


          <button type="button" class="btn btn-block mb-1 light-bg" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding: 10px 6px;border-radius: 50%;"><a
              style="position: sticky;top: 1.25rem; cursor:pointer;" class="text-end light-text-still px-2 rounded lock-icon"
              href="index.php"><i class="ni ni-bell-55 dark-text" style="font-size: 20px;"></i></a></button>


          <button type="button" class="btn btn-block mb-1 light-bg" data-bs-toggle="modal" data-bs-target="#modal-default" style="padding: 10px 6px;border-radius: 50%;"><a
              style="position: sticky;top: 1.25rem; cursor:pointer;"
              class="text-end light-text pt-2 px-2 rounded lock-icon"><i class="ni ni-single-02 dark-text"
                style="font-size: 20px;"></i></a>
          </button>
        </div>
      </div>
      <!-- <hr class="bg-white mt-2"> -->
      <!-- <div class="bottom-content">
        <div class="company-name">
          <h4 class="light-text-still header-head"> London Wharf - Dashboard | <span class="current-datetime"
              id="currentDatetime"></span></h4>
        </div>
      </div> -->
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="modal-title-default">Password</h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" id="model_lock_form" enctype="multipart/form-data">
                <input type="hidden" name="user_id" class="user_id" value="">


                <div class="modal-body">
                  <p class="congi_name"></p>
                  <p class="cell_date"></p>

                  <!-- Dropdown Example -->
                  <div class="form-group">

                    <label for="">Password</label>
                    <input type="password" name="lock_password" class="lock_password form-control" value=""
                      style="height: 35px;"> <br>
                    <p class="lock_password_error"></p>


                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-gradient-primary">Save changes</button>
                  <button type="button" class="btn btn-link  ml-auto" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
          </div>

        </div>
      </div>
    </header>
    <!-- Navbar -->

    <!-- End Navbar -->

    <script>
      // document.addEventListener("DOMContentLoaded", function () {
      //   const themeToggleBtn = document.getElementById("theme-toggle");
      //   const themeIcon = document.getElementById("theme-icon");
      //   const sidenav = document.getElementById("sidenav-main");
      //   // const navbar = document.getElementsByClassName("nav_br");
      //   const navbar = document.getElementsByClassName("nav_br")[0];

      //   // Check localStorage for the current theme
      //   const currentTheme = localStorage.getItem("theme");

      //   // Apply the stored theme on page load
      //   if (currentTheme === "light") {
      //     sidenav.classList.remove("dark-bg");
      //     sidenav.classList.add("light-bg");
      //     navbar.classList.remove("dark-bg");
      //     navbar.classList.add("light-bg");
      //     themeIcon.classList.remove("fa-moon");
      //     themeIcon.classList.add("fa-sun");
      //   } else {
      //     sidenav.classList.remove("light-bg");
      //     sidenav.classList.add("dark-bg");
      //     themeIcon.classList.remove("fa-sun");
      //     themeIcon.classList.add("fa-moon");
      //   }

      //   // Add click event listener to toggle the theme
      //   themeToggleBtn.addEventListener("click", function () {
      //     if (sidenav.classList.contains("dark-bg")) {
      //       sidenav.classList.remove("dark-bg");
      //       sidenav.classList.add("light-bg");
      //       navbar.classList.remove("dark-bg");
      //       navbar.classList.add("light-bg");
      //       themeIcon.classList.remove("fa-moon");
      //       themeIcon.classList.add("fa-sun");
      //       localStorage.setItem("theme", "light");
      //     } else {
      //       sidenav.classList.remove("light-bg");
      //       sidenav.classList.add("dark-bg");
      //       navbar.classList.remove("light-bg");
      //       navbar.classList.add("dark-bg");
      //       themeIcon.classList.remove("fa-sun");
      //       themeIcon.classList.add("fa-moon");
      //       localStorage.setItem("theme", "dark");
      //     }
      //   });
      // });

      const toggleButton = document.querySelector('.theme-toggle-btn');
      const themeIcon = document.getElementById("theme-icon");
      const currentTheme = localStorage.getItem("theme");

      // Jab button pe click ho, theme toggle karna hai
      toggleButton.addEventListener('click', function() {
        // Sabhi elements ko select karo jinke paas light-bg ya dark-bg class hai
        const elements = document.querySelectorAll('.light-bg, .dark-bg');
        const txtElements = document.querySelectorAll('.light-text, .dark-text');
        const cont_bgclr = document.querySelectorAll('.light_cont_bg, .dark_cont_bg');
        const tableHeader = document.querySelector("table.fc-col-header");
        const tabltitle = document.querySelector(".fc .fc-toolbar-title");
        const dates = document.querySelectorAll("a.fc-daygrid-day-number");
        const tablelabels = document.querySelectorAll(".dataTable-dropdown label");

        


        elements.forEach((element) => {
          // Agar element ke paas light-bg class hai, to usse dark-bg mein change karo
          if (element.classList.contains('light-bg')) {
            element.classList.remove('light-bg');
            element.classList.add('dark-bg');
            themeIcon.classList.remove("fa-moon");
            themeIcon.classList.add("fa-sun");
            themeIcon.style.color = "orange";

            if (tableHeader) {
              tableHeader.style.background = "#242542"; // Dark mode background
            }
            if (tabltitle) {
              tabltitle.style.color = "#fff";
            }

            dates.forEach(date => {
              date.style.color = "#FEFEFE";
            });

            tablelabels.forEach(tablelabel => {
              tablelabel.style.color = "#fff";
            });

            updateChartLegendColor("#fff");


          } else if (element.classList.contains('dark-bg')) {
            // Agar element ke paas dark-bg class hai, to usse light-bg mein change karo
            element.classList.remove('dark-bg');
            element.classList.add('light-bg');
            themeIcon.classList.add("fa-moon");
            themeIcon.classList.remove("fa-sun");
            themeIcon.style.color = "white";

            if (tableHeader) {
              tableHeader.style.background = "#1A1A27"; // Light mode background
            }

            if (tabltitle) {
              tabltitle.style.color = "#1A1A27";
            }

            dates.forEach(date => {
              date.style.color = "#000";
            });

            tablelabels.forEach(tablelabel => {
              tablelabel.style.color = "#1A1A27";
            });

            updateChartLegendColor("#1A1A27");
          }
        });


        txtElements.forEach((textElement) => {
          if (textElement.classList.contains('light-text')) {
            textElement.classList.remove('light-text');
            textElement.classList.add('dark-text');
          } else if (textElement.classList.contains('dark-text')) {
            textElement.classList.remove('dark-text');
            textElement.classList.add('light-text');
          }
        });

        cont_bgclr.forEach((cont_bg) => {
          if (cont_bg.classList.contains('light_cont_bg')) {
            cont_bg.classList.remove('light_cont_bg');
            cont_bg.classList.add('dark_cont_bg');
          } else if (cont_bg.classList.contains('dark_cont_bg')) {
            cont_bg.classList.remove('dark_cont_bg');
            cont_bg.classList.add('light_cont_bg');
          }
        });

      });

      // Function to update Chart.js legend color
function updateChartLegendColor(color) {
    const chartInstance = Chart.getChart('halfCircleChart'); // Get the chart instance

    if (chartInstance) {
        chartInstance.options.plugins.legend.labels.color = color; // Update legend text color
        chartInstance.update(); // Apply changes
    }
}
    </script>


    <style>
      #chartdiv {
        width: 100%;
        height: 580px;
      }
    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

    <!-- Chart code -->
    <script>
      am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
          am5themes_Animated.new(root)
        ]);

        // Create the map chart
        // https://www.amcharts.com/docs/v5/charts/map-chart/
        var chart = root.container.children.push(
          am5map.MapChart.new(root, {
            panX: "rotateX",
            panY: "translateY",
            projection: am5map.geoMercator(),
          })
        );

        var zoomControl = chart.set("zoomControl", am5map.ZoomControl.new(root, {}));
        zoomControl.homeButton.set("visible", true);


        // Create main polygon series for countries
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-polygon-series/
        var polygonSeries = chart.series.push(
          am5map.MapPolygonSeries.new(root, {
            geoJSON: am5geodata_worldLow,
            exclude: ["AQ"]
          })
        );

        polygonSeries.mapPolygons.template.setAll({
          fill: am5.color(0xdadada)
        });


        // Create point series for markers
        // https://www.amcharts.com/docs/v5/charts/map-chart/map-point-series/
        var pointSeries = chart.series.push(am5map.ClusteredPointSeries.new(root, {}));


        // Set clustered bullet
        // https://www.amcharts.com/docs/v5/charts/map-chart/clustered-point-series/#Group_bullet
        pointSeries.set("clusteredBullet", function(root) {
          var container = am5.Container.new(root, {
            cursorOverStyle: "pointer"
          });

          var circle1 = container.children.push(am5.Circle.new(root, {
            radius: 8,
            tooltipY: 0,
            fill: am5.color(0xff8c00)
          }));

          var circle2 = container.children.push(am5.Circle.new(root, {
            radius: 12,
            fillOpacity: 0.3,
            tooltipY: 0,
            fill: am5.color(0xff8c00)
          }));

          var circle3 = container.children.push(am5.Circle.new(root, {
            radius: 16,
            fillOpacity: 0.3,
            tooltipY: 0,
            fill: am5.color(0xff8c00)
          }));

          var label = container.children.push(am5.Label.new(root, {
            centerX: am5.p50,
            centerY: am5.p50,
            fill: am5.color(0xffffff),
            populateText: true,
            fontSize: "8",
            text: "{value}"
          }));

          container.events.on("click", function(e) {
            pointSeries.zoomToCluster(e.target.dataItem);
          });

          return am5.Bullet.new(root, {
            sprite: container
          });
        });

        // Create regular bullets
        pointSeries.bullets.push(function() {
          var circle = am5.Circle.new(root, {
            radius: 6,
            tooltipY: 0,
            fill: am5.color(0xff8c00),
            tooltipText: "{title}"
          });

          return am5.Bullet.new(root, {
            sprite: circle
          });
        });


        // Set data
        var cities = [{
            title: "Vienna",
            latitude: 48.2092,
            longitude: 16.3728
          },
          {
            title: "Minsk",
            latitude: 53.9678,
            longitude: 27.5766
          },
          {
            title: "Brussels",
            latitude: 50.8371,
            longitude: 4.3676
          },
          {
            title: "Sarajevo",
            latitude: 43.8608,
            longitude: 18.4214
          },
          {
            title: "Sofia",
            latitude: 42.7105,
            longitude: 23.3238
          },
          {
            title: "Zagreb",
            latitude: 45.815,
            longitude: 15.9785
          },
          {
            title: "Pristina",
            latitude: 42.666667,
            longitude: 21.166667
          },
          {
            title: "Prague",
            latitude: 50.0878,
            longitude: 14.4205
          },
          {
            title: "Copenhagen",
            latitude: 55.6763,
            longitude: 12.5681
          },
          {
            title: "Tallinn",
            latitude: 59.4389,
            longitude: 24.7545
          },
          {
            title: "Helsinki",
            latitude: 60.1699,
            longitude: 24.9384
          },
          {
            title: "Paris",
            latitude: 48.8567,
            longitude: 2.351
          },
          {
            title: "Berlin",
            latitude: 52.5235,
            longitude: 13.4115
          },
          {
            title: "Athens",
            latitude: 37.9792,
            longitude: 23.7166
          },
          {
            title: "Budapest",
            latitude: 47.4984,
            longitude: 19.0408
          },
          {
            title: "Reykjavik",
            latitude: 64.1353,
            longitude: -21.8952
          },
          {
            title: "Dublin",
            latitude: 53.3441,
            longitude: -6.2675
          },
          {
            title: "Rome",
            latitude: 41.8955,
            longitude: 12.4823
          },
          {
            title: "Riga",
            latitude: 56.9465,
            longitude: 24.1049
          },
          {
            title: "Vaduz",
            latitude: 47.1411,
            longitude: 9.5215
          },
          {
            title: "Vilnius",
            latitude: 54.6896,
            longitude: 25.2799
          },
          {
            title: "Luxembourg",
            latitude: 49.61,
            longitude: 6.1296
          },
          {
            title: "Skopje",
            latitude: 42.0024,
            longitude: 21.4361
          },
          {
            title: "Valletta",
            latitude: 35.9042,
            longitude: 14.5189
          },
          {
            title: "Chisinau",
            latitude: 47.0167,
            longitude: 28.8497
          },
          {
            title: "Monaco",
            latitude: 43.7325,
            longitude: 7.4189
          },
          {
            title: "Podgorica",
            latitude: 42.4602,
            longitude: 19.2595
          },
          {
            title: "Amsterdam",
            latitude: 52.3738,
            longitude: 4.891
          },
          {
            title: "Oslo",
            latitude: 59.9138,
            longitude: 10.7387
          },
          {
            title: "Warsaw",
            latitude: 52.2297,
            longitude: 21.0122
          },
          {
            title: "Lisbon",
            latitude: 38.7072,
            longitude: -9.1355
          },
          {
            title: "Bucharest",
            latitude: 44.4479,
            longitude: 26.0979
          },
          {
            title: "Moscow",
            latitude: 55.7558,
            longitude: 37.6176
          },
          {
            title: "San Marino",
            latitude: 43.9424,
            longitude: 12.4578
          },
          {
            title: "Belgrade",
            latitude: 44.8048,
            longitude: 20.4781
          },
          {
            title: "Bratislava",
            latitude: 48.2116,
            longitude: 17.1547
          },
          {
            title: "Ljubljana",
            latitude: 46.0514,
            longitude: 14.506
          },
          {
            title: "Madrid",
            latitude: 40.4167,
            longitude: -3.7033
          },
          {
            title: "Stockholm",
            latitude: 59.3328,
            longitude: 18.0645
          },
          {
            title: "Bern",
            latitude: 46.948,
            longitude: 7.4481
          },
          {
            title: "Kiev",
            latitude: 50.4422,
            longitude: 30.5367
          },
          {
            title: "London",
            latitude: 51.5002,
            longitude: -0.1262
          },
          {
            title: "Gibraltar",
            latitude: 36.1377,
            longitude: -5.3453
          },
          {
            title: "Saint Peter Port",
            latitude: 49.466,
            longitude: -2.5522
          },
          {
            title: "Douglas",
            latitude: 54.167,
            longitude: -4.4821
          },
          {
            title: "Saint Helier",
            latitude: 49.1919,
            longitude: -2.1071
          },
          {
            title: "Longyearbyen",
            latitude: 78.2186,
            longitude: 15.6488
          },
          {
            title: "Kabul",
            latitude: 34.5155,
            longitude: 69.1952
          },
          {
            title: "Yerevan",
            latitude: 40.1596,
            longitude: 44.509
          },
          {
            title: "Baku",
            latitude: 40.3834,
            longitude: 49.8932
          },
          {
            title: "Manama",
            latitude: 26.1921,
            longitude: 50.5354
          },
          {
            title: "Dhaka",
            latitude: 23.7106,
            longitude: 90.3978
          },
          {
            title: "Thimphu",
            latitude: 27.4405,
            longitude: 89.673
          },
          {
            title: "Bandar Seri Begawan",
            latitude: 4.9431,
            longitude: 114.9425
          },
          {
            title: "Phnom Penh",
            latitude: 11.5434,
            longitude: 104.8984
          },
          {
            title: "Peking",
            latitude: 39.9056,
            longitude: 116.3958
          },
          {
            title: "Nicosia",
            latitude: 35.1676,
            longitude: 33.3736
          },
          {
            title: "T'bilisi",
            latitude: 41.701,
            longitude: 44.793
          },
          {
            title: "New Delhi",
            latitude: 28.6353,
            longitude: 77.225
          },
          {
            title: "Jakarta",
            latitude: -6.1862,
            longitude: 106.8063
          },
          {
            title: "Teheran",
            latitude: 35.7061,
            longitude: 51.4358
          },
          {
            title: "Baghdad",
            latitude: 33.3157,
            longitude: 44.3922
          },
          {
            title: "Jerusalem",
            latitude: 31.76,
            longitude: 35.17
          },
          {
            title: "Tokyo",
            latitude: 35.6785,
            longitude: 139.6823
          },
          {
            title: "Amman",
            latitude: 31.9394,
            longitude: 35.9349
          },
          {
            title: "Astana",
            latitude: 51.1796,
            longitude: 71.4475
          },
          {
            title: "Kuwait",
            latitude: 29.3721,
            longitude: 47.9824
          },
          {
            title: "Bishkek",
            latitude: 42.8679,
            longitude: 74.5984
          },
          {
            title: "Vientiane",
            latitude: 17.9689,
            longitude: 102.6137
          },
          {
            title: "Beyrouth / Beirut",
            latitude: 33.8872,
            longitude: 35.5134
          },
          {
            title: "Kuala Lumpur",
            latitude: 3.1502,
            longitude: 101.7077
          },
          {
            title: "Ulan Bator",
            latitude: 47.9138,
            longitude: 106.922
          },
          {
            title: "Pyinmana",
            latitude: 19.7378,
            longitude: 96.2083
          },
          {
            title: "Kathmandu",
            latitude: 27.7058,
            longitude: 85.3157
          },
          {
            title: "Muscat",
            latitude: 23.6086,
            longitude: 58.5922
          },
          {
            title: "Islamabad",
            latitude: 33.6751,
            longitude: 73.0946
          },
          {
            title: "Manila",
            latitude: 14.579,
            longitude: 120.9726
          },
          {
            title: "Doha",
            latitude: 25.2948,
            longitude: 51.5082
          },
          {
            title: "Riyadh",
            latitude: 24.6748,
            longitude: 46.6977
          },
          {
            title: "Singapore",
            latitude: 1.2894,
            longitude: 103.85
          },
          {
            title: "Seoul",
            latitude: 37.5139,
            longitude: 126.9828
          },
          {
            title: "Colombo",
            latitude: 6.9155,
            longitude: 79.8572
          },
          {
            title: "Damascus",
            latitude: 33.5158,
            longitude: 36.2939
          },
          {
            title: "Taipei",
            latitude: 25.0338,
            longitude: 121.5645
          },
          {
            title: "Dushanbe",
            latitude: 38.5737,
            longitude: 68.7738
          },
          {
            title: "Bangkok",
            latitude: 13.7573,
            longitude: 100.502
          },
          {
            title: "Dili",
            latitude: -8.5662,
            longitude: 125.588
          },
          {
            title: "Ankara",
            latitude: 39.9439,
            longitude: 32.856
          },
          {
            title: "Ashgabat",
            latitude: 37.9509,
            longitude: 58.3794
          },
          {
            title: "Abu Dhabi",
            latitude: 24.4764,
            longitude: 54.3705
          },
          {
            title: "Tashkent",
            latitude: 41.3193,
            longitude: 69.2481
          },
          {
            title: "Hanoi",
            latitude: 21.0341,
            longitude: 105.8372
          },
          {
            title: "Sanaa",
            latitude: 15.3556,
            longitude: 44.2081
          },
          {
            title: "Buenos Aires",
            latitude: -34.6118,
            longitude: -58.4173
          },
          {
            title: "Bridgetown",
            latitude: 13.0935,
            longitude: -59.6105
          },
          {
            title: "Belmopan",
            latitude: 17.2534,
            longitude: -88.7713
          },
          {
            title: "Sucre",
            latitude: -19.0421,
            longitude: -65.2559
          },
          {
            title: "Brasilia",
            latitude: -15.7801,
            longitude: -47.9292
          },
          {
            title: "Ottawa",
            latitude: 45.4235,
            longitude: -75.6979
          },
          {
            title: "Santiago",
            latitude: -33.4691,
            longitude: -70.642
          },
          {
            title: "Bogota",
            latitude: 4.6473,
            longitude: -74.0962
          },
          {
            title: "San Jose",
            latitude: 9.9402,
            longitude: -84.1002
          },
          {
            title: "Havana",
            latitude: 23.1333,
            longitude: -82.3667
          },
          {
            title: "Roseau",
            latitude: 15.2976,
            longitude: -61.39
          },
          {
            title: "Santo Domingo",
            latitude: 18.479,
            longitude: -69.8908
          },
          {
            title: "Quito",
            latitude: -0.2295,
            longitude: -78.5243
          },
          {
            title: "San Salvador",
            latitude: 13.7034,
            longitude: -89.2073
          },
          {
            title: "Guatemala",
            latitude: 14.6248,
            longitude: -90.5328
          },
          {
            title: "Ciudad de Mexico",
            latitude: 19.4271,
            longitude: -99.1276
          },
          {
            title: "Managua",
            latitude: 12.1475,
            longitude: -86.2734
          },
          {
            title: "Panama",
            latitude: 8.9943,
            longitude: -79.5188
          },
          {
            title: "Asuncion",
            latitude: -25.3005,
            longitude: -57.6362
          },
          {
            title: "Lima",
            latitude: -12.0931,
            longitude: -77.0465
          },
          {
            title: "Castries",
            latitude: 13.9972,
            longitude: -60.0018
          },
          {
            title: "Paramaribo",
            latitude: 5.8232,
            longitude: -55.1679
          },
          {
            title: "Washington D.C.",
            latitude: 38.8921,
            longitude: -77.0241
          },
          {
            title: "Montevideo",
            latitude: -34.8941,
            longitude: -56.0675
          },
          {
            title: "Caracas",
            latitude: 10.4961,
            longitude: -66.8983
          },
          {
            title: "Oranjestad",
            latitude: 12.5246,
            longitude: -70.0265
          },
          {
            title: "Cayenne",
            latitude: 4.9346,
            longitude: -52.3303
          },
          {
            title: "Plymouth",
            latitude: 16.6802,
            longitude: -62.2014
          },
          {
            title: "San Juan",
            latitude: 18.45,
            longitude: -66.0667
          },
          {
            title: "Algiers",
            latitude: 36.7755,
            longitude: 3.0597
          },
          {
            title: "Luanda",
            latitude: -8.8159,
            longitude: 13.2306
          },
          {
            title: "Porto-Novo",
            latitude: 6.4779,
            longitude: 2.6323
          },
          {
            title: "Gaborone",
            latitude: -24.657,
            longitude: 25.9089
          },
          {
            title: "Ouagadougou",
            latitude: 12.3569,
            longitude: -1.5352
          },
          {
            title: "Bujumbura",
            latitude: -3.3818,
            longitude: 29.3622
          },
          {
            title: "Yaounde",
            latitude: 3.8612,
            longitude: 11.5217
          },
          {
            title: "Bangui",
            latitude: 4.3621,
            longitude: 18.5873
          },
          {
            title: "Brazzaville",
            latitude: -4.2767,
            longitude: 15.2662
          },
          {
            title: "Kinshasa",
            latitude: -4.3369,
            longitude: 15.3271
          },
          {
            title: "Yamoussoukro",
            latitude: 6.8067,
            longitude: -5.2728
          },
          {
            title: "Djibouti",
            latitude: 11.5806,
            longitude: 43.1425
          },
          {
            title: "Cairo",
            latitude: 30.0571,
            longitude: 31.2272
          },
          {
            title: "Asmara",
            latitude: 15.3315,
            longitude: 38.9183
          },
          {
            title: "Addis Abeba",
            latitude: 9.0084,
            longitude: 38.7575
          },
          {
            title: "Libreville",
            latitude: 0.3858,
            longitude: 9.4496
          },
          {
            title: "Banjul",
            latitude: 13.4399,
            longitude: -16.6775
          },
          {
            title: "Accra",
            latitude: 5.5401,
            longitude: -0.2074
          },
          {
            title: "Conakry",
            latitude: 9.537,
            longitude: -13.6785
          },
          {
            title: "Bissau",
            latitude: 11.8598,
            longitude: -15.5875
          },
          {
            title: "Nairobi",
            latitude: -1.2762,
            longitude: 36.7965
          },
          {
            title: "Maseru",
            latitude: -29.2976,
            longitude: 27.4854
          },
          {
            title: "Monrovia",
            latitude: 6.3106,
            longitude: -10.8047
          },
          {
            title: "Tripoli",
            latitude: 32.883,
            longitude: 13.1897
          },
          {
            title: "Antananarivo",
            latitude: -18.9201,
            longitude: 47.5237
          },
          {
            title: "Lilongwe",
            latitude: -13.9899,
            longitude: 33.7703
          },
          {
            title: "Bamako",
            latitude: 12.653,
            longitude: -7.9864
          },
          {
            title: "Nouakchott",
            latitude: 18.0669,
            longitude: -15.99
          },
          {
            title: "Port Louis",
            latitude: -20.1654,
            longitude: 57.4896
          },
          {
            title: "Rabat",
            latitude: 33.9905,
            longitude: -6.8704
          },
          {
            title: "Maputo",
            latitude: -25.9686,
            longitude: 32.5804
          },
          {
            title: "Windhoek",
            latitude: -22.5749,
            longitude: 17.0805
          },
          {
            title: "Niamey",
            latitude: 13.5164,
            longitude: 2.1157
          },
          {
            title: "Abuja",
            latitude: 9.058,
            longitude: 7.4891
          },
          {
            title: "Kigali",
            latitude: -1.9441,
            longitude: 30.0619
          },
          {
            title: "Dakar",
            latitude: 14.6953,
            longitude: -17.4439
          },
          {
            title: "Freetown",
            latitude: 8.4697,
            longitude: -13.2659
          },
          {
            title: "Mogadishu",
            latitude: 2.0411,
            longitude: 45.3426
          },
          {
            title: "Pretoria",
            latitude: -25.7463,
            longitude: 28.1876
          },
          {
            title: "Mbabane",
            latitude: -26.3186,
            longitude: 31.141
          },
          {
            title: "Dodoma",
            latitude: -6.167,
            longitude: 35.7497
          },
          {
            title: "Lome",
            latitude: 6.1228,
            longitude: 1.2255
          },
          {
            title: "Tunis",
            latitude: 36.8117,
            longitude: 10.1761
          }
        ];

        for (var i = 0; i < cities.length; i++) {
          var city = cities[i];
          addCity(city.longitude, city.latitude, city.title);
        }

        function addCity(longitude, latitude, title) {
          pointSeries.data.push({
            geometry: {
              type: "Point",
              coordinates: [longitude, latitude]
            },
            title: title
          });
        }

        // Make stuff animate on load
        chart.appear(1000, 100);

      }); // end am5.ready()
    </script>

    <!-- HTML -->