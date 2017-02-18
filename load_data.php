<?php
include_once('db.php');
$sql_city = "SELECT * FROM tbl_city";
$result = mysqli_query($conn, $sql_city);

$city_drp='';
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
        $city_drp.='<option style="display:none" value="'.$row['city_Id'].'" class="'.$row['state_id'].'">'.$row['city_name'].'</option>';
    }
}

$sql_state = "SELECT * FROM tbl_state";
$result = mysqli_query($conn, $sql_state);

$state_drp='';
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
        $state_drp.='<option value="'.$row['state_id'].'" class="'.$row['state_id'].'" >'.$row['state_name'].'</option>';
    }
}

$sql_dep = "SELECT * FROM tbl_department";
$result = mysqli_query($conn, $sql_dep);

$dep_drp='';
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
        $dep_drp.='<option value="'.$row['dept_id'].'">'.$row['dept_name'].'</option>';
    }
}

$sql_report = "SELECT emp_name,dept_name,Salary,gender,city_name,state_name,address
FROM tbl_employee as emp 
INNER JOIN tbl_department as dept ON dept.dept_id = emp.dept_id
INNER JOIN tbl_city as ct ON ct.city_id = emp.city_id
INNER JOIN tbl_state as sta ON sta.state_id = ct.state_id
ORDER by emp_id desc";

$result = mysqli_query($conn, $sql_report);

$report_data='';

$count=1;
$class='';
if (mysqli_num_rows($result) > 0) 
{
    while($row = mysqli_fetch_assoc($result)) {
        
        if($count==1)
        {
            $class="odd";
            $count=0;
        }
        else
        {
            $class="even";
            $count=1;
        }
            
        $report_data.='<tr role="row" class="'.$class.'">
                <td>'.$row['emp_name'].'</td>
                <td>'.$row['dept_name'].'</td>
                <td>'.$row['Salary'].'</td>
                <td>'.$row['gender'].'</td>
                <td>'.$row['city_name'].'</td>
                <td>'.$row['state_name'].'</td>
                <td>'.$row['address'].'</td>
            </tr>';
    }
}

?>
