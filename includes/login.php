<?php include 'nav.php';?>

<?php
if(isset($_POST['adminlogin'])){
    $username =x($_POST['username']);
    $password =x($_POST['password']);

if(empty($username) || empty($password) ){
    echo "<script> window.location.href='login.php';</script>";
}else{
$password = hash('gost', $password);
$query = mysqli_query($db ,"SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'");
if(mysqli_num_rows($query)==1){
    while($row = mysqli_fetch_assoc($query)){
        $_SESSION['admin'] =x($row['id']);
        $_SESSION['username'] =x($row['username']);
    }
    echo "<script> window.location.href='index.php';</script>";
}else{
    echo "<script> window.location.href='login.php';</script>";
}

}



}

?>




<div class="container text-center mt-4 p-4">

<img src="../asset/img/users.png" class="userbtn m-3" width="100" alt="">
<img src="../asset/img/admin.png" class="adminbtn m-3" width="100"alt="">


<div class="row justify-content-center">
<?php 
$i=0;
while($i <=1 ) {?>
<form action="login.php"  method="POST" class="<?php if($i == 0){echo'user';}else{echo'admin';}?> d-none m-2 col-lg-4 p-4  shadow-sm radius-10">
<input type="text" name="username" placeholder="username" class="form-control form-control-lg radius-10 mt-2">
<input type="text" name="password" placeholder="password" class="form-control form-control-lg radius-10 mt-2">
<button <?php  if($i == 0){ echo 'name="userlogin"';}else{ echo 'name="adminlogin"';}?> class="btn <?php if($i == 0 ){echo'btn-primary';}else{echo'btn-warning';}?> w-100 mt-3 radius-10 ">login</button>
</form>
<?php
$i++;}?>
</div>
</div>


<script>
  $(document).ready(function(){

$(".userbtn").on("click",function(){
    $(".user").removeClass('d-none');
    $(".admin").addClass('d-none');
})
$(".adminbtn").on("click",function(){
    $(".admin").removeClass('d-none');
    $(".user").addClass('d-none');
})

})


</script>
