<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{--
    <link rel="stylesheet" href="css/style.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</head>

<body>
    <div class="d-flex justify-content-center">
        <div class="row">
            <h1>New User</h1>
        </div>

        <div class="row">
            <form action="/users" method="POST">
                <div class="form-group ">
                    {{ csrf_field() }}
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div>
                        <label for="markup">Markup:</label>
                        <input type="text" name="markup" id="markup" class="form-control">
                    </div>
                    <div>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="container bg-warning text-dark">
        <div class="row">
            <div class="col">
                1 of 3
            </div>
            <div class="col-6">
                2 of 3 (wider)
            </div>
            <div class="col">
                3 of 3
            </div>
        </div>
        <div class="row">
            <div class="col">
                1 of 3
            </div>
            <div class="col-5">
                2 of 3 (wider)
            </div>
            <div class="col">
                3 of 3
            </div>
        </div>
    </div>

</body>

</html>