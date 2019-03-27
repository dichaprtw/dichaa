  <?php
    require_once('koneksi.php');
         
        $id_post=$_POST['id_post'];
        $title=$_POST['title'];
        $isi=$_POST['isi'];

    $update = "UPDATE postt SET title = '$title', isi = '$isi' WHERE id_post ='$id_post'";

    if ($con->query($update)===TRUE) {
       echo "Berhasil diperbarui";
    } else {
        echo "Gagal memperbarui";
    }
    $con->close();
    header('location:umum.php');
    exit;
  ?>