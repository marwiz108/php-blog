<!DOCTYPE html>

<html>

    <head>
        <title>LaravelBlog</title>

        <!-- Styles -->
        <style>
            html, body {
                margin: auto;
                text-align: center;
                font-family: sans-serif;
                color: #cc99ff;
            }

            h1 {
                padding: 30px;
                text-align: center;
                font-family: sans-serif;
                font-size: 35px;
                background-color: #dcdcdc;
            }

            ul {
                list-style-type: none;
                margin: auto;
                overflow: hidden;
            }

            li {
                float: center;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>

    <body>
        @yield ('content')
    </body>

</html>
