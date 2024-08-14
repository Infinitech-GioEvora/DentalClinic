$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    $('.contact-form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: `/submit/inquiry`,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                // console.log(res);
                $(`.contactForm`).trigger("reset");
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

   
})





