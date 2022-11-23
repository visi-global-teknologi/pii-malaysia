$(document).ready(function (e) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    $("#form-message").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() {
                $("#btnSubmit").attr("disabled", true);
            },
            success: function(response) {
                $('#btnSubmit').attr("disabled", false);
                Swal.fire("Good job!", response.message, "success");
                setTimeout("location.reload(true);", 2000);
            },
            error: function (xhr, error, code) {
                $('#btnSubmit').attr("disabled", false);
                var err = eval("(" + xhr.responseText + ")");
                Swal.fire({
                    html: "<strong>Oops!</strong> " + err.message,
                });
            },
        });
    });
});
