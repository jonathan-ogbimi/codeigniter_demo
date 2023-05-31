<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Assets</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/add-asset') ?>" class="btn btn-success mb-2">Add Asset</a>
        &nbsp;
        <a href="<?php echo site_url('/users') ?>" class="btn btn-success mb-2">Manage Users</a>
        &nbsp;
        <a href="<?php echo site_url('/logout') ?>" class="btn btn-success mb-2">Logout</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Asset Id</th>
             <th>Name</th>
             <th>Description</th>
             <th>Installation Year</th>
             <th>Expected Useful Life</th>
             <th>Renewal Year</th>
             <th>Condition</th>
             <th>Quantity</th>
             <th>Unit Cost</th>
             <th>Estimated Cost</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($assets): ?>
          <?php foreach($assets as $asset): ?>
          <tr>
             <td><?php echo $asset['id']; ?></td>
             <td><?php echo $asset['name']; ?></td>
             <td><?php echo $asset['description']; ?></td>
             <td><?php echo $asset['installation_year']; ?></td>
             <td><?php echo $asset['expected_useful_life']; ?></td>
             <td><?php echo $asset['renewal_year']; ?></td>
             <td><?php echo $asset['condition']; ?></td>
             <td><?php echo $asset['quantity']; ?></td>
             <td><?php echo $asset['unit_cost']; ?></td>
             <td><?php echo $asset['estimated_cost']; ?></td>
             <td>
              <a href="<?php echo base_url('edit-asset/'.$asset['id']);?>" class="btn btn-primary btn-sm">Edit</a>
              <a href="<?php echo base_url('delete-asset/'.$asset['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
      $('#users-list').DataTable();
  } );
</script>
</body>
</html>