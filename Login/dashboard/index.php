<?php
include ("./navbar.php");
include ("./show.php");

$n=50; 
    function getName($n) { 
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    }
 $randomtoken = getName($n);


$token = $_GET["token"];
$tokencheck = $conn->query("SELECT *FROM member WHERE token = '$token' ");
if($tokencheck->num_rows <= 0){
    $_SESSION["swal"] = "notify";
    $title ="Token ไม่ถูกต้อง";
    $text = "กรุณาลองใหม่อีกครั้ง";
    $icon ="error";
    $button = "ตกลง";
    $link = "./?app=home";
}else{
  $add = $_GET["add"];
  if($add == "con"){
$tokenupdate = $conn->query("UPDATE member SET token = '$randomtoken' WHERE token = '$token'");
        $_SESSION["swal"] = "notify";
        $title ="ออกจากระบบ";
        $text = "กรุณารอสักครู่...";
        $icon ="error";
        $button = "ตกลง";
       $link = "./?app=home";
    
    }

    
    $showtoken = $conn->query("SELECT * FROM member WHERE token = '$token' ");
    while ($row = $showtoken->fetch_array()) {
      $id = $row["qrkey"];
      $point = $row["point"];
      $name = $row["name"];
      $lastname = $row["lastname"];
    
    }

    $showtotal = $conn->query("SELECT * FROM total WHERE id = '1' ");
    while ($row = $showtotal->fetch_array()) {
      $branch = $row["branch"];
      $sum = $row["sum"];
      $machinename = $row["machine_name"];
    
    }
    
    
    $showtotal2 = $conn->query("SELECT * FROM total WHERE id = '2' ");
    while ($row = $showtotal2->fetch_array()) {
      $branch2 = $row["branch"];
      $sum2 = $row["sum"];
      $machinename2 = $row["machine_name"];
    
    }










}

 
  

?>


<br>

<div class="alert alert-info" role="alert">
<center><h3>ยินดีต้อนรับ คุณ <?php echo $name;?> <?php echo $lastname;?> &nbsp;🟢</h3></center>
</div>

<div class="alert alert-success" role="alert">
  <center><h1 class="alert-heading">จำนวนแต้มสะสมของท่านขณะนี้</h1>
  <p> <div id="point"><br><h2>แต้ม</h2></p></div>
  <br>

  <div class="alert alert-secondary" role="alert">
  <p class="mb-0">หากสะสมแต้มครบแล้วสามารถนำไปแลกของรางวัลตามที่ระบุไว้ได้ที่พนักงาน !!</p>
  <hr>

  <a onClick="window.location.reload();" class="btn btn-outline-dark btn-lg btn-block" role="button" aria-pressed="true">รีคะแนน</a></center><br>
  <a href="./?app=logout" class="btn btn-outline-info btn-lg btn-block" role="button" aria-pressed="true">ของรางวัล</a></center><br>
  <a href="./?app=dashboard&token=<?php echo $token;?>&add=con" class="btn btn-outline-danger btn-lg btn-block" role="button" aria-pressed="true">ออกจากระบบ</a></center><br>

  <script>
function myFunction(){
  
    window.location = '/?app=dashboard&token=$token&add=con';
  
}
</script>
</div>





<div class="alert alert-warning" role="alert">
<center><label class="my-1 mr-2" for="inlineFormCustomSelectPref">รายละเอียดตู้อื่นๆ</label></center>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>เลือกเพื่อดูรายละเอียด...</option>
    <option value="1" ><?php echo $machinename;?> จำนวนแก้ว <?php echo $sum;?> /200 ใบ สาขา <?php echo $branch;?></option>
    <option value="2"> <?php echo $machinename2;?> จำนวนแก้ว <?php echo $sum2;?> /200 ใบ สาขา <?php echo $branch2;?></option>
  </select>

</div>



<div id="link_footer">
<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_footer").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "./control/inc_footer.php", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc();
	// 1sec
},1000);

window.onload = loadXMLDoc;
</script>

<script>
function loadXMLDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("point").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "./?app=show&token=<?php echo $token;?>", true);
  xhttp.send();
}
setInterval(function(){
	loadXMLDoc1();
	// 1sec
},1000);

window.onload = loadXMLDoc;
</script>