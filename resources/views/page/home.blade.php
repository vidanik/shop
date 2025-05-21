<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidail Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <main>
        <h2>به ویداییل شاپ خوش آمدید!</h2>
        <p>محصولات ویژه و خدمات منحصر به فرد ما را بررسی کنید.</p> @include('partials.footer')

        @include('partials.footer')

    </main>
</body>

</html>