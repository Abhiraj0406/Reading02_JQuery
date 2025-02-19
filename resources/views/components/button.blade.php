<button
    {{$attributes-> merge([
        'class' => "
        ".($style =='primary'? 'text-white bg-blue-700 px-5 py-2 text-lg font-medium rounded-lg transition duration-300 hover:bg-blue-800': '')."
        "
    ])}}
>{{$slot}}</button>