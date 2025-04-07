<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Readings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="ml-20 mr-20 my-10 p-5 bg-blue-400" id="content">
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Create New Readings</h1>
        </div>
        <div class="flex justify-center mt-1">
            <form id="readingForm" class="max-w-sm mx-auto" action="{{route('storeapi')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label class="text-2xl">Voltage:</label>
                    <input type="number" id="volt" name="volatge"
                        class="bg-gray-50 border border-gray-300 px-2 py-1 w-full">
                    <br><br>
                    <label class="text-2xl">Current:</label>
                    <input type="number" id="amp" name="current"
                        class="bg-gray-50 border border-gray-300 px-2 py-1 w-full">
                    <br><br>
                </div>
                <div class="flex justify-center">
                    <button type="submit" id="createReading" class="bg-green-500 text-white px-4 py-2 rounded">
                        Insert
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center mt-5">
            <button type="submit" id="backIndex" class="bg-gray-500 text-white px-4 py-2 rounded">
                Back to Index
            </button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jQuery.js"></script>
</body>

</html>
