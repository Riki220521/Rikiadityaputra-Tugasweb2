<?php
//koneksi ke mysql
$conn = mysqli_connect ("localhost","root","","akademik");
if (mysqli_connect_errno()){
echo "Koneksi Gagal".mysqli_connect_error();
}
else{
$vnpm = $_POST['txtnpm'];
$vnmmhs= $_POST['txtnm_mahasiswa'];
$vjk=$_POST['cbjk'];
$vkelas=$_POST['txtkelas'];
$query= mysqli_query($conn,"insert into tb_mahasiswa (NPM,NAMA,JENIS KELAMIN,KELAS)
values ('$vnpm','$vnmmhs','$vjk','$vkelas')");
if ($query)
echo "Input Data Sukses<br>";
else
echo "Input Data Gagal<br>";
}
?>
