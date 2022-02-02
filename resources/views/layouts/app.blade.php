<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" defer></script>
        @yield('CSS')
    </head>
    <body>
        <div id="app">
            <div class="loading">
                <h1>Page is currently loading</h1>
            </div>
            <div class="ready hide">
                @include('partials.header')
                
                @yield('content')

                @include('partials.footer')
            </div>
        </div>

        <script>

            //Set page on loading if video is not loaded 

            let video = document.getElementById('banner');
            if(video != null){
                video.addEventListener('loadeddata' , (e) => {
                    if(video.readyState === 4){
                    document.querySelector('.loading').classList.add('hide');
                    document.querySelector('.ready').classList.remove('hide');
                    }
                })
            }
            else{
                document.querySelector('.loading').classList.add('hide');
                document.querySelector('.ready').classList.remove('hide');
            }
            let element = document.getElementById('navbarDropdown');
            let chevron = document.querySelector('.fa-chevron-down');
            let dropdown = document.querySelector('.dropdown');
            if(element != null){
                element.addEventListener('click' , function(){
                    if(dropdown.classList.contains('display')){
                        dropdown.classList.remove('display');
                        chevron.classList.remove('rotate');
                    }
                    else{
                        dropdown.classList.add('display');
                        chevron.classList.add('rotate');
                    }
                })
            }
        </script>
    </body>
</html>