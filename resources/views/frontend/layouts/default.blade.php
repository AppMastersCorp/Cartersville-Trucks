<!doctype html>
<html>
<head>
<!-- my head section goes here -->
<!-- my css and js goes here -->
<title>@yield('title')</title>
<style>

div.container {
width: 100%;
margin:0 auto;
}

ul {
list-style-type: none;
margin: 0;
padding: 0;
overflow: hidden;

}

li {
float: left;
}

li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}

li a:hover {
background-color: #111;
}


header, footer {
padding: 1em;
color: white;
background-color: black;
clear: left;
text-align: center;
 
}


.sidebar{
float: left;
max-width: 160px;
margin: 0;
padding: 1em;
background-color: #357b33;
height:460px;
}
.contents{

margin-left: 170px;
border-left: 1px solid gray;
padding: 1em;
overflow: hidden;
height: 300px;
}
</style>
</head>
<body>
<div class="container">
<header> @include('frontend.layouts.header') </header>
<div class="sidebar"> @include('frontend.layouts.sidebar') </div>
<div class="contents"> @yield('content') </div>
<footer> @include('frontend.layouts.footer') </footer>
</div>
</body>
</html>
