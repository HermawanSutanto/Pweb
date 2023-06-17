@extends('layouts.main')
@section('container')
    <h1>Home</h1>

    <head>
        <title>Landing Page</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #ffffff;
            }

            .header {
                text-align: center;
                margin-top: 50px;
                margin-bottom: 20px;
            }

            .header h1 {
                font-size: 36px;
            }

            .content {
                max-width: 800px;
                margin: 0 auto;
                padding: 50px;
                text-align: center;
            }

            .content p {
                font-size: 18px;
                margin-bottom: 30px;
            }

            .button {
                display: inline-block;
                padding: 10px 20px;
                font-size: 20px;
                background-color: #4CAF50;
                color: #fff;
                text-decoration: none;
                border-radius: 4px;
                transition: background-color 0.3s ease;
            }

            .button:hover {
                background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <div class="header">
            <h1>Welcome to Our Landing Page</h1>
        </div>

        <div class="content">
            <p>Silahkan Login untuk dapat mengakses fitur kami<3 </p>
                    <a href="
                    @if (auth()->check()) /dashboard @endif

                    @guest /login @endguest"
                        class="button">Start</a>
        </div>
    </body>
@endsection
