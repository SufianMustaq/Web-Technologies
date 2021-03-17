<?php  
session_start();  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View Profile</title>
    <style>
    .r {
        display: flex;
    }

    .pp img {
        height: 300px;
    }

    .pp {
        margin: auto;
        padding: 1rem;
    }

    .Info {

        font-family: Arial, Helvetica, sans-serif';
        font-size: 100px;
        margin-top: 5rem;
        margin-left: 6rem;
        padding: 1rem;
    }

    .pro {
        display: inline-grid;
        width: 100px;
        grid-template-columns: 600px 1000px;
        grid-template-rows: 34rem;


    }

    fieldset {
        padding: 2rem;
        background-color: whitesmoke;
        block-size: 32rem;
        border: 2px solid;
    }

    .Info a,
    /* using , we can css 2 div at a time similarly*/
    .pp a {
        font-size:25px;

        font-style: italic;
        padding: 1rem;
    }
    </style>
</head>

<body>

    <?php include './common/header.php';
    include './common/footer.php';?>

    <div class="pro">

        <div class="left">

            <?php include './common/Account.php';?>
        </div>
        <div class="Reg">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!--fieldset is for creating a specific section box where  -->
                <fieldset>
                    <!--legend is name of fieldset-->
                    <legend> PROFILE:</legend>
                    <div class="r">
                        <div class="Info">
                            <?php  
                            if(isset($_SESSION["Sname"])){              
                        echo "Name:          " .$_SESSION["Sname"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Name:          <br> <hr>";
                            }
                            if(isset($_SESSION["Semail"])){      
                        echo "Email:         " .$_SESSION["Semail"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Email:         <br> <hr>";
                            }
                            if(isset($_SESSION["Sgender"])){ 
                        echo "Gender:        " .$_SESSION["Sgender"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Gender:        <br> <hr>";
                            }
                            if(isset($_SESSION["Sdob"])){ 
                        echo "Dath of Birth: " .$_SESSION["Sdob"] ."<br> <hr>";//"using session from registration.php
                            }
                            else{
                                echo "Dath of Birth: <br> <hr>";
                            }
                       
                        ?>

                        </div>
                        <div class="pp">
                            <img src="./page2/pic/mypic.jpeg" alt=""> <br>
                           
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>