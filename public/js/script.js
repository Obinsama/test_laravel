
$(document).ready(function(){
    var sujet, commentaire, tab;
    /* sujet = {
         id: '0',
         titre: 'test',
         contenu: 'test',
         piece_jointe: 'test'
     };*/

    //tab = [sujet, commentaire];
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $('#btn1').click(function (e) {
        commentaire = {
            name: $('#name').val(),
            link: $('#link').val()
        };
        e.preventDefault();
        $('#name').val('');
        $('#link').val('');

        $.ajax({
            type: 'post',
            url: '/json',
            data: {
                name: commentaire.name,
                link: commentaire.link
            },
            success: function (data) {
                alert(data);
                console.log(data);
                // var comment = JSON.parse(data);
                $('#commentaire').prepend('<p class="" style="font-weight: bold">' +
                    data.name +': '+ data.link + '</p>');
                return data;

            }

        });
        //console.log(obj);

        //console.log(comment);


    });
});


