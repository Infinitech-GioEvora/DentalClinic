$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    $.ajax({
        url: "/admin/dashboard-data/",
        method: 'GET',
        success: function (res) {
           display_dashboard(res)
        },
        error: function (res) {

        },
    })    
})

function display_dashboard(res) {
    console.log(res)

    var keys = ["All", "Accepted", "Declined", "Pending"]
    var counts = $('.count')

    for (var count of counts) {
        for (var key of keys) {
            if ($(count).find("span").text() == key) {
                $(count).find("h3").html(res[key.toLowerCase()])
            }
        }
    }

}