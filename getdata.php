<?php
include_once('db.php');
if($_POST['action']=="registration")
{
    $sql_query="INSERT INTO tbl_employee (emp_name,gender,salary,dept_id,address,city_id,date_created)"
        . "Values ('".$_POST['empname']."','".$_POST['gender']."','".$_POST['salary']."','".$_POST['deptdrp']."','".$_POST['address']."','".$_POST['deptcity']."',CURRENT_TIMESTAMP())";

    if(mysqli_query($conn, $sql_query))
    {
        echo 'New Record inserted Succesfully';
    }
    else
    {
        echo 'Processing error......';
    }
}
else if($_POST['action']=="report")
{
   
    $sql_report='';$sql_query='';
    $sql_report .= 'SELECT emp_name,dept_name,Salary,gender,city_name,state_name,address
    FROM tbl_employee as emp 
    INNER JOIN tbl_department as dept ON dept.dept_id = emp.dept_id
    INNER JOIN tbl_city as ct ON ct.city_id = emp.city_id
    INNER JOIN tbl_state as sta ON sta.state_id = ct.state_id';
    
    
    
    
     if($_POST['deptcity']!='' )
    {
        $sql_query.= 'AND ct.city_id="'.$_POST['deptcity'].'"';
    }
    if($_POST['empname']!='' )
    {
        $sql_query.= 'AND emp_name="'.$_POST['empname'].'"';
    }
    if($_POST['state']!='' )
    {
        $sql_query.= 'AND sta.state_id="'.$_POST['state'].'"';
    }
    if($_POST['dept']!='' )
    {
        $sql_query.= 'AND dept.dept_id="'.$_POST['dept'].'"';
    }
    
    if($sql_query=='')
    {
         $sql_report .= ' ORDER by emp_id desc';
    }
    else
    {
         $sql_report .= ' WHERE '.substr($sql_query,4).'ORDER by emp_id desc';
    }
    
    
   echo $sql_report;

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
    
    echo $report_data;
}
else if($_POST['action']=='chart')
{
    $sql_city = "select sum(salary) as total ,dept.dept_name from tbl_employee as emp 
    inner join tbl_department as dept on dept.dept_id=emp.dept_id
    group by dept.dept_id";
    $result = mysqli_query($conn, $sql_city);

    $data=array();
    if (mysqli_num_rows($result) > 0) 
    {
        while($row = mysqli_fetch_assoc($result)) {
            array_push($data,$row);
        }
    }

    $chart_data=  json_encode($data);
    print_r($chart_data);
}

mysqli_close($conn);

?>
