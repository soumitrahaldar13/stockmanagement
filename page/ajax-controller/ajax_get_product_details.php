<?php
require_once __DIR__ . '/../../dbConnection/dbConnection.php';
require_once __DIR__ . '/../../helpers/query_helpers.php';

if (!empty($_POST["empCode"])) {
    $emp_code = $_POST["empCode"];
    $rows = get_product_details_by_empId($con, $emp_code);
    if (count($rows) == 0) {
?>
        <h4 class='no-result'>No Data Found!!</h4>`
    <?php } else {
        $user_details = $rows[0];
    ?>

        <h4>User details</h4>
        <table class='table-width'>
            <thead class='table-header cell-style'>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Designation</th>
                    <th>Cell</th>
                    <th>Floor</th>
                </tr>
            </thead>
            <tbody class='cell-style'>
                <tr>
                    <td><?php echo $user_details['NAME']; ?></td>
                    <td> <?php echo $user_details['MOBILE_NO']; ?></td>
                    <td> <?php echo $user_details['DESIGNATION']; ?></td>
                    <td> <?php echo $user_details['CELL']; ?></td>
                    <td> <?php echo $user_details['FLOOR_NO']; ?></td>
                </tr>
            </tbody>
        </table>
        <h4>Products in use</h4>
        <table class='table-width'>
            <thead class='table-header cell-style'>
                <tr>
                    <th>IP Address</th>
                    <th>Name</th>
                    <th>Serial Number</th>
                </tr>
            </thead>
            <tbody class='cell-style'>
                <?php
                foreach ($rows as $i) {
                ?>
                    <tr>

                        <td><?php echo $i['IP'] ?></td>
                        <td><?php echo $i['PRODUCT NAME'] ?></td>
                        <td><?php echo $i['SERIAL_NO'] ?></td>
                    </tr>
                <?php
                } ?>
            </tbody>
        </table>
    <?php
    }
    // if the employee code is empty
} else {
    ?>
    <h4 class='no-result'>Emp code cannot be empty</h4>
<?php
}
