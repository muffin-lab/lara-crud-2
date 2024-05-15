<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            @if (Session::has('success'))
            
            <div class="col-md-10">

                {{Session::get('success')}}

            </div>
            @endif
            <div class="col-md-10">
                <div class="card border- shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Products</h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>