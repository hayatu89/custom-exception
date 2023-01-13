<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search a Movie</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="my-60 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->
        <div class="mx-auto max-w-2xl">
            <h1 class="mb-5 mx-auto font-bold text-5xl text-center">IMDB Search</h1>
            <form action="/results" method="get">
                @csrf 
                <div class="flex">
                <input type="text" name="title" id="title" placeholder="Enter The Movie Title" class="inline-flex w-full rounded-md border-gray-300 pr-12 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                <button class=" mx-2 inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>