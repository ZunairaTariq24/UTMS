<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
  }

  .sidebar {
    width: 220px;
    min-height: 100vh;
    background-color: rgb(60, 99, 72);
    transition: width 0.3s;
    position: fixed;
    left: 0;
    top: 0;
    overflow-y: auto;
    z-index: 1000;
    padding-top: 1rem;
    color: white;
    text-align: center;
  }

  .sidebar.collapsed {
    width: 60px;
  }

  .sidebar a,
  .sidebar .dropdown-toggle {
    color: white;
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    text-align: left;
  }

  .sidebar .dropdown-menu {
    background-color: rgb(60, 99, 72);
  }

  .sidebar .dropdown-item {
    color: white;
  }

  .sidebar .dropdown-item:hover {
    background-color: rgb(60, 99, 72);
  }

  .fjwu-logo {
    width: 80px;
    height: auto;
    border: 1px solid black;
    margin-bottom: 10px;
  }

  .sidebar-title {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 0;
  }

  .sidebar-subtitle {
    font-size: 12px;
    color: #e0e0e0;
    margin-bottom: 1rem;
  }

  .content-wrapper {
    margin-left: 220px;
    padding: 20px;
    width: 100%;
    transition: margin-left 0.3s;
  }

  .collapsed ~ .content-wrapper {
    margin-left: 60px;
  }

  .toggle-btn {
    position: fixed;
    top: 10px;
    left: 230px;
    background-color: rgb(60, 99, 72);
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    z-index: 1100;
    transition: left 0.3s;
  }

  .sidebar.collapsed + .toggle-btn {
    left: 70px;
  }
</style>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
 
       <a href="/university_transport/index.php">
  <img src="https://www.awb-usf.org/wp-content/uploads/2021/03/Fatima-Jinnah-Women-University-logo.png" class="fjwu-logo">
</a>

  <div class="sidebar-title">FJWU</div>
  <div class="sidebar-subtitle">University Transport Management System</div>

  <ul class="nav flex-column">
    <!-- Drivers -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="driversDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Drivers
      </a>
      <ul class="dropdown-menu" aria-labelledby="driversDropdown">
        <li><a class="dropdown-item" href="/university_transport/drivers/list_drivers.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/drivers/add_driver.php">Add</a></li>
        <li><a class="dropdown-item" href="/university_transport/drivers/search_driver.php">Search</a></li>
      </ul>
    </li>

    <!-- Buses -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="busesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Buses
      </a>
      <ul class="dropdown-menu" aria-labelledby="busesDropdown">
        <li><a class="dropdown-item" href="/university_transport/buses/list_buses.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/buses/add_bus.php">Add</a></li>
      </ul>
    </li>

    <!-- Routes -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="routesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Routes
      </a>
      <ul class="dropdown-menu" aria-labelledby="routesDropdown">
        <li><a class="dropdown-item" href="/university_transport/routes/list_routes.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/routes/add_route.php">Add</a></li>
      </ul>
    </li>

    <!-- Stops -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="stopsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Stops
      </a>
      <ul class="dropdown-menu" aria-labelledby="stopsDropdown">
        <li><a class="dropdown-item" href="/university_transport/stops/list_stop.php">List</a></li>
      </ul>
    </li>

    <!-- Students -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="studentsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Students
      </a>
      <ul class="dropdown-menu" aria-labelledby="studentsDropdown">
        <li><a class="dropdown-item" href="/university_transport/students/list_students.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/students/add_student.php">Add</a></li>
      </ul>
    </li>

    <!-- Payments -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="paymentsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Payments
      </a>
      <ul class="dropdown-menu" aria-labelledby="paymentsDropdown">
        <li><a class="dropdown-item" href="/university_transport/payments/list_payments.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/payments/add_payment.php">Add</a></li>
      </ul>
    </li>

    <!-- Attendance -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="attendanceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Attendance
      </a>
      <ul class="dropdown-menu" aria-labelledby="attendanceDropdown">
        <li><a class="dropdown-item" href="/university_transport/attendance/list_attendance.php">List</a></li>
        <li><a class="dropdown-item" href="/university_transport/attendance/add_attendance.php">Mark</a></li>
      </ul>
    </li>

    <!-- Medical Record -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="medicalDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Medical Record
      </a>
      <ul class="dropdown-menu" aria-labelledby="medicalDropdown">
        <li><a class="dropdown-item" href="/university_transport/medical_record/add_medical.php">Mark</a></li>
        <li><a class="dropdown-item" href="/university_transport/medical_record/driver_medical.php">List</a></li>
      </ul>
    </li>
  </ul>
</div>

<!-- Toggle Button -->
<button class="toggle-btn" onclick="toggleSidebar()">☰</button>

<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const contentWrapper = document.querySelector('.content-wrapper');
    sidebar.classList.toggle('collapsed');
    if (contentWrapper) {
      contentWrapper.classList.toggle('collapsed');
    }
  }
</script>

<!-- Start of content wrapper -->
<div class="content-wrapper">



