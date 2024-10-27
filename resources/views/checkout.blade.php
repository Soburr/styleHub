<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
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

    </form>
</body>
</html>
