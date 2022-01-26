<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('CSS')
    </head>
    <body>
        <div class="loading">
            <h1>Page is currently loading</h1>
        </div>
        <div class="ready hide">
            @include('partials.header')
            
            @yield('content')

            @include('partials.footer')
        </div>

        <script>

            //Set page on loading if video is not loaded 

            let video = document.getElementById('banner');
            video.addEventListener('loadeddata' , (e) => {
                if(video.readyState === 4){
                document.querySelector('.loading').classList.add('hide');
                document.querySelector('.ready').classList.remove('hide');
                }
            })
        </script>
    </body>
</html>