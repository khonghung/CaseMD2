

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                UPDATE PRODUCT
            </div>
            <div class="card-body">
                <form method="post" >
                    <div class="form-group">
                        <label for="product-name">Name</label>
                        <input type="text" class="form-control" id="product-name" name="name" value = <?php echo $product['name']?> placeholder="Name">
                    </div>

                    <div class="form-group">
                        <label for="product-price">Price</label>
                        <input type="text" class="form-control" id="product-price" name="price" value = <?php echo $product['price']?> placeholder="Price">
                    </div>

                    <div class="form-group">
                        <label for="product-image">Image</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" >
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    <a href="index.php?page=product-list" type="button" class="btn btn-secondary">Cancel</a>
                  
                  </form>

            </div>
        </div>
    </div>





