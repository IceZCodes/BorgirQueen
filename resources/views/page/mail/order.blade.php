<div class="container" style="padding: 1rem; background: #f5f5f5;">
    <p>{{ $order->user->name }}'s Order</p>
    <p>
        @foreach ($items as $item)
            {{ $item->name }} {{ $item->pivot->qty }} piece(s)
            <br>
        @endforeach
        <br>
        Total Price is ${{ $order->total_price }}
    </p>
</div>
