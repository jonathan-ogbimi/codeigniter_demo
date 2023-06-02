$(document).ready(function () {
    $('.ireport').DataTable();
});

var application = new Vue({
    el: '#app',
    data: {
        allData: '',
        myModel: false,
        actionButton: 'Insert',
        updateBtnLabel: 'Apply Changes',
        createBtnLabel: 'Create',
    },
    methods: {
        fetchAllData: function () {
           alert('Fetching data');
        },
        openModel: function () {
            
        },
        createAsset: function (e) {
            var formData = $("form").serializeJSON();
            console.log(formData);
            var encoded = JSON.stringify(formData);
            var data = encoded;
            //alert(data);
            console.log(data);
            var endpoint = "/api/asset";
            axios.post(endpoint, data).then(function (response,e) {
                alertify.alert('Status', 'Asset created successfully!', function (e) {
                                      
                    $("#asset_form").trigger("reset");
                });
            });
            e.preventDefault();
            
        },
        updateAsset: function (e) {
            var formData = $("form").serializeJSON();
            console.log(formData);
            var encoded = JSON.stringify(formData);
            var data = encoded;
            //alert(data);
            console.log(data);
            var endpoint = "/api/asset";
            axios.put(endpoint, data).then(function (response,e) {
                alertify.alert('Status', 'Asset updated successfully!', function (e) {
                   
                });
            });
            e.preventDefault();
            
        },
        fetchData: function (id) {
           
        },
        deleteData: function (id) {
        },
        created: function () {
            this.fetchAllData();
        }
    }
});


if ($("#add_create").length > 0) {
    $("#add_create").validate({
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