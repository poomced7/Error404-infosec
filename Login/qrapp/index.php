<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Instascan</title>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>	
  


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
 
  <div class="container">
  <div class="row">
    <div class="col-2">
      
    </div>
    <div class="col-8">
    <center><div class="alert alert-success" role="alert">
<video id="preview"></video></div>


<div class="alert alert-primary" role="alert">
  <h2>กรุณานำ QR Code ของท่านมาสแกนที่นี่ !!<h2>

  <a class="btn btn-danger btn-lg btn-block" href="../?app=home" role="button">ย้อนกลับ</a><br>




  <?php 



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

?>

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


</div>




</center> 
    </div>
    <div class="col-2">
      
    </div>
  </div>
</div>

   

    <script>
        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
        
            }
        );
        scanner.addListener('scan', function(token) {
            window.location = 'https://amz.jbtap.online/?app=dashboard&token='+token;
        });
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("ไม่สามารถเข้าถึงกล้องได้");
            }
        });        
    </script>

 </body>
</html>
