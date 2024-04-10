<?php
include_once __DIR__ . '/../../dbConnection/dbConnection.php';
include_once __DIR__ . '/../../helpers/query_helpers.php';

$result = get_all_products($con);
?>
<div class="mt-10">
    <label for="product">Products</label>
    <select name="product" id="product" onChange="getptoduct(this.value)">
        <option value="">Select a product</option>
        <?php
        foreach ($result as $i) {
        ?>
            <option value="<?php echo $i['NAME'] ?>"><?php echo $i['NAME'] ?></option>
        <?php
        }
        ?>
    </select>
</div>