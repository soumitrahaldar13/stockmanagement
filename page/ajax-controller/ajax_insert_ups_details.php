<?php
include_once __DIR__ . '/../../dbConnection/dbConnection.php';
include_once __DIR__ . '/../../helpers/query_helpers.php';
// validation of data

$gem_no = $_POST['GEM_NO'];
$gem_date = $_POST['GEM_Date'];
$vendor_name = $_POST['VENDOR_NAME'];
$brand_name = $_POST['BRAND_NAME'];
$serial_number = $_POST['Serial_Number'];
$model_no = $_POST['Model_No'];
$start_date = $_POST['START_DATE'];
$end_date = $_POST['END_DATE'];


$product_id = get_product_id($con, 'UPS')[0]['ID'];
$serial_id = insert_new_serialId($con, $product_id, $serial_number);

$data = (object)array(
    'gem_no' => $gem_no,
    'gem_date' => $gem_date,
    'vendor_name' => $vendor_name,
    'brand_name' => $brand_name,
    'serial-id' => $serial_id,
    'model_no' => $model_no,
    'problem' => 0,
    'start_date' => $start_date,
    'end_date' => $end_date,
    'defunct' => 0,
    'is_amc' => 0,
    'e_waste' => 0
);

$response = assign_new_product($con, $data);

if ($response != -1) {
?>
    <h4>UPS is registered</h4>
<?php
}
