<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind test</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <style>
        body {
            font-family: 'Nunito', 'Arial';
        }
    </style>
</head>
<body class="antialiased">
<main class="h-screen">
    <div class="mx-auto h-full flex justify-center items-center bg-gray-300">
        <div class="w-96 bg-blue-900 rounded-lg shadow-xl p-6">
            <svg class="fill-current text-white w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.749 48.748">
                <path d="M44.268,10.32c-0.371-0.524-0.758-1.035-1.17-1.527C38.624,3.424,31.891,0,24.374,0c-0.014,0-0.025,0.001-0.037,0.001
                            C24.329,0.001,24.323,0,24.315,0c-0.027,0-0.055,0.003-0.084,0.003C16.771,0.046,10.097,3.46,5.649,8.793
                            c-0.41,0.493-0.799,1.003-1.17,1.527C1.663,14.295,0,19.142,0,24.374c0,5.231,1.662,10.08,4.479,14.054
                            c0.371,0.524,0.76,1.035,1.17,1.527c4.447,5.333,11.121,8.747,18.582,8.79c0.029,0,0.057,0.003,0.084,0.003
                            c0.008,0,0.014-0.001,0.021-0.001c0.012,0,0.023,0.001,0.037,0.001c7.518,0,14.25-3.423,18.725-8.792
                            c0.41-0.492,0.799-1.004,1.17-1.528c2.816-3.975,4.479-8.822,4.479-14.055C48.747,19.143,47.084,14.295,44.268,10.32z M17.249,3.17
                            c-2.24,2.161-4.102,5.32-5.385,9.111c-1.719-0.642-3.266-1.415-4.6-2.289C9.879,6.886,13.318,4.494,17.249,3.17z M6.09,11.521
                            c1.516,1.012,3.268,1.897,5.205,2.626c-0.836,3.054-1.316,6.444-1.334,10.021H2.004C2.047,19.463,3.562,15.109,6.09,11.521z
                             M2.079,26.168H10c0.129,2.994,0.584,5.835,1.293,8.434c-1.938,0.729-3.689,1.614-5.203,2.627
                            C3.849,34.048,2.404,30.266,2.079,26.168z M7.27,38.752c1.334-0.872,2.877-1.643,4.592-2.285c1.283,3.792,3.146,6.949,5.387,9.11
                            C13.318,44.254,9.886,41.857,7.27,38.752z M23.374,46.676c-4.104-0.562-7.646-4.771-9.654-10.833
                            c2.895-0.868,6.172-1.394,9.654-1.479V46.676z M23.374,32.366c-3.672,0.088-7.133,0.655-10.215,1.601
                            c-0.631-2.396-1.035-5.025-1.156-7.798h11.371V32.366z M23.374,24.168H11.961c0.018-3.359,0.455-6.532,1.207-9.384
                            c3.078,0.943,6.537,1.511,10.205,1.598V24.168z M23.374,14.384c-3.48-0.085-6.756-0.609-9.648-1.477
                            c2.007-6.059,5.546-10.272,9.648-10.835V14.384z M46.741,24.168h-8.072c-0.018-3.562-0.492-6.938-1.322-9.981
                            c1.98-0.736,3.769-1.635,5.31-2.665C45.184,15.11,46.698,19.463,46.741,24.168z M41.481,9.994
                            c-1.361,0.891-2.943,1.676-4.703,2.325c-1.295-3.843-3.184-7.04-5.459-9.209C35.323,4.421,38.825,6.84,41.481,9.994z M25.374,2.087
                            c4.059,0.627,7.555,4.832,9.541,10.85c-2.865,0.849-6.104,1.363-9.541,1.447V2.087z M25.374,16.383
                            c3.625-0.086,7.045-0.642,10.096-1.565c0.748,2.844,1.182,6.005,1.199,9.351H25.374V16.383z M25.374,26.168h11.254
                            c-0.121,2.76-0.523,5.377-1.148,7.766c-3.055-0.926-6.479-1.481-10.104-1.568L25.374,26.168L25.374,26.168z M25.374,46.661V34.365
                            c3.439,0.084,6.678,0.598,9.547,1.447C32.932,41.832,29.432,46.034,25.374,46.661z M31.319,45.639
                            c2.275-2.168,4.168-5.363,5.463-9.207c1.756,0.648,3.336,1.432,4.695,2.321C38.821,41.906,35.323,44.327,31.319,45.639z
                             M42.657,37.229c-1.541-1.03-3.33-1.931-5.311-2.666c0.702-2.588,1.153-5.416,1.28-8.394h8.041
                            C46.342,30.266,44.901,34.049,42.657,37.229z"/>
            </svg>
            <h1 class="text-white text-3xl pt-8">
                Welcome Back
            </h1>
            <h2 class="text-blue-600 pt-2">
                Enter your credentials bellow
            </h2>
            <form class="pt-8">
                <div class="relative">
                    <label for="email" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">
                        E-Mail
                    </label>
                    <div>
                        <input class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" type="text" name="email" autofocus placeholder="your@email.com">
                    </div>
                </div>
                <div class="relative pt-3">
                    <label for="password" class="uppercase text-blue-500 text-xs font-bold absolute pl-3 pt-2">
                        Password
                    </label>
                    <div>
                        <input class="pt-8 w-full rounded p-3 bg-blue-800 text-gray-100 outline-none focus:bg-blue-700" type="text" name="password">
                    </div>
                </div>
                <div class="pt-2">
                    <input type="checkbox" name="remember">
                    <label class="text-white" for="remember">
                        Remember Me
                    </label>
                </div>
                <div class="pt-8">
                    <button class="w-full bg-gray-400 py-2 px-3 text-left uppercase rounded text-blue-800 font-bold">
                        Login
                    </button>
                </div>
                <div class="flex justify-between pt-8 text-white text-sm font-bold">
                    <a href="">Forgot Your Password?</a>
                    <a href="">Register</a>
                </div>
            </form>

        </div>
    </div>
</main>
</body>
</html>
