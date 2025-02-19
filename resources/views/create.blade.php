<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Readings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
</head>

<body>
    <div>
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Readings Index</h1>
            <div class="my-4">

                <a href="{{'index'}}" class="text-white bg-blue-700 px-5 py-2 text-lg font-medium rounded-lg transition duration-300 hover:bg-blue-800">
                Back to Index</a>
            </div>
        </div>
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Create New Readings</h1>
        </div>
        <div class="flex justify-center mt-1">
            <form action="{{route('store')}}" method="POST" class="max-w-sm mx-auto">
                @csrf
                <div class="mb-5">
                    <label for="voltage" class="text-2xl">Voltage:</label>
                    <input type="number" name="voltage" id="volt" class="bg-gray-50 border border-gray-300 ">
                    <br><br>
                    <label for="current" class="text-2xl">Current:</label>
                    <input type="number" name="current" id="amp" class="bg-gray-50 border border-gray-300">
                    <br><br>
                </div>
                <div class="flex justify-center">
                    <x-button type="submit">Insert</x-button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jQuery.js"></script>
</body>

</html>
