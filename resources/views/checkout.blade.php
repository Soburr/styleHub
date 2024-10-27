<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Include the Alpine library on your page -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Include the TailwindCSS library on your page -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div class="col-span-full">
           <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">
              First Name
           </label>
           <div class="mt-2">
              <input type="text" name="first_name" id="first_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
           </div>
        </div>

        <div class="col-span-full">
            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">
               Last Name
            </label>
            <div class="mt-2">
               <input type="text" name="last_name" id="last_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="col-span-full">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
               Email
            </label>
            <div class="mt-2">
               <input type="email" name="email" id="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="col-span-full">
            <label for="street_address" class="block text-sm font-medium leading-6 text-gray-900">
               Street Address
            </label>
            <div class="mt-2">
               <input type="text" name="street_address" id="street_address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="col-span-full">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">
               City
            </label>
            <div class="mt-2">
               <input type="text" name="city" id="city" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="col-span-full">
            <label for="state" class="block text-sm font-medium leading-6 text-gray-900">
               State
            </label>
            <div class="mt-2">
               <input type="text" name="state" id="state" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="col-span-full">
            <label for="zip" class="block text-sm font-medium leading-6 text-gray-900">
              Zip
            </label>
            <div class="mt-2">
               <input type="text" name="zip" id="zip" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1">
            </div>
         </div>

         <div class="mt-8">
            <div class="flow-root">
              <ul role="list" class="my-6 divide-y divide-gray-200">
                 @foreach ($cartItems as $item)
                   <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded">
                      <img src="{{ $item->image }}">
                   </div>

                   <div class="ml-4 flex flex-1 flex-col">

                       <div>
                          <h3>{{ $item->name }}</h3>
                          <h3>${{ $item->price }}</h3>
                          <p>Qty{{ $item->quantity }}</p>
                          <h3>${{ $total }}</h3>
                       </div>

                   </div>
                 @endforeach
              </ul>
            </div>
         </div>

         <div class="mt-2">
            <button type="submit" class="btn btn-primary">Submit orders</button>
         </div>

    </form>
</body>
</html>
