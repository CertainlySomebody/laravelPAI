<div class="cartWrapper">
    <table id="cartContent">
        <h1 class="myCart">Twój koszyk</h1>

        <thead>
            <tr>
                @php
                if(!empty(session('cart'))) {
                    echo '<th></th>';
                    echo '<th>Nazwa</th>';
                    echo '<th>Cena</th>';
                }
                @endphp
            </tr>
        </thead>
        <tbody>
            @php
                if(!empty(session('cart'))) {
                    $sesCart = session('cart');
                    $totalprice = 0;
                    //dd($sesCart);
                    
                    foreach($sesCart as $item) {
                        echo '<tr>';
                            echo '<td><a href="'.$item['kategoria'].'/'.$item['slug'].'"><img src="'.$item['image_dir'].'" alt=""></a></td>';
                            echo '<td>'.$item['name'].'</td>';
                            echo '<td>'.$item['cena'].'zł</td>';
                            echo '<td><a href="'.url('remove-from-cart/'.$item['id']).'">X</a></td>';
                        echo '</tr>';
                        $totalprice += $item['cena'];
                    }

                }else{
                    echo '<p class="emptyBasket">Twój koszyk jest pusty</p>';
                }
            @endphp
        </tbody>
    </table>
    <div class="totalPrice">
        <p><h2>Ostateczna cena: {{$totalprice}}zł</h2></p>
    </div>
    @php
        if(!empty(session('cart'))) {
            echo '<a href="" class="orderButton">Złóż zamówienie</a>';
        }

        //dd(session('cart'));
@endphp
</div>