
<?php
// we can also include it like this:
// include "./queries/get_all_students.php";

include __DIR__."\queries\get_all_students.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tahidi High - School</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
<body>

  <!-- topbar -->
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MEWA</a>
      <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Log out</a>
        </li>
      </ul>
  </nav>

  
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="../">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./">
                  <span data-feather="users"></span>
                  Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teachers/">
                  <span data-feather="users"></span>
                  Teachers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Classes
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Subjects
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Results
                </a>
              </li>

            </ul>

          </div>
        </nav>
      
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1>Student Dashboard.</h1>
            <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
              Add Student
            </a>
         
          </div>

          <p> <em> This is the student dashboard page. To see all students in the school .</em></p>


          <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <div class="form mb-3">
                <form method="post" action="add_new_students.php">
                    <div class="row mb-2">
                        <!-- for student name: -->
                      <div class="col-sm-6">
                        <label for="studentName">Student Name:</label>
                        <input type="text" id="studentName" name="studentName" class="form-control">
                      </div>
                      <!-- for admission number -->
                      <div class="col-sm-6">
                        <label for="admNo">Admission Number:</label>
                        <input type="text" id="admNo" name="admNo" class="form-control">
                      </div>
                    </div>
                    <div class="btn-group">
                      <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </div>
              </form>
            </div>
          </div>
        </div>
          
      
          <hr class="my-3">

          <h6>All the students in the school</h6>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                <th>Student Name</th>
                <th>Adm No</th>
                <tH>Gender</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    
                  foreach($result as $r){
                    echo "<tr>";
                    echo "<td>" . $r['name'] . "</td>";
                    echo "<td>" . $r['id'] . "</td>";
                    echo "<td>" . $r['gender'] . "</td>";
                    echo "<td>" . $r['DoB'] . "</td>";
                    echo "<td>" . $r['phoneNumber'] . "</td>";
                    echo "</tr>";
                }

                ?>
              </tbody>
            </table>
          </div>
        </main>
      

      </div>

  </div>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>


</body>
</html>






