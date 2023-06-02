
  <div class="container mt-5 form">
    <form  id="update_asset" name="update_asset" @submit.prevent="updateAsset">
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
        <button @click="updateAsset" class="btn btn-danger btn-block">{{ updateBtnLabel }}</button>
      </div>
    </form>
  </div>