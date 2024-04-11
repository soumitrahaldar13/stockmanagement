<?php

function run_query($query, $con)
{
    $query = mysqli_query($con, $query);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function get_product_details_by_empId($con, $empId)
{
    $sql_query = "SELECT * FROM ip as ip JOIN user as u JOIN product_add prdAdd ON u.id = ip.ID AND ip.IP = prdAdd.IP WHERE u.emp_id ='{$empId}'";
    return run_query($sql_query, $con);
}

function get_all_ips_by_empId($con, $empId)
{
    $sql_query = "SELECT * from ip JOIN user ON user.ip_id=ip.ID AND user.emp_id='{$empId}'";
    return run_query($sql_query, $con);
}

function get_all_non_used_ips($con)
{
    $sql_query = "SELECT * from ip where in_use = 0";
    return run_query($sql_query, $con);
}

function get_all_products($con)
{
    $sql_query = "SELECT * from product ORDER BY NAME";
    return run_query($sql_query, $con);
}
