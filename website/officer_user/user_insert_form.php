
<!DOCTYPE html>
<html>
<head>

<title>User Insert</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

<!-- Begin Wrapper -->
<div id="wrapper">

  <!-- Begin Header -->
  <div id="header"><h1>Criminal Record Management System</h1></div>
  <!-- End Header -->

  <!-- Begin Navigation -->
  <div id="navigation">
    <button class="button button1" style="vertical-align:middle"><span><a href="../officer_menu.php">Officer Home</a></span></button>
    <button class="button button2" style="vertical-align:middle"><span><a href="../log_out.php">Log Out</a></span></button>
  </div>
  <!-- End Navigation -->

  <!-- Begin Faux Columns -->
  <div id="faux">

    <!-- Begin Left Column -->
    <div id="leftcolumn">

      <div class="column menu">
        <ul>

        </ul>
  </div>
    </div>
    <!-- End Left Column -->

    <!-- Begin Right Column -->
    <div id="rightcolumn">

      <h1> User Insert Choice </h1>
      <br><br>
      Fill the details given below :-
      <br><br>

      <div class="container">
        <form action="user_insert_data.php" method="post">

          <div class="row">
            <div class="col-25">
              <label for="fname">Name : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="name" placeholder="Name of the Person" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="lname">Date of Birth :</label>
            </div>
            <div class="col-75">
              <input type="date" id="lname" name="dob" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Gender : </label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="gender" placeholder="Gender" required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
              <label for="fname">Contact No. : </label>
            </div>
            <div class="col-75">
            <input type="text" id="fname" name="contact" placeholder="Contact No." required>
            </div>
          </div>

          <div class="row">
            <div class="col-25">
            <label for="subject">Address :</label>
            </div>
            <div class="col-75">
            <textarea id="subject" name="address" placeholder="Address of the person" style="height:200px" required></textarea>
            </div>
          </div>

          <div class="row">
            <input type="submit" value="Submit">
          </div>
        </form>
      </div>

    </div>
    <!-- End Right Column -->

    </div>
    <!-- End Faux Columns -->

  <!-- Begin Footer -->
  <div id="footer"> This is the Footer </div>
  <!-- End Footer -->
 </div>
<!-- End Wrapper -->
</body>
</html>
