<html>
    <head>
        @section('head.css')
            <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}">
        @show
        @section('head.js')
            <script src="{{ URL::asset('js/js.js') }}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        @show
        @section('head.title')
    </head>
    <body>
        <div class="wrapper">
            <div class="section-sidebar">
                @section('sidebar')
                    <div class="section-sidebar-top">
                        @section('sidebar-top')


                            This is the top sidebar.
                        @show
                    </div>

                    <div class="section-sidebar-middle">
                        @section('sidebar-middle')
                            This is the middle sidebar.
                        @show
                    </div>

                    <div class="section-sidebar-bottom">
                        @section('sidebar-bottom')
                            This is the bottom sidebar.
                        @show
                    </div>
                @show
            </div>

            <div class="container">
                <div class="section-topmenu">
                    @section('topmenu')
                        topmenu
                    @show
                </div>
                <div class="section-content">
                    @section('content')
                        <div class="section-content-top">
                            @section('content-top')
                            @show
                        </div>
                        <div class="section-content-main">
                            @section('content-main')
                                main content
                            @show
                        </div>
                        <div class="section-content-bottom">
                            @section('content-bottom')
                            @show
                        </div>
                    @show
                </div>
            </div>
        </div>
    </body>
</html>
