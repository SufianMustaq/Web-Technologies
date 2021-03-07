<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    .login {
        width: 60%;
        background-color: coral;
    }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <?php 
    
    $nameErr = $passwordErr = $newPasswordErr =  $currentPasswordErr = "" ;
    $password = $name = $newPassword = $currentPassword = "";
    $nc =strlen($name);
    $pc =strlen($password);
    
     
          

    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="login">
            <fieldset>
                <legend>Login</legend>


                <div class="username">

                    <div class="name">

                        Name: <input type="text" name="name">
                        <span class="error"> <?php echo $nameErr;?></span>
                        <br><br>

                    </div>
                    <div class="password">

                        password: <input type="password" name="password">
                        <span class="error"> <?php echo $passwordErr;?></span>
                        <br><br>
                    </div>
                    <hr>
                    <input type="checkbox" name="Remember_me"> Remember me <br>

                    <input type="submit" name="submit" value="Submit"> 

                </div>
            </fieldset>
    </form>
    <form>
        <div class="newpassword">
            <h1>Change Password.</h1>
            <div class="newPassword">

                Current password: <input type="password" name="currentPassword">
                <br><br>
                <span >New password: </span> <input type="password" name="password">
                <span class="error"> <?php echo $passwordErr;?></span>
                <br><br>
                <span >Retype password: </span> <input type="password" name="newPasswordErr">
                <span class="error"> </span>
                <br><br>
            </div>
            <hr>
            <input type="submit" name="submit" value="Submit">

        </div>
        </div>
    </form>






</body>

</html>