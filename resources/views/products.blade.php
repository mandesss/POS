<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .category-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .category-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Halaman Produk</h1>
        <ul>
            <li><a href="{{ url('/category/food-beverage') }}" class="category-link">Kategori Makanan dan Minuman</a></li>
            <li><a href="{{ url('/category/beauty-health') }}" class="category-link">Kategori Kecantikan dan Kesehatan</a></li>
            <li><a href="{{ url('/category/home-care') }}" class="category-link">Kategori Perawatan Rumah</a></li>
            <li><a href="{{ url('/category/baby-kid') }}" class="category-link">Kategori Bayi dan Anak</a></li>
        </ul>
    </div>
</body>
</html>
