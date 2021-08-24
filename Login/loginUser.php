<?php
	//BEGIN FUNCTION 
		
	function random_password($length,$validchars) {
	$numchars = mb_strlen ($validchars,'utf-8');
	$password = '';

	// each loop random 1 character
	for ($i = 0; $i < $length; $i++) {
		mt_srand();
		// random index of valid characters
		$index = mt_rand(0, $numchars - 1);
		// get character at index and append to password
		$password .= mb_substr($validchars, $index, 1,'utf-8');
		if(mb_strlen($password,'utf-8')==$length){
			break;	
		}
	}
	return $password;
}

?>
<?php 

$n=4; 
    function getName($n) { 
        $characters = '0123456789'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
    }
 $pinlogin = getName($n);

?>



<div class="card mt-2 border border-primary shadow-lg">
  <div class="card-body">

<center><h3> User Login P.G.R. Machine</h3>
<img src="./img/login.png" style="width:300px;height:300px;"> </center>

<form class="was-validated" action="" method="POST">

<div class="input-group mt-5">
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-user" style="font-size:24px"></i></div>
        </div>
        <input type="text" class="form-control border border-dark" placeholder="Username" name="username" id="username" autocomplete="off" required>
      </div>


<div class="input-group mt-3">
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-key" style="font-size:17px"></i></div>
        </div>
        <input type="password" class="form-control border border-dark" placeholder="Password" name="password" id="password" autocomplete="off" required>
      </div>





<div class="row mt-5">

    
    <div class="col">
      <button type="submit" name="login" class="btn btn-block btn-outline-success">Login <i class="fa fa-sign-in"></i></button>
    </div>
 
  <div class="row mt-15">

  </div>
</div>




</form>


</div>
</div>

<script type="text/javascript">
	$(function(){
		$('#username').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'OK',
				'normal' : 'ABC',
				'meta1'  : '.?123',
				'meta2'  : '#+='
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'q w e r t y u i o p {bksp}',
					'a s d f g h j k l {enter}',
					'{s} z x c v b n m , . {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'shift': [
					'Q W E R T Y U I O P {bksp}',
					'A S D F G H J K L ',
					'{s} Z X C V B N M ! ? {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'meta1': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				],
				'meta2': [
					'[ ] { } # % ^ * + = {bksp}',
					'_ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
					'{meta1} . , ? ! \' " {meta1}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

		$('#alamat').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'DONE',
				'normal' : 'abc',
				'meta1'  : '.?123',
				'meta2'  : '#+='
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'q w e r t y u i o p {bksp}',
					'a s d f g h j k l {enter}',
					'{s} z x c v b n m , . {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'shift': [
					'Q W E R T Y U I O P {bksp}',
					'A S D F G H J K L ',
					'{s} Z X C V B N M ! ? {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'meta1': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				],
				'meta2': [
					'[ ] { } # % ^ * + = {bksp}',
					'_ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
					'{meta1} . , ? ! \' " {meta1}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

		$('#nope').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'DONE',
				'normal' : '.?123',
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

	})
</script>

<script type="text/javascript">
	$(function(){
		$('#password').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'OK',
				'normal' : 'ABC',
				'meta1'  : '.?123',
				'meta2'  : '#+='
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'q w e r t y u i o p {bksp}',
					'a s d f g h j k l {enter}',
					'{s} z x c v b n m , . {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'shift': [
					'Q W E R T Y U I O P {bksp}',
					'A S D F G H J K L ',
					'{s} Z X C V B N M ! ? {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'meta1': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				],
				'meta2': [
					'[ ] { } # % ^ * + = {bksp}',
					'_ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
					'{meta1} . , ? ! \' " {meta1}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

		$('#alamat').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'DONE',
				'normal' : 'abc',
				'meta1'  : '.?123',
				'meta2'  : '#+='
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'q w e r t y u i o p {bksp}',
					'a s d f g h j k l {enter}',
					'{s} z x c v b n m , . {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'shift': [
					'Q W E R T Y U I O P {bksp}',
					'A S D F G H J K L ',
					'{s} Z X C V B N M ! ? {s}',
					'{meta1} {space} {meta1} {accept}'
				],
				'meta1': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				],
				'meta2': [
					'[ ] { } # % ^ * + = {bksp}',
					'_ \\ | ~ &lt; &gt; $ \u00a3 \u00a5 {enter}',
					'{meta1} . , ? ! \' " {meta1}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

		$('#nope').keyboard({
			display: {
				'bksp'   :  "\u2190",
				'accept' : 'DONE',
				'normal' : '.?123',
			},

			layout: 'custom',
			customLayout: {
				'normal': [
					'1 2 3 4 5 6 7 8 9 0 {bksp}',
					'- / : ; ( ) \u20ac & @ {enter}',
					'{meta2} . , ? ! \' " {meta2}',
					'{normal} {space} {normal} {accept}'
				]
			}

		});

	})
</script>



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
<br>
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
