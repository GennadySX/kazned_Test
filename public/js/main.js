


$(document).ready(function () {



    $(".btn").click(function(){
        $.ajax( {
            // url:'/settings/profile',
            url:'/dbc',
            method:'post',
            data: {
                email: $('#inputAddress').val(),
                dateFrom: $('#dateFrom').val(),
               dateUntil: $('#dateUntil').val()
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token" ]').attr('content')
            },
            success: function(data ) {
                $('.placeAjax ').html(data);

            }
    });
});
    $('form').submit(function(e){ e.preventDefault(); });
});
