$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    // start()

    $('.create-schedule').on('submit', function (e) {
    
        e.preventDefault();

        var date = $('.selected-date').text();
        var formData = new FormData(this);
        formData.append("date", date);

        $.ajax({
            url: `/submit/reservation`,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                toastr.success(res.msg);
                $('.create-schedule')[0].reset();
            },
            error: function (res) {
                console.log(res)
            }
        });
    })

   
})



// function start() {
//     var url_segments = location.href.split('/')
//     var page = url_segments[4]
//     if (page == 'view') { 
//         get_groups()
//         search('all') 
//     }
//     else if (page == 'edit') { get(url_segments[5]) }
// }





