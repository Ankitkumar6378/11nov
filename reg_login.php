<?php  
    include_once('invoice.php');  
    //  $funObj = new Invoice(); 
     $funObjj = new Invoice(); 
    if(!empty($_POST['register'])){  
        $username = $_POST['first_name']; 
        $lastname = $_POST['last_name'];
        $mobile = $_POST['mobile']; 
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $address = $_POST['address'];  
        $city = $_POST['city']; 
        
       $email = $funObjj-> checkDublicacy($username,$lastname,$email, $password, $mobile,$address,$city); 
     
      
    
}
?>