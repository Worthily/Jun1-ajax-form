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
        $.ajax({
            url: 'handlers/form.php',
            method: 'post',
            dataType: 'json',
            data: $(this).serialize(),
            beforeSend: function(){
                $('#form-sub-btn').prop('disabled', true);
                $('#form-spinner').show();
                $('#button-text').hide();
            },
            success: function(responseObject){

                if (responseObject.formStatus == '1') {
                    alert('Ваша информация отправлена');
                    $('#message').html(responseObject.msg);

                } else if (responseObject.formStatus == '2') {
                    alert('Ошибка при отправке формы');
                    $('#message').html(responseObject.msg);
                    $('#login-lable').css("color", "red");

                } else if (responseObject.formStatus == '3') {
                    alert('Ошибка при отправке формы');
                    $('#message').html(responseObject.msg);
                    $('#pass-lable').css("color", "red");

                } else if (responseObject.formStatus == '4') {
                    alert('Ошибка при отправке формы');
                    $('#message').html(responseObject.msg);
                    $('#rep-pass-lable').css("color", "red");

                } else if (responseObject.formStatus == '5') {
                    alert('Ошибка при отправке формы');
                    $('#message').html(responseObject.msg);
                    $('#pass-lable').css("color", "red");
                    $('#rep-pass-lable').css("color", "red");

                }

            },
            error: function (jqXHR, exception) {
                if (jqXHR.status === 0) {
                    alert('Not connect. Verify Network.');
                } else if (jqXHR.status == 404) {
                    alert('Requested page not found (404).');
                } else if (jqXHR.status == 500) {
                    alert('Internal Server Error (500).');
                } else if (exception === 'parsererror') {
                    alert('Requested JSON parse failed.');
                } else if (exception === 'timeout') {
                    alert('Time out error.');
                } else if (exception === 'abort') {
                    alert('Ajax request aborted.');
                } else {
                    alert('Uncaught Error. ' + jqXHR.responseText);
                }
            },
            complete: function(){
                $('#form-spinner').hide();
                $('#button-text').show();
                $('#form-sub-btn').prop('disabled', false);
            },
        });
        return false;
    });
})
