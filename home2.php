<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Oops Anda belum login");//jika belum login jangan lanjut
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="style.css">


    <title>Off Canvas Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body style="background:url(3.jpg)">
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
           <ul class="nav navbar-nav">
            <li><a href="post.php">POST</a></li>
                      </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

   
    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
        <div class="">
            <h1>Hello, there!</h1>
            <p>NICE TO SEE YOU.</p>
            <p> WELCOME TO MY PAGE</p>
            <p>HOPE U GUYS LIKE IT AS I LIKE VANILA LATTE:)</p>
            <p>THIS IS MY BLOG!</p>
            <br>
       <?php
          include'koneksi.php';
          $con = mysqli_connect("localhost","root","","dichaunyuk");

          $sql = "SELECT* FROM postt";
          $result = $con->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "". $row["waktu"]."<br>";
                  echo " - title: " . $row["title"]."<br>". " content:" . $row["isi"]. "<br>";
                  echo"<a href='edit.php?id_post=".$row["id_post"]."'>edit</a> ||";
                  echo"<a onclick=\"return confirm('are you sure deleting thi post?');\" href='delete.php?id_post=".$row["id_post"]."'>delete</a><br><br><br>";
              }
          } else {
              echo "0 results";
          }
          $con->close();
          ?>

        </div>
      </div>

     <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
          <ul class="nav navbar-nav">
          <li class="active"><a href="logout.php" class="list-group-item active">log out</a></li>
          </ul>
          </div>
        </div><!--/span-->
      </div><!--/row-->


      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
