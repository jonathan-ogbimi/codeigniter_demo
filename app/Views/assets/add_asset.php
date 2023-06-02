<div class="form container mt-5">
        <form id="asset_form" name="asset_form">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Installation Year</label>
                <input type="text" id="installation_year" name="installation_year" class="form-control">
            </div>
            <div class="form-group">
                <label>Expected Useful Life</label>
                <input type="text" id="expected_useful_life" name="expected_useful_life" class="form-control">
            </div>
            <div class="form-group">
                <label>Renewal Year</label>
                <input type="text" id="renewal_year" name="renewal_year" class="form-control">
            </div>
            <div class="form-group">
                <label>Condition</label>
                <input type="text" id="condition" name="condition" class="form-control">
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" id="quantity" name="quantity" class="form-control">
            </div>
            <div class="form-group">
                <label>Unit Cost</label>
                <input type="text" id="unit_cost" name="unit_cost" class="form-control">
            </div>
            <div class="form-group">
                <label>Estimated Cost</label>
                <input type="text" id="estimated_cost" name="estimated_cost" class="form-control">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" @click="createAsset">{{ createBtnLabel }} Asset</button>
            </div>
        </form>
</div>