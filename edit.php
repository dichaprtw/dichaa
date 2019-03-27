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

<body style="background:url(new.jpg)">
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
            <li class="active"><a href="#">Home</a></li>
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
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Post</h1>
            <div>
            
                <form action="actionedit.php" method="POST">
                <?php
                Require_once('koneksi.php');
                $id_post=$_GET['id_post'];
                $sql = "SELECT * FROM postt WHERE id_post=$id_post";
                $result = mysqli_query($con, "SELECT * FROM postt WHERE id_post=$id_post");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                 <table>
              <tr>
                <td> Title   : </td>
                <td>
                <input type"hidden" name="id_post" value="<?php echo $row['id_post']; ?>">
                <input type="text" name="title" value="<?php echo $row['title']; ?>">
              </td>
              </tr>
              
              <tr>
                <td> Content  : </td>
                <td><br><br><textarea type="text" name="isi"><?php echo $row['isi'];?></textarea></td>
              </tr>
              <tr>
              <td><td><br><br><input type="submit" value="Save"></td></td>
              </tr>
            </table>
                
            </div>
          </div>   
      </div>

      <?php
          }
        
        ?>
    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>
