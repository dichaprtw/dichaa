
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

<body style="background:url(yup.jpg)">
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
            <li><a href="post.php">POST</a></li>
             <li><a href="creat.php">Add Post</a></li>
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
        <div class="column">
            <form action="" method="post">
              <table>
                <tr>
                  <td> Title:</td>
                  <td><input type="text" name="title"><br></td>
                </tr>
                <tr>
                   <td> Isi:</td>
                   <td><br><br><textarea name="isi" row="900" col="600"></textarea><br></td>
                </tr>
                  <tr>
                   <td><br><input type="submit" name="Save"></td><br><br><br>
                    </tr>
                    <tr>
                    <td><a href="home2.php" class="active"></a></td>
                    </tr>
            </form>
          </table>
      <?php
    include("koneksi.php");
    $conn = mysqli_connect("localhost","root","","dichaunyuk");
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

    $simpan = mysqli_query($conn,"INSERT INTO postt (id_post,title,isi) VALUES(null,'$_POST[title]','$_POST[isi]') ");

    if ($simpan) {
       echo "New record created successfully";
       header("location:home2.php");
    } else {
        echo " gagal menambahkan post" ;
      }
    }
    ?>
        </div>
      </div>


     <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
          <ul class="nav navbar-nav">
          <li class="active"><a href="umum.php" class="list-group-item active">log out</a></li>
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
