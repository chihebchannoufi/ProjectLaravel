<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Delete Product</title>
</head>
<body>
    <div class="container my-5">
        <h2>Delete Product</h2>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <p>Are you sure you want to delete this product Num {{$product->id}} ?</p>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
</html>