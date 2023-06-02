
<div class="mt-3">
   <table class="table table-bordered ireport styled-table" id="users-list">
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
            <?php if ($assets) : ?>
               <?php foreach ($assets as $asset) : ?>
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
                        <a href="<?php echo base_url('edit-asset/' . $asset['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?php echo base_url('delete-asset/' . $asset['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                     </td>
                  </tr>
               <?php endforeach; ?>
            <?php endif; ?>
         </tbody>
   </table>
</div>


  