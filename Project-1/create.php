<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD' === 'POST']) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    // Prepare the SQL statement
    $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
                    VALUES (:title, :image, :description, :price, :date)");

    // Bind the parameters to the statement
    $statement->bindValue(':title', $title);
    $statement->bindValue(':image', '');
    $statement->bindValue(':description', $description);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);

    // Execute the statement
    $statement->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Product</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    
    <div class="container">
        <h1 class="my-3">Create New Product</h1>
         <form action="create.php" method="post">
                <div class="form-group">
                    <label>Product Image</label>
                    <br>
                    <input type="file" name="image">
                </div> 
                <div class="form-group">
                    <label>Product Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea  class="form-control" name="description"></textarea>
                </div>
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" step="0.01"  name="price" class="form-control">
                </div>

        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
    </div>
   

</body>
</html>