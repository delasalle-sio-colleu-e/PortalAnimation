<?php
    //inclusion du header
    include('include/head.php');
?>
<!DOCTYPE HTML>
<html>
	<body>
		<img src="Images/Portal_CompanionCube.png" class = 'cube'>
		<img src="Images/bonhomme1.png" class = 'bonhomme'>
		
		<script>
			function myMove() {
			  var elem = document.getElementById("animate");   
			  var pos = 0;
			  var id = setInterval(frame, 5);
			  function frame() {
				if (pos == 350) {
				  clearInterval(id);
				} else {
				  pos++; 
				  elem.style.top = pos + "px"; 
				  elem.style.left = pos + "px"; 
				}
			  }
			}
		</script>
		<div class = 'bonhomme'></div>
	</body> 
</html>
