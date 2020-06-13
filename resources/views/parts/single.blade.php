<div class="videoWrapper">
    <div class="imagesSide">
        <img src="{{$getSingle->image_dir}}" alt="">
    </div>
    <div class="descSide">
        <div class="descWrapper">
            <p><b>Tytuł:</b> {{$getSingle->tytul}}</p>
            <p><b>Kategoria:</b> {{$getSingle->kategoria}}</p>
            <p><b>Rok Produkcji:</b> {{$getSingle->rok_produkcji}}</p>
            <p><b>Opis Fabuły:</b> {{$getSingle->opis_fabuly}}</p>
            <p><b>Cena:</b> {{$getSingle->cena}} zł</p>
            <a href="{{ url('add-to-cart/'.$getSingle->id) }}">Kup teraz</a>
                @if (Session::has('error'))
                    <div>
                        @php
                            $error = session('error');
                            echo '<script>';
                            echo 'alert("'.$error.'");';
                            echo '</script>';
                        @endphp
                    </div>
                @endif
        </div>
    </div>
</div>