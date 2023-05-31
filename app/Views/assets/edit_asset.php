<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD - Edit User Demo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" id="update_asset" name="update_asset" 
    action="<?= site_url('/update-asset') ?>">
      <input type="hidden" name="id" id="id" value="<?php echo $asset_obj['id']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $asset_obj['name']; ?>">
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea name="description" class="form-control"><?php echo $asset_obj['description']; ?></textarea>
      </div>
      <div class="form-group">
        <label>Installation Year</label>
        <input type="text" name="installation_year" class="form-control" value="<?php echo $asset_obj['installation_year']; ?>">
      </div>
      <div class="form-group">
        <label>Expected Useful Life</label>
        <input type="text" name="expected_useful_life" class="form-control" value="<?php echo $asset_obj['expected_useful_life']; ?>">
      </div>
      <div class="form-group">
        <label>Renewal Year</label>
        <input type="text" name="renewal_year" class="form-control" value="<?php echo $asset_obj['renewal_year']; ?>">
      </div>
      <div class="form-group">
        <label>Condition</label>
        <input type="text" name="condition" class="form-control" value="<?php echo $asset_obj['condition']; ?>">
      </div>
      <div class="form-group">
        <label>Quantity</label>
        <input type="text" name="quantity" class="form-control" value="<?php echo $asset_obj['quantity']; ?>">
      </div>
      <div class="form-group">
        <label>Unit Cost</label>
        <input type="text" name="unit_cost" class="form-control" value="<?php echo $asset_obj['unit_cost']; ?>">
      </div>
      <div class="form-group">
        <label>Estimated Cost</label>
        <input type="text" name="estimated_cost" class="form-control" value="<?php echo $asset_obj['estimated_cost']; ?>">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Update Asset</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>
</html>