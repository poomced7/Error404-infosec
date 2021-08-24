
   <center>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="./?app=qrlogin"><img src="./img/qrlogin.png" alt="HTML tutorial" style="width:500px;height:500px;"></a>
    &nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
    <a href="./?app=login"><img src="./img/userlogin.png" alt="HTML tutorial" style="width:500px;height:500px;"></a>

</center>

<style>
  body {
    background-image: url('./img/BGse.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>







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
