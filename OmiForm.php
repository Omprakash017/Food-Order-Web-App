<?php
$Name_host='localhost';
$user_name='root';
$data_bas='omifoodform';
$passwor='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // $Si_no=$_POST['siral'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $state=$_POST['state'];
    $age=$_POST['age'];
    $massage=$_POST['massage'];
}
$con=mysqli_connect($Name_host,$user_name,$passwor,$data_bas);
if($con){
    // echo "Connection success";
    $sql="insert  into `data`(name,phone,email ,state,age,massage) values('$name','$phone','$email','$state','$age','$massage')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "data inserted successfuly";
    }
}
else{
    // die(mysqli_error($con));
    echo "ERROR!!!!!!!";
}
?>