<?php
$ss = "2000";
if(isset($_SESSION["swal"]) == "notify"){
  echo "<script>

  let timerInterval
  Swal.fire({
    icon: '$icon',
    title: '$title',
   text: '$text',
    timer: $ss,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading()
      timerInterval = setInterval(() => {
        const content = Swal.getHtmlContainer()
        if (content) {
          const b = content.querySelector('b')
          if (b) {
            b.textContent = Swal.getTimerLeft()
          }
        }
      }, 100)
    },
    willClose: () => {
      clearInterval(timerInterval)
    }
  }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log('I was closed by the timer')
    }
  }).then(function() { 
                        window.location = '$link'; 
                   }),setTimeout(function(){ 
                        window.location = '$link'; 
                   },$ss); 
    


    
       </script>";




}
unset($_SESSION["swal"]);



?>