<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Readings</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="ml-20 mr-20 my-10 p-5 bg-blue-400" id="content">
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Edit Readings</h1>
        </div>
        <div class="flex justify-center mt-1">
            <form action="{{ route('index', $reading->id) }}" id="editForm" class="max-w-sm mx-auto" method="POST">

                @csrf
                <div class="mb-5">
                    <input disabled type="number" id="id" name="id"
                        class="bg-gray-50 border border-gray-300 mx-10 mr-5 px-5 py-1 flex justify-center text-center text-md rounded p-2"
                        value="{{ $reading->id }}">
                    <label class="text-2xl">Voltage:</label>
                    <input type="number" id="volt" name="volatge"
                        class="bg-gray-50 border border-gray-300 px-2 py-1 w-full"
                        value="{{ old('voltage', $reading->voltage) }}">
                    <br><br>
                    <label class="text-2xl">Current:</label>
                    <input type="number" id="amp" name="current"
                        class="bg-gray-50 border border-gray-300 px-2 py-1 w-full"
                        value="{{ old('current', $reading->current) }}">
                    <br><br>
                </div>
                <div class="flex justify-center">
                    <button type="submit" id="editReading" class="bg-green-500 text-white px-4 py-2 rounded">
                        Update
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
    <script src="/js/jQuery.js"></script>
</body>

</html>
