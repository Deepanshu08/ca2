
<!Doctype html>
<html>
<head>
<title>Laravel</title>
<style>
.div {
    background-color: #333;
    overflow: hidden;
}
.div a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}
.div a:hover {
    background-color: #ddd;
    color: black;
}
.div a.active {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<header>
<div class="div">
  <a class="active" href="/">Home</a>
  <a href="/Projects/index">Product</a>
</div>
</header>
<br><br>
<p>
    Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern and based on Symfony.
</p>
<footer>
<h2 style="font-style: sans serif;text-align: center;">This is Footer</h2>
</footer>
@yield('content')
</body>
</html>
