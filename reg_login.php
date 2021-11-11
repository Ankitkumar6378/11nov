<?php  
    include_once('invoice.php');  
     $funObj = new Invoice(); 
    if(!empty($_POST['register'])){  
        $username = $_POST['first_name']; 
        $lastname = $_POST['last_name'];
        $phonenum = $_POST['mobile']; 
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $address = $_POST['address'];  
        $city = $_POST['city']; 
        
                $register = $funObj-> UserRegister($username,$lastname,$email, $password, $phonenum,$address,$city); 
                if($register){  
                    header("Location: home.php" );
                }else{  
                    echo "Registration Not Successful!!!"; 
                    }

    }
?>