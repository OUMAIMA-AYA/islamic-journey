@extends('layout')
@section('content')
</br><title>99 Names of Allah</title></br>
    <style>

        .container {
         width: 100vw; 
         margin: 0 auto; /* Center the container horizontally */
}
        .names-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center items horizontally */
            gap: 20px; /* Add some gap between cards */
        }

        .name-card {
            width: calc(14.28% - 20px); /* Set the width for each card to approximately 14.28% of the container width with some gap */
            background-color: #f5f5dc; /* Beige */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px; /* Add some bottom margin for spacing */
            text-align: center; /* Center text horizontally */
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            color: #8b4513; /* Brown */
        }

        .transliteration {
            font-size: 18px;
            font-style: italic;
            color: #666;
        }

        .meaning {
            margin-top: 10px;
            color: #888;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px; /* Add some bottom margin for spacing */
        }

        header {
            background-color: #f5f5dc; /* Beige */
            padding: 10px 0;
            text-align: center;
        }

        header h4 {
            color: #8b4513; /* Brown */
            font-size: 24px;
            font-weight: bold;
            margin-right: auto;
        }

        /* Navigation */
        nav {
            background-color: #f5f5dc; /* Beige */
            text-align: center;
            padding: 15px 0; /* Adjusted padding */
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #8b4513; /* Brown */
            font-weight: bold;
            padding: 10px 20px; /* Adjusted padding */
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #d2b48c; /* Darker Beige */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color: #8b4513; font-family: Georgia, 'Times New Roman', Times, serif; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">99 Names of Allah</h1>
        <div class="names-list">
            @foreach ($namesOfAllah as $name)
                <div class="name-card">
                    <div class="id">{{$name['id']}}</div>
                    <div class="name">{{$name['name']}}</div>
                    <div class="transliteration">{{$name['transliteration']}}</div>
                    <div class="meaning">{{$name[ 'meaning' ]}}</div>
                </div>
             @endforeach
        </div>
    </div>
</body>
</html>
@endsection
