<?php
// require_once __DIR__ . '/../../dbConnection/dbConnection.php';
// require_once __DIR__ . '/../../helpers/query_helpers.php';

if(!empty($_POST["machine_id"])) 
{

	$machine_id = $_POST["machine_id"];
	//echo $machine_id;
 ?>
<option value="">Select</option>

  <option value="Stock">Stock</option>
  <option value="used">used</option>
<?php
}

?>
