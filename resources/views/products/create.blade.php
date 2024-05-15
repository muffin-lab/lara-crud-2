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
            <div class="col-md-10">
                <div class="card border- shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>

                    <form action="{{route('product.store')}}" method="post">
                    @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Name</label>
                                <input value="{{old('name')}}" type="text" class="@error('name') is-invalid @enderror  form-control form-control-lg" placeholder="Name" name="name">
                                @error('name')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Sku</label>
                                <input value="{{old('sku')}}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" placeholder="Sku" name="sku">
                                @error('sku')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Price</label>
                                <input value="{{old('price')}}" type="text" class="@error('price') is-invalid @enderror form-control form-control-lg" placeholder="Price"
                                    name="price">
                                    @error('price')
                                    <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Description</label>
                                <textarea placeholder="Description" name="description" id=""
                                    class="form-control" value="{{old('description')}}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Price"
                                    name="price">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-danger">Button</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>