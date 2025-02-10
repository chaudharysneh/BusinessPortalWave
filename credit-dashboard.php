<?php include 'header.php'; ?>

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
<!-- <div class="container-fluid py-4" style="background-color: #000000e0;"> -->
<div class="container-fluid py-4 dark_cont_bg">

    <div class="row mt-4">
        <div class="col-lg-9 mb-lg-0 mb-4">
            <div class="card dark-bg" style="border-radius: 17px;">
                <div class="card-header dark-bg-still py-2">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h4 class="mb-0 heading-left light-text-still py-1">Credit Acquisition Reports</h4>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="Chart1" style="width: 100%; height: 435px; margin-left: -35px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <!-- <div class="card-style mb-30"> -->
            <div class="card mb-4 dark-bg"
                style="border-radius: 17px;">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase light-text font-weight-bold">Credit balance</p>
                                <h5 class="font-weight-bolder light-text">
                                    30$
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape shadow-lg light-bg text-center rounded-circle">
                                <i class="fa-regular fa-credit-card dark-text text-lg opacity-10"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card dark-bg mb-4" style="border-radius: 15px;">
                <div class="card-header pb-0 pt-3 dark-bg-still">
                    <h4 class="text-capitalize light-text-still">Limits</h4>
                </div>
                <div class="card-body p-3 pt-1">
                    <div class="chart">
                        <div id="doughnutChart1" style="width: 350px; height: 333px"></div>
                    </div>
                </div>
            </div>
            <!-- =============== -->
        </div>
    </div>

    <div class="row mt-4">
      
        <div class="col-lg-6">
            <div class="card " style="border-radius: 17px;">
                <div class="card-header dark-bg py-2">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h4 class="mb-0 heading-left text-light">History</h4>
                        <div class="btn-right d-flex flex-row gap-2"> <button class="d-flex align-items-center font-pop btn btn-light dark-text ms-auto mb-0"><i class="fa fa-eye"></i>&nbsp;&nbsp;View All</button>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="bill d-flex justify-content-between">
                        <h6 class="mb-0">
                            <div class="status bg-actor"></div>
                            <a href="chat.php">
                                <span class="dark-text">Lorem ipsum dolor sit amet.</span> </a>
                        </h6>
                        <div class="text-danger fw-bold">-20$</div>
                    </div>
                    <div class="bill d-flex justify-content-between">
                        <h6 class="mb-0">
                            <div class="status bg-actor"></div>
                            <a href="chat.php">
                                <span class="dark-text">Lorem ipsum dolor sit amet consectetur.</span> </a>
                        </h6>
                        <div class="text-danger fw-bold"> -12$</div>
                    </div>
                    <div class="bill d-flex justify-content-between">
                        <h6 class="mb-0">
                            <div class="status bg-actor"></div>
                            <a href="chat.php">
                                <span class="dark-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </a>
                        </h6>
                        <div class="text-success fw-bold"> +34$</div>
                    </div>
                    <div class="bill d-flex justify-content-between">
                        <h6 class="mb-0">
                            <div class="status bg-actor"></div>
                            <a href="chat.php">
                                <span class="dark-text">Lorem ipsum dolor sit amet consectetur adipisicing.</span> </a>
                        </h6>
                        <div class="text-danger fw-bold"> -2$</div>
                    </div>
                    <div class="bill d-flex justify-content-between">
                        <h6 class="mb-0">
                            <div class="status bg-actor"></div>
                            <a href="chat.php">
                                <span class="dark-text">Lorem ipsum dolor sit amet consectetur.</span> </a>
                        </h6>
                        <div class="text-danger fw-bold"> -8$</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card" style="border-radius: 17px;">
                <div class="card-header dark-bg py-2">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h4 class="mb-0 text-light py-1">Suggested Actions</h4>
                    </div>
                </div>
                <div class="card-body p-3 d-flex flex-column gap-3">
                    <div class="card shadow-sm border rounded-3 px-3 py-2 d-flex flex-row align-items-center gap-3">
                        <svg class="text-primary" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 10l9-6 9 6v8a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-4H9v4a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8z"></path>
                        </svg>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Boost Your Top-Performing Post</h6>
                            <p class="text-muted small mb-0">Increase visibility and engagement for just $5.</p>
                        </div>
                        <button class="btn btn-primary mb-0 px-4 py-2">Boost Now</button>
                    </div>

                    <!-- Card 2 -->
                    <div class="card shadow-sm border rounded-3 px-3 py-2 d-flex flex-row align-items-center gap-3">
                        <svg class="text-success" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12l2-2 4 4 8-8 2 2-10 10-6-6z"></path>
                        </svg>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Reach 1,000 More Customers</h6>
                            <p class="text-muted small mb-0">Promote your offers with a $10 credit.</p>
                        </div>
                        <button class="btn btn-primary mb-0 px-4 py-2">Promote Now</button>
                    </div>

                    <!-- card 3 -->
                    <div class="card shadow-sm border rounded-3 px-3 py-2 d-flex flex-row align-items-center gap-3">
                        <svg class="text-info" width="32" height="32" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 3h18v4H3V3zm0 6h18v4H3v-4zm0 6h18v4H3v-4z"></path>
                        </svg>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">View Analytics</h6>
                            <p class="text-muted small mb-0">Gain insights on your performance and engagement.</p>
                        </div>
                        <button class="btn btn-info mb-0 px-4 py-2">View Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

    <script>
        //============ doughnutChart1 start
        const doughnutChart1 = new ApexCharts(
            document.querySelector("#doughnutChart1"),
            (options = {
                series: [83, 67, 55, 44],
                chart: {
                    height: 350,
                    type: "radialBar",
                    fontFamily: "Plus Jakarta Sans",
                },

                plotOptions: {
                    radialBar: {
                        dataLabels: {
                            name: {
                                fontSize: "22px",
                            },
                            value: {
                                fontSize: "16px",
                            },
                            total: {
                                show: true,
                                label: "Total",
                                formatter: function(w) {
                                    return 249;
                                },
                            },
                        },
                        hollow: {
                            size: "40%",
                        },
                        track: {
                            strokeWidth: "100%",
                            margin: 10,
                        },
                    },
                },
                stroke: {
                    lineCap: "round",
                },
                labels: ["Desktop", "Tablet", "Mobile", "Others"],
                colors: ["#4a6cf7", "#f2994a", "#d50100", "#f7c800"],
            })
        );
        doughnutChart1.render();
        //============ doughnutChart1 end
    </script>


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
                    cubicInterpolationMode: "monotone",
                    tension: 0.4,
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