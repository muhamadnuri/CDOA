<?php include 'nav.php';?>
<h1 class="fw-semibold text-center fs-3">حسابات</h1>
<div class="btn-group justify-content-end float-end" role="group" aria-label="Basic radio toggle button group">
 

  <input type="radio" class="btn-check " name="btnradio" id="btnradio2" autocomplete="off" checked>
  <a  class="btn btn-outline-dark" href="masrwfB.php" for="btnradio2">مەسروفاتی بیناسازی</a>

</div><br><br>
<div class="btn-group me-4" role="group" aria-label="Basic example">
   
   
  <a type="button" class="btn btn-light " href="deleteB.php"><i class="bi bi-trash3-fill"></i></a>
  <a type="button" class="btn btn-light" href="insertB.php"><i class="bi bi-plus-square-fill"></i></a>
   </div>

   

<h1 class="fw-semibold text-center fs-3">لۆجیستی</h1>
<div class="row m-2  overflow-auto  " style=" max-height: 360px;">
<table class="table table-bordered ">
  <thead class="text-end ">
    <tr>
    <th class="col-1">تێبینی</th>
      <th class="col-1">پێوانەی سەرف</th>
      <th class="col-1">بەروار</th>
      <th class="col-1">جۆری پێداویستی</th>
      <th class="col-1">بڕی پارە</th>
      <th class="col-1">ژمارە</th>
      
    </tr>
  </thead>





<?php

$query = mysqli_query ($db ,"SELECT * FROM `bin-7` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end  " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
      <a type="button" class="btn btn-primary col-1" data-bs-toggle="modal" data-bs-target="#post<?php echo htmlspecialchars($row['id']);?>" href=""><i class="bi bi-pencil-square"></i></a>
      
    </tr>
   
</table>
<?php }?>
</div>

<?php
if(isset($_POST['update']) && isset($admin)){
    $id=htmlspecialchars($_POST['id']);
    $price =htmlspecialchars($_POST['price']);
    $name =htmlspecialchars($_POST['name']);
    $date =htmlspecialchars($_POST['date']);
    $type =htmlspecialchars($_POST['type']);
    $note =htmlspecialchars($_POST['note']);
    $query = mysqli_query ($db ," UPDATE `bin-7` SET `price`='$price' , `name`='$name' , `date`='$date', `type`='$type' , `note`='$note' WHERE `id`='$id'  ");
    if($query){
      echo "<script> window.location.href='updateB.php';</script>";
  }

}?>
<?php

$query = mysqli_query ($db ,"SELECT * FROM `bin-7` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>

<div class="modal fade" id="post<?php echo htmlspecialchars($row['id']);?>"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center" >
      <form form action="updateB.php" method="POST" >
      <input name="id" type="number"  value="<?php echo htmlspecialchars($row['id']);?>"  hidden>
        <input name="price" type="double" class="form-control form-control-lg mt-2" value="<?php echo htmlspecialchars($row['price']);?>">
        <input name="name" type="text" class="form-control form-control-lg mt-2" value="<?php echo htmlspecialchars($row['name']);?>">
        <input name="date" type="date" class="form-control form-control-lg mt-2" value="<?php echo htmlspecialchars($row['date']);?>">
        <input name="type" type="text" class="form-control form-control-lg mt-2" value="<?php echo htmlspecialchars($row['type']);?>">
        <input name="note" type="text" class="form-control form-control-lg mt-2" value="<?php echo htmlspecialchars($row['note']);?>">
        <button name="update" class="btn btn-warning btn-lg mt-2 w-25">نوێکردنەوە</button>
        <button type="button" class="btn btn-primary btn-lg mt-2 w-25" data-bs-dismiss="modal">لابردن</button>
       </form>
      </div>
     
    </div>
  </div>
</div>
<?php }
?>