<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Laravelsss</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
{{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
{{--    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>    --}}
    <!-- Latest compiled and minified JavaScript -->

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Styles -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('addLink')}}">add link</a></li>
            </ul>
        </nav>
    </header>
    <div class="content">

        <div class="links container-fluid"style="display:block" >
            @yield('addLink')
        </div>
        <div id="commentaire" class="container" style="display:block ;"></div>

    </div>
</body>
{{--<script type="text/javascript">--}}

{{--    $.ajaxSetup({--}}

{{--        headers: {--}}

{{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}

{{--        }--}}

{{--    });--}}



{{--    $('#btn1').click(function (e) {--}}
{{--        var commentaire = {--}}
{{--            id: '0',--}}
{{--            name: $('#name').val(),--}}
{{--            link: $('#link').val()--}}
{{--        };--}}
{{--        e.preventDefault();--}}
{{--        $('#link').val('');--}}
{{--        $('#name').val('');--}}
{{--        $.ajax({--}}
{{--            type: 'POST',--}}
{{--            url: '/json',--}}
{{--            data: {--}}
{{--                name: commentaire.name,--}}
{{--                link: commentaire.link--}}
{{--            },--}}
{{--            dataType: 'json',--}}
{{--            success: function (data) {--}}

{{--                console.log(data);--}}
{{--$.each(data,function(key,val){--}}

{{--        //alert(key+val);--}}

{{--});--}}
{{--                $('#commentaire').prepend('<p class="" style="font-weight: bold">' +--}}
{{--                    data.name +': '+ data.link + '</p>');--}}


{{--            }--}}

{{--        });--}}
{{--        //console.log(obj);--}}

{{--        //console.log(comment);--}}


{{--    });</script>--}}
</html>
