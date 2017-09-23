<?php

$conn=mysqli_connect("localhost","root","1234567890","feelfree");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$user_name=$_POST['name']	;
	$user_email=md5($_POST['email']);
	$user_pwd=$_POST['pwd'];
	//here query check weather if user already registered so can't register again.  
    $check_email_query="select * from register WHERE uemail='$user_email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
    if(mysqli_num_rows($run_query)>0)  
    {  
        echo "1";  
        exit();  
    }  
    //insert the user into the database.  
   
    $stmt=$conn->prepare("insert into register (uemail,upwd,uname) VALUES (?,?,?)");
    $stmt->bind_param("sss",$user_email,$user_pwd,$user_name);
    $reg=$stmt->execute();
    if($reg)  
    {  
        echo "2"; 
        exit();
       # echo "<script type="text/javascript">location.href = 'index.html'</script>";
    } 
    echo "Some Internal Problem Occured Please contact administrator!!";
    exit();
    }


?>