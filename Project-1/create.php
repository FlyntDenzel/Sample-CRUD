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
         <form>
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file">
                </div> 
                <div class="form-group">
                    <label>Product Title</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <textarea  class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" step="0.01" class="form-control">
                </div>
        <button type="submit" class="btn btn-primary my-3">Submit</button>
    </form>
    </div>
   

</body>
</html>