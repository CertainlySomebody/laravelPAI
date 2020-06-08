

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
            @guest
                <a href="{{ route('login') }}">
                    Zaloguj się
                </a>
            @endguest
            @auth
                <a href="{{ route('userPanel') }}">
                    Panel
                </a>
            @endauth
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
                $catActive = '';
                if(!empty($slug) && isset($slug)) {
                    $catActive = ($slug == $value->slug) ? 'active' : '';
                }
                
                echo '<li class="'.$catActive.'">';
                    echo '<a href="/'.$value->slug.'">'. $value->category_name .'</a>';
                echo '</li>';
            }   
        @endphp
    </ul>
</div>