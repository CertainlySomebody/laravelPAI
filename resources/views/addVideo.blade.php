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
                    <div class="addVideoWrapper">
                        <h1>Dodaj nowy film</h1>
                        <form action="processAdding" method="POST">
                            @csrf
                            <input type="text" name="tytul" placeholder="Wpisz nazwe filmu" required>
                            Wybierz kategorie filmu<select name="kategoria" required>
                                <option value="Akcja">Akcja</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Familijny">Familijny</option>
                                <option value="Komedia">Komedia</option>
                                <option value="Sci-Fi">Sci-Fi</option>
                            </select>
                            <input type="date" name="rok_produkcji" required>
                            <textarea name="opis_fabuly" placeholder="opis fabuly" required></textarea>
                            <input type="text" name="image_dir" placeholder="ścieżka do zdjęcia filmu" required>
                            Połączenie z kategoria<select name="category_connection" required>
                                <option value="100">Akcja</option>
                                <option value="101">Fantasy</option>
                                <option value="102">Familijny</option>
                                <option value="103">Komedia</option>
                                <option value="104">Sci-Fi</option>
                            </select>
                            <input type="text" name="slug" placeholder="Wpisz slug filmu" required>
                            <input type="number" step="any" name="cena" placeholder="Wpisz cene filmu" required>
                            <input type="submit" value="Dodaj">
                        </form>
                    </div>
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