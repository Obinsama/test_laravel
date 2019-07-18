$(document).ready(function(){
    var sujet, commentaire, tab;
     sujet = {
         id: '0',
         titre: 'test',
         contenu: 'test',
         pj: 'test'
     };
     users={
         uid:'0',
         nom:'test_nom',
         email:'test_email'
     };
     commentaire={
         id:'',
         uid:'',
         sid:'',
         text:'',
         date:''
     };
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
    $('#ajout_sujet').click(function (e) {
        sujet = {
            titre: $('#titre').val(),
            desc: $('#desc').val(),
            pj: $('#pj').val()
        };
        e.preventDefault();
        $('#titre').val('');
        $('#desc').val('');
        $('#pj').empty();

        $.ajax({
            type: 'post',
            url: '/json',
            data: {
                titre: sujet.titre,
                desc: sujet.desc
            },
            success: function () {
              $('#success').text('Success');

            }

        });
      });
});
