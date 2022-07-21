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

    <title>Visa rates| Pizza</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="visarates">Visa Rates <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
            </div>
        </div>
    </nav>

    <section id="todo">
        <div class="container">

            <!-- <a href="{{ URL::route('home') }}" class="btn btn-sucess"> customer visa rates </a> -->
            <div class="row">
                <div class="col-sm-6 mt-2">
                    <table class="table table-dark" id="tableId1">
                        <thead>
                            <tr>
                                <th colspan="4" style="text-align:center;">Dubai visit VISA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizzas as $pizza)
                            @foreach($custmargin as $mar)
                            <tr>
                                <td>90 days adult</td>
                                <td>{{ $pizza->base90+ $mar->customer_margin}}</td>
                            </tr>
                            <tr>
                                <td>90 days child</td>
                                <td>{{ $pizza->base90ch+$mar->customer_margin}}</td>
                            </tr>
                            <tr>
                                <td>30 days adult</td>
                                <td>{{ $pizza->base30+$mar->customer_margin}}</td>
                            </tr>
                            <tr>
                                <td>30 days child</td>
                                <td>{{ $pizza->base30ch+$mar->customer_margin}}</td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center;"><button class="btn btn-success">copy</button>

                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div>
                    <div class="table-area table-fit">
                        <div class="row form-inline">
                            <div class="col-lg-2 col-md-2" id="table_idx"><b>Table #:</b> 1</div>
                            <div class="col-lg-2 col-md-2"><button class="badge badge-warning"
                                    onclick="makeEditable(this)"
                                    title="To ease corrections and download the corrected data">Edit Table</button>
                            </div>
                            <div class="col-lg-3 col-md-3" id="char_conf"><b>Character Accuracy</b>: 99.72</div>
                            <div class="col-lg-3 col-md-3" id="layout_conf"><b>Layout Accuracy</b>: 88.38</div>
                            <div class="col-lg-2 col-md-2"><button class="badge badge-dark float-right" id="export-btn"
                                    data-clipboard-target="#table_1" onclick="copyTableToClipboard()">Copy To
                                    Clipboard</button></div>
                        </div>
                        <div class="row justify-content-center">
                            <table class="table table-bordered table-hover" id="table_1">
                                <tbody>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.63">VISA RATE FROM 20-06-2022</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.88">RATE</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.8">30 DAYS TOURIST WITH INSURANCE DUBAI</td>
                                        <td style="background-color: rgba(229, 115, 115, -0.010000000000000009)"
                                            title="Character Accurarcy=99.97">5830</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.51">30 DAYS TOURIST WITH INSURANCE DUBAI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.95">450</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.82">90 DAYS TOURIST WITH INSURANCE DUBAI</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.95">13550</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.49">90 DAYS TOURIST WITH INSURANCE DUBAI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, -0.010000000000000009)"
                                            title="Character Accurarcy=99.98">650</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.85">30 DAYS TOURIST WITH INSURANCE ABUDHABI
                                        </td>
                                        <td style="background-color: rgba(229, 115, 115, -0.010000000000000009)"
                                            title="Character Accurarcy=99.97">5750</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.54">30 DAYS TOURIST WITH INSURANCE ABUDHABI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, -0.010000000000000009)"
                                            title="Character Accurarcy=99.98">400</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.83">90 DAYS TOURIST WITH INSURANCE ABUDHABI
                                        </td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.95">13300</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.5">90 DAYS TOURIST WITH INSURANCE ABUDHABI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.96">450</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.67">ONE MONTH INSIDE COUNTRY ABUDHABI</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.81">18300</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.5">ONE MONTH INSIDE COUNTRY ABUDHABI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.93">12800</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.74">THREE MONTH INSIDE COUNTRY ABUDHABI</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.82">25250</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.59">THREE MONTH INSIDE COUNTRY ABUDHABI
                                            CHILD(BELOW 18 WITH PARENT)</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.88">13000</td>
                                    </tr>
                                    <tr>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=97.86">THREE MONTH INSIDE COUNTRY AUH (LOW
                                            ABSCONDING *)</td>
                                        <td style="background-color: rgba(229, 115, 115, 0)"
                                            title="Character Accurarcy=99.78">25400</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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