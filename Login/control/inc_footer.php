<?php
include ("connection.php");

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


<footer class="bg-light text-center">


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <?php echo $machinename;?> ขณะนี้มีแก้วจำนวน <?php echo $sum;?> / 200 ใบ
  <div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" style="width: <?php $a=2; $c=$sum / $a; echo $c;?>%;" aria-valuenow="200" aria-valuemin="200%" aria-valuemax="200%"><?php echo $sum;?> </div>
</div>

  </div>
  <!-- Copyright -->
</footer>

