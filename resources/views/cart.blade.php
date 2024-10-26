<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart Page</title>
</head>

<body>

    @if (!$cartItems->isEmpty())

    <form action="{{ route('cart.destroy') }}" method="POST">
        @method('delete')
        @csrf

        <button class="btn btn-primary" type="submit">Clear Cart</button>
    </form>

    @foreach ($cartItems as $item)
        <img src="{{ $item->image }}">
        <p>{{ $item->name }}</p>
        <p>${{ $item->price }}</p>
        <p>{{ $item->quantity }}</p>
           <form action="{{ route('cart.remove', $item->id) }}" method="POST">
               @csrf
              <button type="submit" class="btn btn-primary">remove</button>
           </form>
        <p>${{ $item->subtotal }}</p>

    @endforeach
    <p>${{ $total }}</p>
    @else
    <p>No items in the cart just yet</p>
    @endif
</body>

</html>
