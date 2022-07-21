<?php 
require_once "conexion.php";
$num1 = filter_input(INPUT_POST, 'precioventa');
$num2 = filter_input(INPUT_POST, 'cantidad');


	$sql="SELECT descripcion, precio
		from productos 
		where id='$num1'";

	$result=mysqli_query($conexion,$sql);


	while ($ver=mysqli_fetch_row($result)) {
		
		$precio_total=$ver[1]*$num2;
	
?>
<input type="text" value="<?php echo $precio_total; ?>">

<pre><?php echo utf8_encode($ver[0]); ?></pre>


<?php } ?>