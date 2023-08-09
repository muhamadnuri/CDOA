<?php include 'nav.php';?>
<br>
<div class="container ">
<div class="row justify-content-center " dir="rtl">
<ul class="list-group  col-md-5 col-sm-5">
  <li class="list-group-item active" aria-current="true">بیناسازی</li>
  <li class="list-group-item">پشتیوانی کۆماندۆ <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM bina";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?></li>
  <li class="list-group-item">کەلار
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-1`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  <li class="list-group-item">بانی مەقان
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-2`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  <li class="list-group-item">ف٧ دەباشان
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-3`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  <li class="list-group-item">ف٦
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-4`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  <li class="list-group-item">لۆجیستی
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-5`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  <li class="list-group-item">مەقەڕ ناوشار
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `bin-6`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo ": " . $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
</ul>
<ul class="list-group col-md-3 col-sm-6 mt-2">
  <li class="list-group-item active "  aria-current="true">گشتی</li>
  <li class="list-group-item" id="num1">
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `gshti`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  
</ul> 
<ul class="list-group col-md-3 col-sm-6 mt-2  ">
  <li class="list-group-item active "  aria-current="true">ئالیات</li>
  <li class="list-group-item " id="num2">
  <?php 
  if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT SUM(price) FROM `aliat`";
    $result = mysqli_query($db, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        echo  $row['SUM(price)'];
        echo " دع ";
    }
?>
  </li>
  
</ul>
</div>
</div>
<br>
<div class="container ">
<div class="row justify-content-center" dir="rtl">
<ul class="list-group col-8  ">
  <li class="list-group-item active" aria-current="true">کۆی گشتی پارە سەرف کراو</li>
  <li class="list-group-item" id="tot" >تێکڕا 

<?php 
 if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}


$sqll = "SELECT SUM(price) FROM `gshti`";
$qryl = mysqli_query($db, $sqll);

$sql = "SELECT SUM(price) FROM `aliat`";
$qry = mysqli_query($db, $sql);
if ($row = mysqli_fetch_assoc($qry)  ) {
}
if ($row2 = mysqli_fetch_assoc($qryl)) {
}
$total = $row['SUM(price)'] + $row2['SUM(price)'];
echo " : ", $total; 

?>
  </li>
</div>
</div>

