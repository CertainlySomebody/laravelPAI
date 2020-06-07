<div class="mainContent">
    <div class="videosWrapper">
        @php
            foreach($videos as $video) {
                echo '<div class="videosItem">';
                    echo '<a href="' .$video->kategoria . '/' . $video->slug . '">';
                        echo '<img src="'. asset($video->image_dir) .'" alt="">';
                        echo '<div class="itemTitle">';
                            echo '<p>'. $video->tytul .'</p>';
                        echo '</div>';
                    echo '</a>';
                echo '</div>';
            }
        @endphp
    </div>
</div>