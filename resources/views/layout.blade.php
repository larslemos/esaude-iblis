<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="{{ Config::get('blis.favicon') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/ui-lightness/jquery-ui-min.css', true) }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css', true) }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.min.css', true) }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/dataTables.bootstrap.css', true) }}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/layout.css', true) }}" />
        <script type="text/javascript" src="{{ URL::asset('js/jquery.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery-ui-min.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/jquery.dataTables.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap-timepicker.min.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/dataTables.bootstrap.js', true) }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/script.js', true) }} "></script>
        <script type="text/javascript" src="{{ URL::asset('js/html.sortable.min.js', true) }} "></script>
        <!-- jQuery barcode script -->
        <script type="text/javascript" src="{{ asset('js/jquery-barcode-2.0.2.js', true) }} "></script>
        <title>{{ Config::get('blis.name') }} {{ Config::get('blis.version') }}</title>
    </head>
    <body>
        <div id="wrap">
            @include("header")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 sidebar">
                        @include("sidebar")
                    </div>
                    <div class="col-md-10 col-md-offset-2 main" id="the-one-main">
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
        @include("footer")
    </body>
</html>
