<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{--
    <link rel="stylesheet" href="css/style.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <title>Home | Pizza</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="visarates">Visa Rates <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link" href="#">Pricing</a>
          </div>
        </div>
      </nav>

    <section id="todo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center display-4">Todo</h1>
                </div>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Countries
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="/uae">UAE</a></li>
                        <li><a class="dropdown-item" href="/oman">OMAN</a></li>
                        <li><a class="dropdown-item" href="bahrain">BAHRAIN</a></li>
                    </ul>
                </div>
                <a href="{{ URL::route('visarates') }}" class="btn btn-sucess"> customer visa rates </a>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <form method="POST" action="/save">
                        @csrf
                        {{-- <label for="title">90 base</label> --}}
                        <div class="row">
                            <div class="col-sm-4">
                                <label for="30base">Base</label>
                                <input type="text" placeholder="90 days" name="base90" id="base90"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <label for="b2b90">B2B</label>
                                <input type="text" placeholder="90 days" name="b2b90" id="b2b90"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <label for="30cust">Customer</label>
                                <input type="text" placeholder="90 days" name="cust90" id="cust90"
                                    class="form-control mb-2" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-4">
                                <input type="text" placeholder="90 days child" name="base90ch" id="base90"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="90 days child" name="b2b90ch" id="b2b90"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="90 days child" name="cust90ch" id="cust90"
                                    class="form-control mb-2" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days" name="base30" id="base30"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days" name="b2b30" id="b2b30"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days" name="cust30" id="cust30"
                                    class="form-control mb-2" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days child" name="base30ch" id="base30"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days child" name="b2b30ch" id="b2b30"
                                    class="form-control mb-2" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" placeholder="30 days child" name="cust30ch" id="cust30"
                                    class="form-control mb-2" />
                            </div>
                        </div>

                        <input type="submit" class="btn btn-success btn-block mb-4" value="Save" />
                    </form>
                </div>
                <div class="col-sm">
                    <table class="table table-dark" id="tableId1">
                        <thead>
                            <tr>
                                <th>90 Base</th>
                                <th>90 B2B</th>
                                <th>90 Customer</th>
                                {{-- <th>button</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $pizza)
                            <tr>
                                <td>{{ $pizza->base90 }}</td>
                                <td>{{ $pizza->b2b90 }}</td>
                                <td>{{ $pizza->cust90 }}</td>
                                <td><button
                                        onclick="selectElementContents( document.getElementById('tableId1') );">copy</button>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>30 Base</th>
                                <th>30 B2B</th>
                                <th>30 Customer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $pizza)
                            <tr>
                                <td>{{ $pizza->base30 }}</td>
                                <td>{{ $pizza->b2b30 }}</td>
                                <td>{{ $pizza->cust30 }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>

            <script type="text/javascript">
                function selectElementContents(el) {
                    var body = document.body,
                        range, sel;
                    if (document.createRange && window.getSelection) {
                        range = document.createRange();
                        sel = window.getSelection();
                        sel.removeAllRanges();
                        try {
                            range.selectNodeContents(el);
                            sel.addRange(range);
                        } catch (e) {
                            range.selectNode(el);
                            sel.addRange(range);
                        }
                        document.execCommand("copy");

                    } else if (body.createTextRange) {
                        range = body.createTextRange();
                        range.moveToElementText(el);
                        range.select();
                        range.execCommand("Copy");
                    }
                }
            </script>

        </div>
    </section>

</body>