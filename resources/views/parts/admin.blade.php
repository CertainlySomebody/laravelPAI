<div class="panelWrapper">
    <h1>Lista zamówień</h1>
    <div class="orderTable">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Zamówienie</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
            @php
                    foreach($orders as $order) {
                        echo '<tr>';
                            echo '<td>'.$order->id.'</td>';
                            echo '<td>'.$order->description.'</td>';
                            echo '<td>'.$order->cena.'zł</td>';
                        echo '</tr>';
                    }
            @endphp
            </tbody>
        </table>
    </div>
    @php
        if(count($orders) == 0) {
            echo '<p>Lista zamówień jest pusta!</p>';
        }
        $type = Auth::user()->type;
        if($type == 'admin') {
            echo '<div class="adminTools">';
                echo '<h3>Narzędzia administratora</h3>';
                echo '<a href="'.route('addVideo').'">Dodaj nowy film</a>';
                echo '<a href="'.route('removeVideo').'">Usuń film</a>';
            echo '</div>';
        }
    @endphp
    <a class="niceButton" href="{{ route('logout') }}">Wyloguj</a>
</div>