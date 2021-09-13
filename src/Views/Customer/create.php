<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD NEW CUSTOMER
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group">
                    <label for="customer-name">Name</label>
                    <input type="text" class="form-control" id="customer-name" name = "name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="customer-email">Email</label>
                    <input type="text" class="form-control" id="customer-email" name="email" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="customer-address">Address</label>
                    <input type="text" class="form-control" id="customer-address" name="address" placeholder="Enter address">
                </div>

                <div class="form-group">
                    <label for="customer-phone">Phone</label>
                    <input type="text" class="form-control" id="customer-phone" name="phone" placeholder="Enter phone"></input>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="index.php?page=customer-list" type="button" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>