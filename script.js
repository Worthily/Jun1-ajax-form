$(document).ready(function (){
    $('#form-spinner').hide();

    $( "input[name='login']" ).focus(function (){
        $('#login-lable').css("color", "black");
    });
    $( "input[name='password']" ).focus(function (){
        $('#pass-lable').css("color", "black");
    });
    $( "input[name='repPassword']" ).focus(function (){
        $('#rep-pass-lable').css("color", "black");
    });

    $("#form").on("submit", function(){
        $('#form-sub-btn').prop('disabled', true);
        $('#form-spinner').show();
        $('#button-text').hide();
        $.ajax({
            url: 'handlers/handler.php',
            method: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            success: function(response){
                $('#form-spinner').hide();
                $('#button-text').show();
                alert('Ваша информация отправлена');
                $('#message').html(response.msg);
                $('#form-sub-btn').prop('disabled', false);
            },
            error: function (response) {

                $('#form-spinner').hide();
                $('#button-text').show();

                alert('Ошибка при отправке формы');

                $('#message').html(response.responseJSON.msg);

                if (response.responseJSON.formStatus == '2') {
                    $('#login-lable').css("color", "red");
                } if (response.responseJSON.formStatus == '3') {
                    $('#pass-lable').css("color", "red");
                } if (response.responseJSON.formStatus == '4') {
                    $('#rep-pass-lable').css("color", "red");
                } if (response.responseJSON.formStatus == '5') {
                    $('#pass-lable').css("color", "red");
                    $('#rep-pass-lable').css("color", "red");
                }

                $('#form-sub-btn').prop('disabled', false);
            }
        });
        return false;
    });
})