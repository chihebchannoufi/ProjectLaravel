<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class='container my-5'>
        <h2>Liste des Produit</h2>
        <a class="btn btn-primary" href="{{route('products.create')}}" role="button">New Produit</a>
        <br><br>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>qty</th>
                    <th>price</th>
                    <th>description</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td><a class='btn btn-primary btn-sm' href="{{ route('products.edit', $product->id) }}">edit</a></td>
                    <td><a class='btn btn-danger btn-sm' href="{{ route('products.delete', $product->id) }}">delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>