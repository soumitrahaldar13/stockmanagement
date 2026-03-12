<?php
include_once __DIR__ . '/../../dbConnection/dbConnection.php';
include_once __DIR__ . '/../../helpers/query_helpers.php';




$product_name  = $_POST['productName'];
$query = get_all_products_serial_no($con, $product_name);
//echo $product_name;
//print_r($query);
?>
<label for="product">Product Serial Number</label>
<select name="product_serial_no" id="product_serial_no" required>

    <option value="">Select Serial Number</option>
    <?php
    foreach ($query as $i) {
    ?>
        <option value="<?php echo $i["Serial_Number"]; ?>"><?php echo $i["Serial_Number"]; ?></option>
    <?php
    }
    ?>

</select>