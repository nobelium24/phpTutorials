<?php
    include("config/db_connect.php");



    $email = $title = $ingredients = "";
    $errors = ['email'=>'', 'title'=>'', 'ingredients'=>''];

    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required';
        }else{
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email must be valid';
            }else{
                print_r($email);
            }
        };

        if(empty($_POST['title'])){
            $errors['title'] = 'Title is required';
        }else{
            $title = $_POST['title'];
            if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
                $errors['title'] = 'Title must be letters and spaces only';
            }else{
                print_r($title);
            }
        };

        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'Ingredient(s) is/are required';
        }else{
            $ingredients = $_POST['ingredients'];
            if (!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]*)*$/', $ingredients)) {
                $errors['ingredients'] = 'Ingredient(s) is/are not valid';
            }else{
                print_r($ingredients);
            }
        };
        if (array_filter($errors)) {
            // echo "Errors in the form";
        }else{
            // echo 'form is valid';
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $title = mysqli_real_escape_string($connect, $_POST['title']);
            $ingredients = mysqli_real_escape_string($connect, $_POST['ingredients']);

            //Create sql
            $sql = "INSERT INTO pizzas(title, email, ingredients) VALUES('$title', '$email', '$ingredients')";

            //Save to DB and check
            if(mysqli_query($connect, $sql)){
                header("Location:index.php");
            }else{
                echo "query_error: " . mysqli_error($connect);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./templates/header.php" ?>
<section class="container grey-text">
    <h4 class="center">Add a pizza</h4>
    <form class="white" action="add.php" method="post">
        <label for="">Email</label>
        <input value = "<?php echo htmlspecialchars($email) ?>" type="text" name="email">
        <p style="color:red;"><?php echo $errors['email'] ?></p>

        <label for="">Pizza title:</label>
        <input value = "<?php echo htmlspecialchars($title) ?>" type="text" name="title">
        <p style="color:red;"><?php echo $errors['title'] ?></p>

        <label for="">Ingredients (comma Separated:)</label>
        <input value = "<?php echo htmlspecialchars($ingredients) ?>" type="text" name="ingredients">
        <p style="color:red;"><?php echo $errors['ingredients'] ?></p>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>

</section>

<?php include "./templates/footer.php" ?>

</html>