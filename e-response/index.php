<?php
    include("configuration/config.php");
    include("configuration/firebaseRDB.php");

    $db = new firebaseRDB($databaseURL);
    // include("configuration/config.php");

    // if(!isset($_SESSION['user']))
    // {
    //     header("location: login.php");
    // }
    // else
    // {

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include("includes/links.php"); ?>
</head>
<!-- https://www.fontawesomecheatsheet.com/font-awesome-cheatsheet-5x/ -->
<body oncontextmenu="return false">

    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    
    </div>
    <!-- loader END -->

    <!-- Main Sidebar Container -->
    <?php include("includes/sidebar.php") ?>

    <main class="main-content">
        <!-- Navbar -->
        <?php include("includes/header.php"); ?>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
            <div class="conatiner-fluid content-inner mt-n5 py-0">
                <main id="view-panel" >
                    <?php $page = isset($_GET['page']) ? $_GET['page'] :'dashboard'; ?>
                    <?php include $page.'.php' ?>
                </main>
            </div>
        <!-- /.content-wrapper -->

        <?php include("includes/settings.php"); ?>
        <?php include("includes/footer.php"); ?>
    </main>

<!-- REQUIRED SCRIPTS -->
  <?php include("includes/scripts.php"); ?>

</bodyv>
</html>
<?php 
    // }
?>