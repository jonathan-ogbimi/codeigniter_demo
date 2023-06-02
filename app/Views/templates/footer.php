</div>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/jquery.serializejson.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script>
    var application = new Vue({
        el: '#app',
        data: {
            assets: [],
            allData: '',
            myModel: false,
            actionButton: 'Insert',
            updateBtnLabel: 'Apply Changes',
            createBtnLabel: 'Create',
        },
        methods: {
            getAssets: function() {
                alert('Getting assets');
                var endpoint = "/api/asset";
                axios.get(endpoint).then(function(response) {
                    /* 
                    console.log(response.data);
                    application.allData = response.data;
                    */
                    application.allData = response.data;
                    assets = response.data;
                    console.log(assets);
                    //console.log(application.allData);
                });
            },
            openModel: function() {

            },
            createAsset: function(e) {
                var formData = $("form").serializeJSON();
                console.log(formData);
                var encoded = JSON.stringify(formData);
                var data = encoded;
                //alert(data);
                console.log(data);
                var endpoint = "/api/asset";
                axios.post(endpoint, data).then(function(response, e) {
                    alertify.alert('Status', 'Asset created successfully!', function(e) {

                        $("#asset_form").trigger("reset");
                    });
                });
                e.preventDefault();

            },
            updateAsset: function(e) {
                var formData = $("form").serializeJSON();
                console.log(formData);
                var encoded = JSON.stringify(formData);
                var data = encoded;
                //alert(data);
                console.log(data);
                var endpoint = "/api/asset";
                axios.put(endpoint, data).then(function(response, e) {
                    alertify.alert('Status', 'Asset updated successfully!', function(e) {

                    });
                });
                e.preventDefault();

            },
            fetchData: function(id) {

            },
            deleteData: function(id) {},
            created: function() {
                this.getAssets()
            },
            mounted: function() {
                this.getAssets()
            }
        }
    });
</script>
</body>

</html>