<?php
    include("config/db_connect.php");

    //write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make query & get results
    $result = mysqli_query($connect, $sql);

    //fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($connect );

    // print_r($pizzas);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include "./templates/header.php" ?>
    <h4 class="center grey-text">Pizzas!</h4>
    <div class="container">
        <div class="row">
            <?php foreach($pizzas as $pizza){ ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                            <div>
                                <ul>
                                    <?php 
                                    $ingredients = explode(',', $pizza['ingredients']);
                                    foreach($ingredients as $ingredient){
                                        echo "<li>" . htmlspecialchars($ingredient) . "</li>";
                                    }
                                ?>
                                </ul>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <a href="details.php?id=<?php echo $pizza['id']?>" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>   

        </div>
    </div>    

    <?php include "./templates/footer.php" ?>
</html>