<div class="mainContent">
    <div class="categoryName">
        <h1>{{ $checkCat->category_name }}</h1>
    </div>
    <div class="videosWrapper">
        @php
            //var_dump($checkCat);
            foreach ($getVideos as $key => $value) {
                echo '<div class="videosItem">';
                    echo '<a href="' .$value->kategoria . '/' . $value->slug . '">';
                        echo '<img src="'. asset($value->image_dir) .'" alt="">';
                        echo '<div class="itemTitle">';
                            echo '<p>'. $value->tytul .'</p>';
                        echo '</div>';
                    echo '</a>';
                echo '</div>';
            }
        @endphp
    </div>
</div>