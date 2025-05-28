<!-- resources/views/header.blade.php -->
<header>
    <div class="container">
        <form class="search-form" action="#" method="GET">
            <input type="text" name="search" placeholder="Search...">
            <button type="submit">Search</button>
        </form>
        <h1 class="shop-title">ویداییل مارکت </h1>
    </div>
    <hr class="header-underline">
</header>
<nav>
    <ul>
        <li><a href="{{ route('cart.sabadkharid') }}">سبد خرید</a></li>
        <li><a href="{{ route('login') }}">ورود</a></li> <!-- لینک به صفحه ورود -->
        <li><a href="#">دسته بندی محصولات </a></li>
    </ul>
</nav>