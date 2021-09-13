<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      CUSTOMER-LIST
    </div>
    <div class="card-body">
      <a href="index.php?page=customer-create" type="button" class="btn btn-primary mb-3">Add New Customer</a>


      <table class="table">
        <thead>

          <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($customers as $customer) : ?>
            <tr>
              <th><?php echo $customer['id'] ?></th>
              <td><?php echo $customer['name'] ?></td>
              <td><?php echo $customer['email'] ?></td>
              <td><?php echo $customer['address'] ?></td>
              <td><?php echo $customer['phone'] ?></td>
              <td><a href="index.php?page=customer-update&id=<?php echo $customer['id'] ?>" type="button" class="btn btn-warning">Edit</a></td>
              <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=customer-delete&id=<?php echo $customer['id'] ?>" type="button" class="btn btn-danger">Delete</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>