
<?php
include 'config.php';
include 'navbar.php';  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Cards</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/university_transport/styles.css">
</head>
<body>
<div class="container py-5">
  <div class="row g-4">
 <!-- Driver -->
  <div class="col-md-4">
  <a href="drivers/list_drivers.php" class="text-decoration-none text-dark">
    <div class="card">
      <img src="https://previews.123rf.com/images/ferli/ferli2104/ferli210400761/167645000-a-male-bus-driver-in-blue-uniform-is-driving-the-bus.jpg" class="card-img-top" alt="Driver">
      <div class="card-body text-center">
        <h5 class="card-title">Drivers</h5>
      </div>
    </div>
  </a>
</div>


    <!-- Buses -->
    <div class="col-md-4">
        <a href="buses/list_buses.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4OTgHQCMSAXWhqg_-lv09qNRDqcWFgJOyDg&s" class="card-img-top" alt="Buses">
        <div class="card-body text-center">
          <h5 class="card-title">Buses</h5>
        </div>
      </div>
      </a>
    </div>

    <!-- Routes -->
    <div class="col-md-4">
        <a href="routes/list_routes.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQaoQwf5wNoZAFIPXP7e77hKuKw7r_Z4BHbLQ&s" class="card-img-top" alt="Routes">
        <div class="card-body text-center">
          <h5 class="card-title">Routes</h5>
        </div>
      </div>
      </a>
    </div>

    <!-- Bus Stop -->
    <div class="col-md-4">
        <a href="stops/list_stops.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://councilmagazine.com.au/wp-content/uploads/2021/10/New-Strathfield-bus-shelter-oOhmedia.jpg" class="card-img-top" alt="Bus Stop">
        <div class="card-body text-center">
          <h5 class="card-title">Bus Stops</h5>
        </div>
      </div>
      </a>
    </div>

    <!-- Student -->
    <div class="col-md-4">
        <a href="students/list_students.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://media.istockphoto.com/id/1477778394/photo/female-college-or-university-student-outside-campus-building-wearing-wireless-headphones.jpg?s=612x612&w=0&k=20&c=T87ntIJbjjUc33Xy-TvrDvHxroRti1VTQlijGVuH--U=" class="card-img-top" alt="Student">
        <div class="card-body text-center">
          <h5 class="card-title">Students</h5>
        </div>
      </div>
      </a>
    </div>

    <!-- Payments -->
    <div class="col-md-4">
        <a href="payments/list_payments.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjDbISULuWcAmVknicUolYeeTbalStNonGQHCTsLTfeeS8w0AgvpaIk1KNdUxcI0kBbqc&usqp=CAU" class="card-img-top" alt="Payments">
        <div class="card-body text-center">
          <h5 class="card-title">Payments</h5>
        </div>
      </div>
      </a>
    </div>

    <!-- Attendance -->
    <div class="col-md-4">
        <a href="attendance/list_attendance.php" class="text-decoration-none text-dark">
      <div class="card">
        <img src="https://thumbs.dreamstime.com/b/attendance-speech-bubble-white-background-vector-illustration-141014253.jpg" class="card-img-top" alt="Attendance">
        <div class="card-body text-center">
          <h5 class="card-title">Attendance</h5>
        </div>
      </div>
      </a>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
