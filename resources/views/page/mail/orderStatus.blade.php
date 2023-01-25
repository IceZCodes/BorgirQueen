<div class="container" style="padding: 1rem; background: #f5f5f5;">
    @if ($order->status == 'Preparing')
        <p>{{ $order->user->name }}'s Order is being prepared</p>
    @elseif ($order->status == 'OnDelivery')
        <p>{{ $order->user->name }}'s Order is being delivered</p>
    @else
        <p>{{ $order->user->name }}'s Order is completed</p>
    @endif
</div>
