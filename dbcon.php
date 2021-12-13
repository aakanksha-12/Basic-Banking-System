<?php

$username="root";
$pass="";
$server="localhost";
$db="amount";

$con= mysqli_connect($server,$username,$pass,$db);

if ($con){
	?>
	<script>
		//alert("connection succesfull");

	</script>
	<?php
}else{
	?>
	<script>
		//alert("connection unsuccesfull");

	</script>
	<?php

}





?>