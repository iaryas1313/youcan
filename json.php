<?php
include 'config.php';
$sql="select * from customer";
$res= mysqli_query($conn,$sql);
$data=array();
while($row=mysqli_fetch_array($res))
{

    $data[]=array(
    'id'=>$row["id"],
    'name'=>$row["fname"],
    'phone'=>$row["phone"],
    'email'=>$row["email"],
    'psw'=>$row["password"]); 

}
echo json_encode($data,JSON_PRETTY_PRINT);
$jf=fopen("json_file.json","w");
fwrite($jf,json_encode($data));
fclose($jf);




?>