<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App Food Order</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" href="lao/style.css">

    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <div class="container" style="margin-top: 20px;">
            <h2 class="text-center"> AppZap Manage APIs </h2>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <form>
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <br>
                        <button  class="btn btn-primary col-md-12">Login</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
