<?php
$con = new PDO("mysql:host=localhost;dbname=usamadb",'root','123');
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update Your Account</h1>
              </div>
              <form class="user" method="POST">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="fname" class="form-control form-control-user" value="<?php echo $_SESSION['FName']; ?>" id="exampleFirstName" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="lname" class="form-control form-control-user" value="<?php echo $_SESSION['LName']; ?>" id="exampleLastName" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email"  name="email" class="form-control form-control-user" value="<?php echo $_SESSION['Email']; ?>" id="exampleInputEmail" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <input type="text"  name="pass" class="form-control form-control-user" value="<?php echo $_SESSION['Pass']; ?>" id="exampleInputEmail" placeholder="Password">
                  </div>
                  
                  <input type="submit" name="btnsubmit" value="Save" class="btn btn-primary btn-user btn-block">
                  <hr>

                  <?php
                    if (isset($_POST['btnsubmit'])) {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];

                        $query = "UPDATE `users` SET `Firstname`='".$fname."',`Lastname`='".$lname."',`Email`='".$email."',`Password`='".$pass."' WHERE Id='".$_SESSION['Id']."'";

                        $up = $con->query($query);
                        $up->execute();
                        $_SESSION['FName'] = $_POST['fname'];
                        $_SESSION['LName'] = $_POST['lname'];
                        $_SESSION['Email'] = $_POST['email'];
                        $_SESSION['Pass'] = $_POST['pass'];
                        echo "<script>window.location.href = 'index.php';</script>";

                    }

                  ?>
                  
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="index.php">Back to Home</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
