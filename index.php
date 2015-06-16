<?php
include 'database.php';

$sql = "SELECT * FROM shout ORDER BY id DESC";
$query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Shout-Box</title>    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
        <div id="container">
            <header>
                <h1>Tell us now</h1>
            </header>
            <div id="shouts">
                <ul>
                    <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                        <li class="shout">
<span><i><?php echo $row['time']; ?></i> - </span>
<strong><?php echo $row['user']; ?></strong> -  
<?php echo $row['message']; ?>
                        </li>
                    <?php endwhile; ?>               
                </ul>
            </div>
            <div id="input">
                <?php if (isset($_GET['error'])) : ?>
                    <div class="error"><?php $_GET['error']; ?></div>
                <?php endif; ?>

                <form action="process.php" method="post">
                    <input id="id1" class="form-control" type="text" name="user" placeholder="Enter your name..." required >
                    <input id="id2" class="form-control" type="text" name="message" placeholder="Enter a message..." required>
                    <br><br>
                    <input type="submit" name="submit" class="form-control btn btn-primary" value="submit">
                </form>
            </div>
        </div>  
    </body>

</html>