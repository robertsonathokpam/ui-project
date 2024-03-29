<?php
    include "authguard.php";
    include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>welcome to vendor home</h1>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" enctype="multipart/form-data" method="POST" class="bg-warning p-4 w-50">
            <h1 class="text-center">Add product</h1>
            <input class="form-control mt-3" type="text" placeholder="Product Name" name="name">
            <input class="form-control mt-3" type="number" placeholder="Product Price" name="price">
            <textarea class="form-control mt-3" name="detail" rows="5" placeholder="Product Description"></textarea>
            <input class="form-control mt-3" type="file" name="pdting" accept=".jpg,.png">
            
            <div class="text-center mt-3">
                <button class=" btn btn-success" type="submit">Add Product</button>
            </div>
        </form>
    </div>
</body>
</html>
