/**
 * Created by apak on 12.01.17.
 */
$( document ).ready(function() {
    $('.variant').click(function(){
        if($( this ).hasClass('select')){
            $(this).addClass('btn-success');
            $('#next').show();
            return;
        }

        $(this).addClass('btn-danger');
    });

    $('#next').hide();

    $('#next').click(function(){
        location.reload();
    });
});