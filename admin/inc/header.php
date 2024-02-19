<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . "/../lib/Session.php";
Session::init();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>GEST11</title>
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/style.css">
<script>
        // Set the time delay in milliseconds (e.g., 5000 milliseconds = 5 seconds)
        var delayInMilliseconds = 1800000;

        // Use setTimeout to wait for the specified time and then perform the redirection
        setTimeout(function () {
            // Change the URL to the desired destination
            window.location.href = '../Home.html';
        }, delayInMilliseconds);
    </script>
</head>

<body>

<?php
function autoloadTable1($classes)
{
    $classFile = 'classes/' . $classes . '.php';
    $classFile1 = 'classes1/' . $classes . '.php';

    if (file_exists($classFile)) {
        include_once $classFile;
    } elseif (file_exists($classFile1)) {
        include_once $classFile1;
    } else {
        // Uncomment the following line for debugging:
        // echo "Class file not found: $classes";
    }
}

spl_autoload_register(fn($classes) => autoloadTable1($classes));

// Instantiate classes
$users = new Users();
$invit = new Invit();

// Uncomment the following line if using the Player class


?>

  <?php


  if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    Session::set('logout', '<div class="alert alert-success alert-dismissible mt-3" id="flash-msg">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success !</strong> You are Logged Out Successfully !</div>');
    Session::destroy();
  }



  ?>


  <div class="container">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
       <a class="navbar-brand" href="Dashboard.php"><i class="fas fa-home mr-2"></i>Dashboard</a>
      <?php if (Session::get('roleid') == '1') { ?>
       
        <?php
      }

      ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">

          <!-- <li class="nav-item">

            <a class="nav-link" href="listplayer.php"><i class="fas fa-duotone fa-futbol mr-2"></i>Player List
             </span></a>
          </li> -->
          <?php if (Session::get('id') == TRUE) { ?>
            <?php 
            if (Session::get('roleid') == '1') { 
              ?>



              <li class="nav-item">
                <a class="nav-link" href="listeinvite.php"><i class="fas fa-duotone fa-futbol mr-2"></i>Guest List
                  </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listplayer.php"><i class="fas fa-duotone fa-futbol mr-2"></i>Player List
                  </span></a>
              </li>
              <!-- <li class="nav-item">

                <a class="nav-link" href="team.php"><i class="fas fa-users mr-2"></i>Teams</span></a>
              </li> -->
              <li class="nav-item">

                <a class="nav-link" href="index.php"><i class="fas fa-users mr-2"></i>Agent List</span></a>
              </li>
              <li class="nav-item

              <?php

              $path = $_SERVER['SCRIPT_FILENAME'];
              $current = basename($path, '.php');
              if ($current == 'addUser') {
                echo " active ";
              }

              ?>">

                <a class="nav-link" href="addUser.php"><i class="fas fa-user-plus mr-2"></i>Add Agent </span></a>
              </li>
            <?php

           }
            elseif (Session::get('roleid') == '3') { ?>
               
              <!-- <nav class="navbar navbar-expand-md navbar-dark bg-dark card-header">
              <a class="navbar-brand" href="Dashboard.php"><i class="fas fa-home mr-2"></i>Dashboard</a> -->
              <li class="nav-item">
                <a class="nav-link" href="listeinvite.php"><i class="fas fa-duotone fa-futbol mr-2"></i>Guest List
                  </span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="listplayer.php"><i class="fas fa-duotone fa-futbol mr-2"></i>Player List
                 </span></a>
              </li>
 <?php
            }?>
            
              <li class="nav-item
           <?php
            $path = $_SERVER['SCRIPT_FILENAME'];
            $current = basename($path, '.php');
            if ($current == 'profile') {
              echo "active ";
            }

            ?>">

            

              <a class="nav-link" href="profile.php?id=<?php echo Session::get("id"); ?>"><i
                  class="fab fa-500px mr-2"></i>Profile <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>
          <?php } else { ?>

            <li class="nav-item

              <?php

              $path = $_SERVER['SCRIPT_FILENAME'];
              $current = basename($path, '.php');
              if ($current == 'register') {
                echo " active ";
              }

              ?>">
              <!-- <a class="nav-link" href="register.php"><i class="fas fa-user-plus mr-2"></i>Register</a> -->
            </li>
            <li class="nav-item
                <?php

                $path = $_SERVER['SCRIPT_FILENAME'];
                $current = basename($path, '.php');
                if ($current == 'login') {
                  echo " active ";
                }

                ?>">
              <a class="nav-link" href="?action=logout"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
            </li>

          <?php } ?>


        </ul>

      </div>
    </nav>