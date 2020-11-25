<?php
	if(isset($_POST['guardar'])){
        header('Location: process.php');
        exit;
	}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud SQL</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container shadow p-3 mb-5 bg-white rounded">
        <h1>index.php</h1>
        <form action="" method="post">
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label for="modelo">text</label>
                    <input type="text" name="modelo" id="modelo" class="form-control">
                </div>
            </div>
            <div class="container">
                <div class="text-right">
                    <input type="submit" class="btn btn-primary" value="GO" name="guardar" />
                </div>
            </div>
            <hr />
        </form>




        <img class="d-block w-100" src="/img/pic3.png" alt="Third slide">
    </div>




    <?php
    
        $dsn = getenv('MYSQL_DSN');
        $user = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');

        if(!isset($dsn, $user) || false === $password){
            throw new Exception('set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
        }

        $db = new PDO($dsn, $user, $password);

        $statement = $db-> prepare("select * from aeropuerto");
        $statement-> execute();
        $all = $statement->fetchAll();

        

    ?>


    <div class="container shadow p-3 mb-5 bg-white rounded">
    <h1>database records:</h1>
        <ul class="list-group">

            <?php
                foreach($all as $data){

            ?>
            <li class="list-group-item"><?php echo $data["nombreAeropuerto"]; ?></li>
            <?php
                }

            ?>
        </ul>
    </div>
    
</body>



</html>