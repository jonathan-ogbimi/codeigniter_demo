$(document).ready(function () {
    $('.ireport').DataTable();
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