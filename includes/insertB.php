<?php include 'nav.php';?>

<?php
if(isset($_POST['submit']) && isset($admin)){
  $price =x($_POST['price']);
  $name =x($_POST['name']);
  $date =x($_POST['date']);
  $type =x($_POST['type']);
  $note =x($_POST['note']);
  $BName = $_POST['BName'];
if(empty($name) || empty($price) || empty($date) || empty($type)|| empty($BName) ){
 $errors['result'] = "تکایە خانەکان پڕبکەوە";

}else{

  $query = mysqli_query($db ,"INSERT INTO `$BName`(`price`,`name`,`date`,`note`,`type`) VALUES('$price','$name','$date','$note','$type')");
   if($query)
   echo "<script> window.location.href='insertB.php';</script>";
}


}
?>


<h1 class="fw-semibold text-center fs-3">حسابات</h1>
<div class="btn-group justify-content-end float-end" role="group" aria-label="Basic radio toggle button group">
 

  <input type="radio" class="btn-check " name="btnradio" id="btnradio2" autocomplete="off" checked>
  <a  class="btn btn-outline-dark" href="masrwfB.php" for="btnradio2">مەسروفاتی بیناسازی</a>

</div><br><br>


<div class="col-6 bg-white p-4 m-auto radius-10 shadow ">
<form class="text-end "action="insertB.php" method="post">
<?php if(isset($_POST['submit'])){ ?><p class="text-center text-danger"><?php echo $errors['result'];?></p><?php }?>
 <label for="" class="col-sm-2 col-form-label text-end ">بڕی پارە</label> 
 <div class="form-group row">
    
      <input type="double" name="price" class="form-control text-end m-2" id="" placeholder="بڕی پارەبەدینار">
  </div> 
  <label for="" class="col-sm-2 col-form-label  text-end ">ناوی کاڵا</label>
  <div class="form-group row">
      <input type="txt" name="name"  class="form-control text-end m-2" id="" placeholder="ناوی كاڵا">
  </div>
  <label for="" class="col-sm-2 col-form-label text-end">بەروار</label>
  <div class="form-group row">

      <input type="date" name="date"  class="form-control text-end m-2 " id="" placeholder="بەروار">

  </div>
   <label for="" class="col-sm-2 col-form-label text-end">تێبینی</label>
  <div class="form-group row">
  <input type="text" name="note"  class="form-control text-end m-2" id="" placeholder="تێبینی">
    </div>
    <label for="" class="col-sm-2 col-form-label text-end">ناوی شوێن</label>
  <div class="form-group row">
  <select name="BName" class="custom-select">
  <option class="form-control text-end m-2" selected>دیاریکردنی ناوی شوێن</option>
  <option class="form-control text-end m-2" value="bina">پشتیوانی کۆماندۆ</option>
  <option class="form-control text-end m-2" value="bin-1">کەلار</option>
  <option class="form-control text-end m-2" value="bin-2">بانی مەقان</option>
  <option class="form-control text-end m-2" value="bin-3">ف٧ دەباشان</option>
  <option class="form-control text-end m-2" value="bin-4">فەوجی ٦</option>
  <option class="form-control text-end m-2" value="bin-5">لۆجیستی</option>
  <option class="form-control text-end m-2" value="bin-6">مەقەڕ ناوشار</option>

</select>
  </div>
 
    <label class="col-form-label col-sm-2 pt-0 text-end">پێوانەی سەرف</label>
  <fieldset class="form-group">
    <div class="row">
      
      <div class="col-sm-20">
        <div class="form-check m-2">
          <input class="form-check-input float-end m-2"  name="type" type="radio" name="gridRadios" id="gridRadios1" value="پسوڵە" >
          <label class="form-check-label" for="gridRadios1">پسوڵە</label>
        </div>
        <div class="form-check m-2">
          <input  class="form-check-input float-end m-2" name="type" type="radio" name="gridRadios" id="gridRadios2" value="وەسڵ">
          <label class="form-check-label" for="gridRadios2">وەسڵ</label>
        </div>
        
      </div>
    </div>
  </fieldset>
    
      <button name="submit"type="submit" class="btn btn-primary btn-lg col-4">ناردن</button>
    
    
</form>
</div>