@yield('form')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Coalition Skills test</title>

    <!-- css files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/app.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form>
                <!-- product name -->
                <div class="form-group">
                    <label>Product name</label>
                    <input type="text" id="n" class="form-control" required />
                </div>

                <!-- Quantity in stock -->
                <div class="form-group">
                    <label>Quantity in stock</label>
                    <input type="number" id="s" class="form-control" required />
                </div>

                <!-- Price per item -->
                <div class="form-group">
                    <label>Price per item</label>
                    <input type="number" step="0.01" id="p" class="form-control" required />
                </div>

                <!-- submit button -->
                <div class="form-group text-center">
                    <button id="add" type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>

            <!-- add result -->
            <div id="result"></div>

            <!-- product data -->
            <div id="products"></div>
        </div>
    </div>
</div>

<!-- JS files -->
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/products.js"></script>

</body>
</html>