<?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
        // var_dump($products);
    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poduct List</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">Products CRUD</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach ($products as $i => $product) {?>
    <tr>
      <th scope="row"><?php echo $i + 1?></th>
      <td></td>
      <td><?php echo $product['title']?></td>
      <td><?php echo $product['price']?></td>
      <td><?php echo $product['create_date']?></td>
      <td>
        <button class="btn btn-outline-primary">Edit</button>
        <button class="btn btn-outline-danger">Delete</button>
      </td>
    </tr>
   <?php }?>
  </tbody>
</table>
</body>
</html>