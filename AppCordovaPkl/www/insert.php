<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $NIP=$_POST['NIP'];
 $nama=$_POST['nama'];
 $telp=$_POST['telp'];
 $email=$_POST['email'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"INSERT INTO `progdi` (`NIP`,`nama`,`telp`,`email`,`alamat`) VALUES ('$NIP','$nama','$telp','$email','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>