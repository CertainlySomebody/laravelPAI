<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Filmdev - Twoja wypożyczalnia filmów</title>
        <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    </head>
    
    <body>
        <!-- header section -->
        <header id="pageHeader">
            <div class="navMain">
                <div class="container">
                    @include('parts.indexHeader')
                </div>
            </div>
        </header>

        <!-- main section -->
        <main id="pageMain">
            <div class="pageWrap">
                <div class="container">
                    
                </div>
            </div>
        </main>

        <!-- footer section -->
        <footer id="pageFooter">
            <div class="footerWrap">
                <div class="container">
                    @include('parts.indexFooter')
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ mix('/js/script.js') }}"></script>
    </body>

</html>