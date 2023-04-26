<?php
include('config/db_connect.php');

if(isset($_POST['delete'])){
    $idToDelete = mysqli_real_escape_string($connect, $_POST['deleteId']);
    $sql = "DELETE FROM pizzas WHERE id = $idToDelete";
    if(mysqli_query($connect, $sql)){
        header('Location: index.php');
    }else{
        echo 'Query error' . mysqli_error($connect);
    }
}

//Check get request id parameter
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);

    //Query database
    $sql = "SELECT * FROM pizzas WHERE id = $id"; 
    //Get the query result
    $result = mysqli_query($connect, $sql);

    //Fetch result in array format
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($connect);

    // print_r($pizza);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "./templates/header.php" ?>

<div class="container center">
    <?php if ($pizza): ?>
            <h4>Title: <?php echo htmlspecialchars($pizza['title']); ?></h4>
            <p>Created by: <?php echo htmlspecialchars($pizza['email']); ?></p>
            <p>Created at: <?php echo htmlspecialchars($pizza['created_at']); ?></p>
            <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>

            <!--Delete form -->
            <form action="details.php" method="POST">
                <input type="hidden", name="deleteId" value="<?php echo $pizza['id'] ?>">
                <input type="submit" name="delete" value="Delete" class="btn brand">
            </form>    

        <?php else: ?>
                <?php echo "<h5>No pizza record</h5>"; ?>
    <?php endif; ?>    
</div>

<?php include "./templates/footer.php" ?>
</html>