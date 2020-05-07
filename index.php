<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Carlos Bumba BG16" />

<title>AJAX LIVE SEARCH COM PHP</title>

<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="search.js"></script>

<link rel="stylesheet" href="css/bootstrap.css">
</head>

<style type="text/css">

a { margin:7px; }

a:hover {
text-decoration:none;
color:#80C;
text-shadow:1px 1px 1px #C9E;
}

/* */
.container, .results {
margin-top:6px;
margin-bottom:8px;
}


/* */
.navbar {
padding:16px;
}


input {
border-radius:2px !important;
}



/* COR DA SUGESTÃO */
.match {
color:green;
}

</style>
<body>
<div class="navbar bg-dark text-light">
<b>LIVE SEARCH COM AJAX-PHP 7</b>
</div>

<div class="container" >
<input autocomplete="off"  onkeyup="search(this.value)" placeholder="digite o nome:" type="search"  class="form-control">
</div>

<!-- RESULTADOS DO AJAX -->
<div class="results " id="res" >

</div>

</body>
</html>