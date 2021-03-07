<!DOCTYPE html>
<html>

<head>
    <style>
    .Uploadlogo img {
        height: 200px;
    }
    .propic {
        width: 100px;
    }
    </style>
    <title>Profile Picture</title>
</head>

<body>
    <div class="propic">
        <form action="page2.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><B>PROFILE PICTURE</B></legend> <br>
                <div class="Uploadlogo">
                    <img src="Uploadlogo.png"><br><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <br>
                <hr>
                <input type="submit" name="submit">
        </form>
        </fieldset>
    </div>
</body>
</html>