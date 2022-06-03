 <?php
 $id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$edit = $koneksi->query("UPDATE user SET `username`='$username',`email`='$email',`password`='$password' WHERE id='$id'");

if($edit == TRUE){
    echo"
    <script>
        alert('data berhasil diedit')
        window.location='?page=home1'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal diedit')
        window.location='?page=user/edit&id='".$id."
    </script>
    ";
}
?>







