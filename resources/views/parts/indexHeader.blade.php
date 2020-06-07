

<div class="logoWrap">
    <a href="{{ route('index') }}">
        <img src="{{ URL::asset('/img/logo_transparent.png') }}" alt="" />
    </a>
</div>

<div class="categoriesWrap">
    <button class="buttonDropdown">
        Kategorie
    </button>

    <ul class="basketWrap">
        <li class="logIn">
            <a href="{{ route('login') }}">
                Zaloguj się
            </a>
        </li>
        <li class="basketWrapper">
            <a href="{{ route('cart') }}">
                Koszyk <!-- todo -->
            </a>
        </li>
    </ul>
</div>
<div class="categoriesItems">
    <ul class="categories">
        @php
            foreach ($category as $value) {
                echo '<li>';
                    echo '<a href="'.$value->slug.'">'. $value->category_name .'</a>';
                echo '</li>';
            }   
        @endphp
    </ul>
</div>