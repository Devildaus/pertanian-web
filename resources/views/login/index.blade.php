<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body style="
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('https://ik.imagekit.io/tvlk/blog/2021/01/Hutan-Otzarreta-Spanyol-shutterstock_426325075-1024x683.jpeg?tr=dpr-2,w-675');
    background-size: cover;
    background-position: center;
    position: relative;
    font-family: sans-serif;
">

    <div class="login" style="
        scale: 0.75;
        background: rgba(4, 29, 23, 0.5);
        padding: 50px;
        width: 30%;
        box-shadow: 0px 0px 25px 10px black;
        border-radius: 15px;
    ">

        <div class="avatar" style="
            font-size: 30px;
            background: #E59866;
            width: 50px;
            height: 50px;
            line-height: 50px;
            position: fixed;
            left: 50%;
            top: 0;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 50%;
        ">
            <i class="fa fa-user"></i>
        </div>
        <h2 style="
            text-align: center;
            color: white;
            font-size: 30px;
            font-family: sans-serif;
            letter-spacing: 3px;
            padding-top: 0;
            margin-top: -20px;
        ">Login Form</h2>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="box-login" style="
                display: flex;
                justify-content: space-between;
                margin: 10px;
                border-bottom: 2px solid white;
                padding: 8px 0;
            ">
                <i class="fas fa-envelope-open-text" style="
                    font-size: 23px;
                    color: white;
                    padding: 5px 0;
                "></i>
                <input type="username" name="username" id="username" placeholder="username" class="@error('username') rounded-top bg-danger @enderror" required value="{{ old('username') }}" style="
                    width: 85%;
                    padding: 5px 0;
                    background: none;
                    border: none;
                    outline: none;
                    color: white;
                    font-size: 18px;
                ">
            </div>
            @error('username')
            <div class=" error" style="text-align: center; color:beige;">
                {{ $message }}
            </div>
            @enderror
            <div class="box-login" style="
                display: flex;
                justify-content: space-between;
                margin: 10px;
                border-bottom: 2px solid white;
                padding: 8px 0;
            ">
                <i class="fas fa-lock" style="
                    font-size: 23px;
                    color: white;
                    padding: 5px 0;
                "></i>
                <input type="password" name="password" id="password" placeholder="Password" required style="
                    width: 85%;
                    padding: 5px 0;
                    background: none;
                    border: none;
                    outline: none;
                    color: white;
                    font-size: 18px;
                ">
            </div>
            <button type="submit" class="btn-login" style="
                margin-left: 10px;
                margin-bottom: 20px;
                background: none;
                border: 1px solid white;
                width: 92.5%;
                padding: 10px;
                color: white;
                font-size: 18px;
                letter-spacing: 3px;
                cursor: pointer;
            ">Login</button>
            <div class="bottom" style="
                margin-left: 10px;
                margin-right: 10px;
                display: flex;
                justify-content: space-between;
            ">
            </div>
        </form>
    </div>
</body>

</html>
