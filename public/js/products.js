$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

//add button
$('#add').click(function () {
    $.ajax({
        type: "POST",
        url: 'product/store',
        data: {
            n: $('#n').val(),
            s: $('#s').val(),
            p: $('#p').val()
        }
    }).done(function (data) {
        //get the items
        $('#result').html(data);

        $.ajax({
            type: "GET",
            url: '/product/all'
        }).done(function (data) {
            $('#products').html(data);
        });
    });
});

//get all items
$( document ).ready(function() {
    $.ajax({
        type: "GET",
        url: '/product/all'
    }).done(function (data) {
        $('#products').html(data);
    });
});

