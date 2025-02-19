<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Readings Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
</head>

<body>
    <div>
        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-4">Readings Index</h1>
            <div class="my-4">
                {{-- <x-button style="primary" type="submit" id="createData">
                    Create
                </x-button> --}}
                <a href="{{'create'}}" type="button" class="text-white bg-blue-700 px-5 py-2 text-lg font-medium rounded-lg transition duration-300 hover:bg-blue-800">Create</a>
            </div>
        </div>

        <div class="flex justify-center mt-1">
            <h1 class="text-4xl pr-3 my-3">Live Readings Index</h1>
            <div class="mt-3 mr-1">
                <x-button style="primary" type="submit" id="fetchData">
                    Start
                </x-button>
            </div>
            <div class="mt-3">
                <x-button style="primary" type="submit" id="unfetchData">
                    Stop
                </x-button>
            </div>
        </div>
        <div class="ml-[35%] mr-[40%] bg-green-500">
            <h4 class="text-center bg-green-50 text-white p-2">{{ session('success') }}</h4>
        </div>
        {{-- table --}}
        <div class="flex justify-center mt-1">
            <table class="w-auto border-red-500 border-2 mx-auto">
                <thead style="color: indigo;">
                    <tr>
                        <th>ID</th>
                        <th>Volatge</th>
                        <th>Current</th>
                        <th>Current Time</th>
                        {{-- <th>Save Time</th> --}}
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="dataList">
                    {{-- <tr>
                        <td id="sr">----</td>  
                        <td id="voltageDisplay">----</td>  
                        <td id="currentDisplay">----</td>  
                        <td id="timeDisplay">----</td>  
                        <td id="currenttimeDisplay">----</td>  
                        <td>
                            <div style="margin-block: 5px">
                                <a href="#" class="btn">Edit</a>
                                <a href="#" class="btn">Delete</a>
                            </div>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/jQuery.js"></script>
</body>
</html>
