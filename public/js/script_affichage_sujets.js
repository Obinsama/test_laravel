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
                echo: 'sujets'
            },
            success: function (data) {
                $.each(data.element,function(i){
                    $.each(data.element[i],function(key,val){
                        $('#result').prepend('<div ><div id="img-container"></div><h1 id="titre"></h1><p id="desc"></p> <button class="btn btn-info">Comment</button></div>')
                        if(key=='titre'){
                            $('#titre').text(key+' : '+val);
                        }
                        else if(key=='desc'){
                            $('#desc').text(key+' : '+val);
                        }else{
                            $('#img-container').append("<img src=val/>");
                        }
                    });
                });
            }
        });
    });
});
