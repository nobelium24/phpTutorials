<?php
echo $_SERVER["SERVER_NAME"] . '<br/>';
echo $_SERVER["REQUEST_METHOD"] . '<br/>';
echo $_SERVER["SCRIPT_FILENAME"] . '<br/>';
echo $_SERVER["PHP_SELF"] . '<br/>';

if (isset($_POST["submit"])) {
    //cookie for gender
    setcookie('gender' , $_POST['gender'], time() + 86400);

    //session for name
    session_start();
    $_SESSION['name'] = $_POST['name'];
    // echo $_SESSION["name"];
    header('Location: index.php'); 
}
?>




<!DOCTYPE html>
<html>
    <head>
        <title>php tuts </title>
    </head>
    <body>
        <form action= "<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <input type="text" name="name">
            <select name="gender">
                <option selected disabled>Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>