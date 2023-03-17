<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        echo "Hello World";
        ?>;
    </title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="container">
        <form action="index.php" method="POST" class="my-form">
            <label for="inputname">Name:</label>
            <input type="text" name="inputname" id="inputname">
            <label for="inputage">Age:</label>
            <input type="text" name="inputage" id="inputage">
            <div class="button-container">
                <input type="submit" name="submit" value="Verify">

            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST["inputname"];
            $age = $_POST["inputage"];
            if ($age >= 18) {
                echo "<div class='output'>Hello, <span>$name</span> you are an adult.</div>";
            } else {
                echo "<div class='output'>Hello, <span>$name</span> you are a minor.</div>";
            }
        }
        ?>
    </div>
</body>

</html>