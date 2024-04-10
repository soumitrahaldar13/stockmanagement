<?php

function get_product_details_by_empId($con, $empId)
{
    $sql_query = "SELECT * FROM ip as ip JOIN user as u JOIN product_add prdAdd ON u.id = ip.ID AND ip.IP = prdAdd.IP WHERE u.emp_id ='{$empId}'";
    $query = mysqli_query($con, $sql_query);
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}
