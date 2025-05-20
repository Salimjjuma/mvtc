
<?php
// we can also include it like this:
// include "./queries/get_all_students.php";

include __DIR__."\queries\get_all_students.php";

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once __DIR__ . "/../includes/header.html"; ?>
<body>

  <!-- topbar -->
  <?php require_once __DIR__ . "/../includes/topbar.html"; ?>

  
    <div class="container-fluid">
      <div class="row">
        
      <?php require_once __DIR__ . "/../includes/sidebar.html"; ?>
      
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






