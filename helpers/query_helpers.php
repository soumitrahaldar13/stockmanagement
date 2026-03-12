<?php

function run_query($query, $con)
{
    $query = mysqli_query($con, $query);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function run_insert_query($query, $con)
{
    $is_inserted = mysqli_query($con, $query);
    return $is_inserted ? mysqli_insert_id($con) : -1;
}

function get_product_details_by_empId($con, $empId)
{
    //print(r);
    // SELECT * FROM ip as ip JOIN user as u JOIN product_add prdAdd ON u.emp_id = prdAdd.emp-code AND ip.IP = prdAdd.IP WHERE u.emp_id ='e-002';
    //SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.emp_code =
    $sql_query = "SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.emp_code = '{$empId}'";
    return run_query($sql_query, $con);
}

function get_all_ips_by_empId($con, $empId)
{
    //SELECT * from ip JOIN user ON user.ip_id=ip.ID AND user.emp_id=
    $sql_query = "SELECT * FROM product_add INNER JOIN ip ON product_add.IP = ip.ID LEFT JOIN user ON product_add.emp_code = user.emp_id WHERE product_add.emp_code = '{$empId}'";
    return run_query($sql_query, $con);
}
function get_all_non_used_ips($con)
{
    $sql_query = "SELECT * from ip where in_use = 0";
    return run_query($sql_query, $con);
}

function get_all_products($con)
{
    $sql_query = "SELECT * FROM `product`WHERE`ACTIVE`=2 ORDER BY `ID` ASC;";
    return run_query($sql_query, $con);
}
function get_all_products_serial_no($con, $product_name)
{
    $sql_query = "SELECT * FROM $product_name WHERE `ewaste`='0' AND `Delivery_Date`= '0000-00-00' ORDER BY `Serial_Number` DESC";
    return run_query($sql_query, $con);
}

function get_product_id($con, $table_name)
{
    $sql_query = "SELECT * from product WHERE NAME='{$table_name}'";
    return run_query($sql_query, $con);
}

function insert_new_serialId($con, $product_id, $serial_no)
{
    $sql_query = "INSERT INTO serial_no (`product_id`, `serial_no`) VALUES ($product_id, '{$serial_no}')";
    return run_insert_query($sql_query, $con);
}

function assign_new_product($con, $data)
{

    $data = (array)$data;
    $start_date =  empty($data['start_date']) ? "NULL" : $data['start_date'];
    $end_date =  empty($data['end_date']) ? "NULL" : $data['end_date'];

    $sql_query = "INSERT INTO ups(
        `GEM_NO`, 
        `GEM_Date`, 
        `VENDOR_NAME`, 
        `BRAND_NAME`, 
        `serial_id`, 
        `Model_No`, 
        `Problem`, 
        `START_DATE`, 
        `END_DATE`, 
        `Defunct`, 
        `is_amc`, 
        `ewaste`) 
        VALUES (
            '{$data['gem_no']}',
            '{$data['gem_date']}',
            '{$data['vendor_name']}',
            '{$data['brand_name']}',
             {$data['serial-id']},
            '{$data['model_no']}',             
            '{$data['problem']}',
            {$start_date},
            {$end_date},
            '{$data['defunt']}',
            '{$data['is_amc']}',
            '{$data['e_waste']}'
        )";

    return run_insert_query($sql_query, $con);
}
