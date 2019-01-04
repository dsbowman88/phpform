<?php


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="fname" id="fname">
        <input type="text" name="lname" id="lname">
        <input type="tel" name="phone" id="phone">
        <input type="email" name="email" id="email">
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    </form>

</body>
</html>