
$(function () {

   

    $('.j_mais').on('click', function () {

        $.ajax({
            url: 'home/testar',
            type: 'POST',
            data: {nome: 'Samuelson'},
            success: function (data) {
                $('.post').append(data);
            }
        });

    });

});