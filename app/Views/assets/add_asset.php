<!DOCTYPE html>
<html>

<head>
    <title>Add Asset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
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
        <form method="post" id="add_create" name="add_create" action="<?= site_url('/create-asset') ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" id= "name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" onclick="add_asset()">Create Asset</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        function add_asset() {
            
            var name = $( "#name" ).val();
            var description = $( "#description" ).val();
            //alert('Adding asset..'+name);
           //var js_obj = {plugin: 'jquery-json', version: 2.3};
           var encoded = JSON.stringify({
            name: name,
            description: description
           } );
           var data = encoded;
           //alert(data);
           console.log(data);
           $.ajax({
            url: 'http://localhost:8080/index.php/api/asset',
            contentType: "application/json",
            dataType: 'json',
            type: "POST",
            data: data,
            success: function(result){
                alertify.alert('Status', 'Asset created successfully!', function(){ 
                    //alertify.success('Ok'); 
                    $( "#name" ).val();
                    $( "#description" ).val();
                });
            }
        });
        }
        /*
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
        */
    </script>
</body>

</html>