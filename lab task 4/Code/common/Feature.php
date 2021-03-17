<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
    .left {
        margin-left: 5rem;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 30px;
    }

    nav {

        margin-top: 1rem;
        min-height: 10vh;
        width: 30rem;

        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 0px;
    }

    li {
        block-size: 2rem;

    }
    </style>
</head>

<body>
    <div class=Feature">
        <nav>
            <fieldset>
                <h1>Feature</h1>
                <hr>
                <div class="left">

                    <?php
                   
                    echo "<a href='index.php'>Dashboard</a> <br> <br> 
                        <a href='viewprofile.php'>>View Profile</a> <br><br>
                        <a href='changepassword.php'>>Change password</a> <br><br>
                        <a href='logout.php'>>Logout</a>"
                       
                    ?>
                </div>
            </fieldset>
        </nav>

    </div>

</body>


</html>