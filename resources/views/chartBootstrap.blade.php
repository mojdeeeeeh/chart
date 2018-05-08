{{-- bootstrapchart https://bootsnipp.com/ --}}
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

</head>
<body>

    @include('layouts.menu')
    
    <div id="app">

        <div class="tree">
              @foreach ($peoples as $people)
            <ul>
                @if ($people->parent_id == 0)
                <li>
                    <a href="#">{{ $people->name }}</a>
                    <ul>
                         
                        <li>
                            <a href="#">child</a>
                            <ul>
                              
                                <li>
                                    <a href="#">Grand Child</a>
                                </li>
                                
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#">Child</a>
                            <ul>
                                <li>
                                    <a href="#">Grand Child</a>
                                </li>
                                <li>
                                    <a href="#">Grand Child</a>
                                    <ul>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                        <li>
                                            <a href="#">Great Grand Child</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Grand Child</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                 @endif
            </ul>
            @endforeach
        </div>


    </div>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chartBootstrap.css') }}" rel="stylesheet">

</body>
</html>