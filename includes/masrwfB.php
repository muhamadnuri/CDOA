<?php include 'nav.php';?>


<h1 class="fw-semibold text-center fs-3">مەسروفاتی بیناسازی</h1>
<div class="btn-group justify-content-end float-end" role="group" aria-label="Basic radio toggle button group">
 
  
  
  <input type="radio" class="btn-check " name="btnradio" id="btnradio1" autocomplete="off" checked >
  <label class="btn btn-outline-dark anone" for="btnradio1">مەسروفاتی بیناسازی</label>

</div>
<br><br>
<?php if(isset($admin)){?>
<div class="btn-group me-4 anone" role="group" aria-label="Basic example">
   
   <a type="button" class="btn btn-light" href="deleteB.php"><i class="bi bi-trash3-fill"></i></a>
  <a type="button" class="btn btn-light" href="updateB.php"><i class="bi bi-pencil-square"></i></a>
  <a type="button" class="btn btn-light" href="insertB.php"><i class="bi bi-plus-square-fill"></i></a>
   </div>
   <button onclick="window.print()" type="button" class="btn btn-primary btn-lg mt-2 w-10 anone"><i class="bi bi-printer"></i></button>
 
<?php }?>
   <h1 class="fw-semibold text-center fs-3">پشتیوانی کۆماندۆ</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bina` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>


<h1 class="fw-semibold text-center fs-3">کەلار</h1>

<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-1` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>

<h1 class="fw-semibold text-center fs-3">بانی مەقان</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-2` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>

<h1 class="fw-semibold text-center fs-3">فەجی ٧ دەباشان</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-3` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>
<h1 class="fw-semibold text-center fs-3">فەوجی ٦</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
<table class="table table-bordered ">
  <thead class="text-end  ">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-4` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>
<h1 class="fw-semibold text-center fs-3">فەوجی لۆجیستی</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-5` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbp " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>


<h1 class="fw-semibold text-center fs-3">مەقەڕ ناوشار</h1>
<div class="row m-2  overflow-auto tbp " style=" max-height: 360px;">
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

$query = mysqli_query ($db ,"SELECT * FROM `bin-6` ORDER BY `id` ASC");

while ($row=mysqli_fetch_assoc($query)){?>
  <table class="table table-hover table-sm">
  <tbody>
    <tr class="text-end tbpi " style=" max-width: 60px;">
    
      <td class="col-1"><?php  echo $row['note'];?></td>
      <td class="col-1"><?php  echo $row['type'];?></td>
      <td class="col-1"><?php  echo $row['date'];?></td>
      <td class="col-1"><?php  echo $row['name'];?></td>
      <td class="col-1"><?php  echo $row['price'];?></td>
      <td class="col-1"><?php  echo $row['id'];?></td>
    </tr>
   
</table>
<?php }?>
</div>


