<?php
require_once __DIR__ . '/../../dbConnection/dbConnection.php';
require_once __DIR__ . '/../../helpers/query_helpers.php';


if (!isset($_POST['empCode'])) {
?>
    <h4 class='no-result'>Emp code cannot be empty</h4>

<?php
} else {
    $ip_list = [];
    $ip_ids = [];
    $emp_code = $_POST['empCode'];
    $result = get_all_ips_by_empId($con, $emp_code);
    foreach ($result as $i) {
        array_push($ip_list, $i['IP'] . '*');
        array_push($ip_ids, $i['ID']);
    }
    $result = get_all_non_used_ips($con);
    foreach ($result as $i) {
        array_push($ip_list, $i['IP']);
        array_push($ip_ids, $i['ID']);
    }
?>
    <label for="ip-dropdown">Select IP </label>
    <select id='ip-dropdown'>
        <option value="">Select IP from List</option>
        <?php
        for ($i = 0; $i < count($ip_list); $i++) {
        ?>
            <option value="<?php echo $ip_ids[$i] ?>"><?php echo $ip_list[$i] ?></option>
        <?php
        }
        ?>
    </select>
<?php
}
?>