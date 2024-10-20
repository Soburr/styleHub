<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
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

    <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100">
        <img src="/{{ $product->image }}" alt="{{ $product->name }}">
    </div>

    <div class="sm:col-span-8 lg:col-span-7">
         <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">{{ $product->name }}</h2>
    </div>

    <section aria-labelledby="information-heading" class="mt-2">
       <h3 id="information-heading">Product Information</h3>
       <p class="text-2xl text-gray-900 mb-4">${{ $product->price }}</p>
       <p class="text-md text-gray-900 mb-4">{{ $product->description }}</p>
    </section>

    <section aria-labelledby="options-heading" class="mt-10">
       <form action="" method="POST">
        <button type="submit" class="btn btn-primary">
           Add to cart
        </button>
       </form>
    </section>
</body>
