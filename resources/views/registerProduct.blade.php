<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Add New Product</h1>
        <form action="/addNewProduct" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="productName" id="name" placeholder="Product Name">
            <input type="text" name="productDesc" id="desc" placeholder="Product Description">
            <input type="number" name="productPrice" id="price" placeholder="Product Price">
            <input type="text" name="productCategory" id="category" placeholder="Product Category">
            <!-- product category ntar drop down list -->
            <input type="file" name="productImage" id="image" placeholder="Product Image">
            <input type="submit" value="Add">
        </form>
        <br>
        @if ($errors->any())
            <h3 style="color: red">{{$errors->first()}}</h3>
        @endif
    </div>
</body>
</html>