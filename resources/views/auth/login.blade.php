<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Webstie Agama XII RPL Gen XI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container" style="margin-top: 110px">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-9 col-12">
                <div class="card border-0 rounded-1 shadow-sm">
                    <div class="card-body">
                        <div class="mt-3">
                            <h3>Bonjour!</h3>
                            <p class="fs-s-sm opacity-75">Lorem ipsum dolor sit amet consectetur <br> Non repudiandae molestias</p>
                        </div>
                        <form action="" method="post">
                            @csrf
                            <div class="mt-3">
                                <label for="" class="mb-2 fs-sm opacity-75">Email</label>
                                <input type="email" name="email" class="form-control fs-sm text-gray form-control-lg rounded-1" id="">
                                @error('email') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                            </div>
                            <div class="mt-3">
                                <label for="" class="mb-2 fs-sm opacity-75">Password</label>
                                <input type="password" name="password" class="form-control fs-sm text-gray form-control-lg rounded-1" id="">
                                @error('password') <p class="mb-0 mt-1 text-danger fs-s-sm">{{$message}}</p> @enderror
                            </div>
                            <div class="my-4">
                                <button class="btn btn-primary border-0 rounded-1 fs py-3 w-100">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>