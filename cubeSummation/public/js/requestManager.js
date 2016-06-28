/**
 * Created by Cristian Parada on 28/06/2016.
 */
function config() {
    $.ajax({
        method: "POST",
        url: $('form[name=formCreate]').attr('action'),
        data: {
            _token: $('input[name=_token]').attr('value'),
            input: $('textarea[name=input]').val(),
        }
    }).done(function (msg) {
        $('textarea[name=output]').val(msg.output);
    });
}