<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $NIP=$_POST['NIP'];
 $nama=$_POST['nama'];
 $telp=$_POST['telp'];
 $email=$_POST['email'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `progdi` SET `NIP`='$NIP',`nama`='$nama',`telp`='$telp',`email`='$email',`alamat`='$alamat' where `NIP`='$NIP'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>