<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{--
    <link rel="stylesheet" href="css/style.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

    <title>Margines | Pizza</title>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped text-2x">
                <thead>
                    <tr>
                        <th>Airlines Name</th>
                        <th>Adult</th>
                        <th>Child</th>
                        <th>Infant</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="selectDrop">
                                <div class="btn-group bootstrap-select text-control"><button type="button"
                                        class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button"
                                        data-id="airline_code" id="_airline_code"
                                        title="All Airlines(Priority goes to individual airline markup)"
                                        aria-expanded="false"><span class="filter-option pull-left">All
                                            Airlines(Priority
                                            goes to individual airline markup)</span>&nbsp;<span class="bs-caret"><span
                                                class="caret"></span></span></button>
                                    <div class="dropdown-menu open" role="combobox">
                                        <div class="bs-searchbox"><input type="text" class="form-control"
                                                autocomplete="off" role="textbox" aria-label="Search" spellcheck="false"
                                                data-ms-editor="true">
                                        </div>

                                        <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                            <li data-original-index="0" class=""><a tabindex="0" class=""
                                                    data-tokens="null" role="option" aria-disabled="false"
                                                    aria-selected="false"><span class="text">-- Select --</span><span
                                                        class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                            <li data-original-index="1" class="selected"><a tabindex="0" class=""
                                                    data-tokens="null" role="option" aria-disabled="false"
                                                    aria-selected="true"><span class="text">All Airlines(Priority goes
                                                        to
                                                        individual airline markup)</span><span
                                                        class="glyphicon glyphicon-ok check-mark"></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <select class="text-control selectpicker" data-live-search="true" id="airline_code"
                                        name="airline_code" required="required" tabindex="-98">
                                        <option value="">-- Select --</option>
                                        <option value="ALL">All Airlines(Priority goes to individual airline markup)
                                        </option>
                                        <option value="I8">Aboriginal Air Services</option>
                                        <option value="9B">Acces Rail</option>
                                        <option value="KI">Adam Air</option>
                                    </select>
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="airline_code"
                                    data-valmsg-replace="true" style="color:red"></span>
                            </div>
                        </td>

                        <td><input class="text-control clr " id="adt_fare" min="0" name="adt_fare"
                                onkeypress="return isNumber(event)" onpaste="return false;" required="required"
                                type="text" value="" spellcheck="false" data-ms-editor="true"><span
                                class="field-validation-valid" data-valmsg-for="adt_fare" data-valmsg-replace="true"
                                style="color:red"></span></td>
                        <td><input class="text-control clr" id="chd_fare" min="0" name="chd_fare"
                                onkeypress="return isNumber(event)" onpaste="return false;" required="required"
                                type="text" value="" spellcheck="false" data-ms-editor="true"><span
                                class="field-validation-valid" data-valmsg-for="chd_fare" data-valmsg-replace="true"
                                style="color:red"></span></td>
                        <td><input class="text-control clr" id="inf_fare" min="0" name="inf_fare"
                                onkeypress="return isNumber(event)" onpaste="return false;" required="required"
                                type="text" value="" spellcheck="false" data-ms-editor="true"><span
                                class="field-validation-valid" data-valmsg-for="inf_fare" data-valmsg-replace="true"
                                style="color:red"></span></td>
                        <td>
                            <button type="submit" id="btnSubmit" class="btn btn-primary btn-xs center-block">Submit
                            </button>

                        </td>
                    </tr>
                </tbody>



                <tbody id="tbl_agt">
                    <tr>
                        <td>All Airlines (Priority goes to individual airline markup)</td>
                        <td>400.00</td>
                        <td>400.00</td>
                        <td>200.00</td>
                        <td align="center"><a href="#" class="btn btn-primary btn-xs modify"
                                data-air_code="All Airlines (Priority goes to individual airline markup)" data-id="ALL"
                                data-adt_fare="400.00" data-chd_fare="400.00" data-inf_fare="200.00"> Modify </a><a
                                href="#" class="btn btn-danger btn-xs del" style="margin-left:3px;" data-aid="ALL">
                                Delete </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <form method="post" action="savemargins" >
                @csrf
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Margin</label>
                                <input type="text" class="form-control" id="margin" name="B2B_margin"
                                    onkeypress="return isNumber(event)" onpaste="return false;" required="required"
                                    value="" spellcheck="false" data-ms-editor="true">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Margin Value</label>
                                <input type="text" class="form-control" id="margin_value" name="customer_margin"
                                    onkeypress="return isNumber(event)" onpaste="return false;" required="required"
                                    value="" spellcheck="false" data-ms-editor="true">
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>