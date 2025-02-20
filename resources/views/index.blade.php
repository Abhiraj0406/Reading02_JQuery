<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Readings Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div id="content">
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Readings Index</h1>
        </div>
        <div class="my-4 flex justify-center mt-1">
            <a href="/create" id="createReadingPage" class="bg-blue-500 text-white px-4 py-2 rounded">
                Create
            </a>
        </div>

        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-3">Live Readings Index</h1>
            <div class="mt-3 mr-1">
                <button id="fetchData" class="bg-green-500 text-white px-4 py-2 rounded">
                    Start
                </button>
            </div>
            <div class="mt-3">
                <button id="unfetchData" class="bg-red-500 text-white px-4 py-2 rounded">
                    Stop
                </button>
            </div>
        </div>
        <div class="flex justify-center mt-1">
            <table class="w-auto border-red-500 border-2 mx-auto">
                <thead class="text-indigo-600">
                    <tr>
                        <th>ID</th>
                        <th>Voltage</th>
                        <th>Current</th>
                        <th>Current Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="dataList"></tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jQuery.js"></script>
</body>

</html>
