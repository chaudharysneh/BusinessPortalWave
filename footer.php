<footer class="footer py-2">
  <div class="container-fluid">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="copyright text-center text-sm text-muted text-lg-start">Copyright
          © <script>
            document.write(new Date().getFullYear())
          </script>
          All Rights Reserved.
        </div>
      </div>
      <!--       <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div> -->
    </div>
  </div>
</footer>
</div>
</main>

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="./assets/js/plugins/chartjs.min.js"></script>
<script src="./assets/js/plugins/datatables.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
<script>
  function updateDateTime() {
    const date = new Date();
    const options = {
      day: '2-digit',
      month: '2-digit',
      year: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit',
      hour12: false
    };
    const formattedDateTime = date.toLocaleString('en-GB', options).replace(',', '');
    document.getElementById('currentDatetime').textContent = formattedDateTime;
  }

  // Update the time every second
  setInterval(updateDateTime, 1000);

  // Initial call to display time immediately when the page loads
  updateDateTime();
</script>
<script src="../../assets/js/plugins/fullcalendar.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: "dayGridMonth",
      headerToolbar: {
        start: 'title',
        center: '',
        end: 'addEventButton today prev,next'
      },
      customButtons: {
      addEventButton: {
        text: '+ Add Event', // Button label
        click: function() {
          let title = prompt("Enter event title:");
          let date = prompt("Enter event date (YYYY-MM-DD):");

          if (title && date) {
            calendar.addEvent({
              title: title,
              start: date,
              className: 'bg-gradient-primary'
            });
            alert("Event added successfully!");
          } else {
            alert("Invalid input. Please enter both title and date.");
          }
        }
      }
    },
      selectable: true,
      editable: true,
      initialDate: '2025-12-01',
      events: [{
          title: 'Call with Dave',
          start: '2025-11-18',
          end: '2025-11-18',
          className: 'bg-gradient-danger'
        },
        {
          title: 'Lunch meeting',
          start: '2025-11-21',
          end: '2025-11-22',
          className: 'bg-gradient-warning'
        },
        {
          title: 'All day conference',
          start: '2025-11-29',
          end: '2025-11-29',
          className: 'bg-gradient-success'
        },
        {
          title: 'Meeting with Mary',
          start: '2025-12-01',
          end: '2025-12-01',
          className: 'bg-gradient-info'
        },
        {
          title: 'Winter Hackathon',
          start: '2025-12-03',
          end: '2025-12-03',
          className: 'bg-gradient-danger'
        },
        {
          title: 'Digital event',
          start: '2025-12-07',
          end: '2025-12-09',
          className: 'bg-gradient-warning'
        },
        {
          title: 'Marketing event',
          start: '2025-12-10',
          end: '2025-12-10',
          className: 'bg-gradient-primary'
        },
        {
          title: 'Dinner with Family',
          start: '2025-12-19',
          end: '2025-12-19',
          className: 'bg-gradient-danger'
        },
        {
          title: 'Black Friday',
          start: '2025-12-23',
          end: '2025-12-23',
          className: 'bg-gradient-info'
        },
        {
          title: 'Cyber Week',
          start: '2025-12-02',
          end: '2025-12-02',
          className: 'bg-gradient-warning'
        }
      ],
      views: {
        month: {
          titleFormat: {
            month: "long",
            year: "numeric"
          }
        },
        agendaWeek: {
          titleFormat: {
            month: "long",
            year: "numeric",
            day: "numeric"
          }
        },
        agendaDay: {
          titleFormat: {
            month: "short",
            year: "numeric",
            day: "numeric"
          }
        }
      }
    });

    calendar.render();
  });
</script>

<script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>