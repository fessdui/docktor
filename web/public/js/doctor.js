/**
 * Created by fess on 21.07.18.
 */
$(document).ready(function (){

    $('#leave-order').on('click', function(e){
        e.preventDefault();
        $('.leave-order').addClass('leave-order-show')
    });


    $( "form" ).on( "submit", function( event ) {
        event.preventDefault();

        $.post( "/place",
            $( this ).serialize(),
            function(data) {
                console.log(data.message);
                if (data.errors == false) {
                    $('form')[0].reset();

                    $('#form-message').html(data.message).removeClass('alert-danger').addClass('alert-success').show();
                } else {
                    var message = false;

                    $.each(data.message, function(k, v) {

                        if (!message) {
                            message = v;
                        } else {
                            message += ' <br>' + v;
                        }
                    });

                    $('#form-message').show().html(message).removeClass('alert-success').addClass('alert-danger');
                }

                $('#form-message').stop(true,true).fadeOut(6000).delay(2500);

            })
    });

});