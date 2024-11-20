@if(session('cart') && count(session('cart')) > 0)
    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $id => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td>
                        <form action="{{ route('cart.update', $id) }}" method="POST">
                            @csrf
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="quantity-input">
                            <button type="submit" class="update-button">Update</button>
                        </form>
                    </td>
                    <td>${{ $item['price'] * $item['quantity'] }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                            @csrf
                            <button type="submit" class="remove-button">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="cart-summary">
        <h3>Total: ${{ array_sum(array_map(function ($item) { return $item['price'] * $item['quantity']; }, session('cart'))) }}</h3>
        <a href="{{ route('checkout') }}" class="checkout-button">Proceed to Checkout</a>
    </div>

@else
    <p>Your cart is empty.</p>
@endif
