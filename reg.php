<?php  
    include_once('invoice.php');  
     $funObj = new Invoice(); 
    if(!empty($_POST['register'])){  
        $username = $_POST['first_name']; 
        $phonenum = $_POST['mobile']; 
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $address = $_POST['address'];   
        
                $register = $funObj->UserRegister($username, $email, $password, $phonenum,$address);  
                if($register){  
                    header("Location: index.php" );
                }else{  
                    echo "Registration Not Successful!!!"; 
                    }

    }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <script src="https://kit.fontawesome.com/9940f932ad.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container ">
        <header>
            <h1 class="text-center pt-5 ">Registration Form </h1>
        </header>
        <section>
            <div>
                <hr>
                <div id="register">
                    <form name="login" method="post" action="">
                        <div class="form-group">
                            <label for="usernamesignup" data-icon="u">First name</label>
                            <input class="form-control" id="usernamesignup" name="first_name" type="text"
                                placeholder="Abc123" />
                        </div>
                        <div class="form-group">
                            <label for="emailsignup" data-icon="e"> Your email</label>
                            <input class="form-control" id="emailsignup" name="email" type="email"
                                placeholder="Abc@gmail.com" />
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emailsignup" data-icon="e">Address</label>
                            <input class="form-control" id="addresssignup" name="address" type="text"
                                placeholder="address with pin code" />
                        </div>
                </div>
                <div class="form-group">
                    <label for="PhoneNum" data-icon="p">Phone Number</label>
                    <input class="form-control" id="phonenum" name="mobile" type="number" placeholder="eg. phone number" />
                </div>
                <div class="form-group">
                    <label for="passwordsignup" data-icon="p">Your password </label>
                    <input class="form-control" id="passwordsignup" name="password" type="password"
                        placeholder="eg. Abc@1" />
                </div>

                <button type="submit" name="register" value="Sign up" class="btn btn-outline-primary bttn">Sign
                    up</button>
                <p>
                    Already a member ?
                    <a href="home.php" class="to_register"> Go and log in </a>
                </p>
                </form>
            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    
</body>

</html>