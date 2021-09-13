<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                ADD NEW PRODUCT
            </div>
            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="product-name">Name</label>
                        <input type="text" class="form-control" id="product-name" name="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="product-price">Price</label>
                        <input type="text" class="form-control" id="product-price" name="price" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="product-image">Image</label>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        
                    </div>


                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

