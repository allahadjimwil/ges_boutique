<!DOCTYPE html>
<html lang="fr">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ALLAH-ADJIM</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:#f5f5f5;
}

.sidebar{

position:fixed;
top:0;
left:0;
width:270px;
height:100vh;
background:#111111;
box-shadow:5px 0 20px rgba(0,0,0,.3);

}

.logo{

padding:30px;
text-align:center;
border-bottom:1px solid rgba(255,255,255,.08);

}

.logo i{

font-size:65px;
color:#ff7300;

}

.logo h2{

margin-top:10px;
font-weight:bold;
color:white;

}

.logo p{

color:#ff7300;
font-size:14px;

}

.sidebar a{

display:block;
padding:18px 25px;
text-decoration:none;
color:white;
font-size:17px;
transition:.35s;

}

.sidebar a:hover{

background:#ff7300;
padding-left:40px;

}

.sidebar i{

margin-right:12px;

}

.main{

margin-left:270px;
padding:30px;

}

.topbar{

background:white;
padding:20px;
border-radius:18px;
box-shadow:0 5px 20px rgba(0,0,0,.08);
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:30px;

}

.topbar h3{

font-weight:bold;

}

.orange{

color:#ff7300;

}

.user{

background:#ff7300;
color:white;
padding:10px 20px;
border-radius:30px;

}

.card{

border:none;
border-radius:18px;
box-shadow:0 8px 25px rgba(0,0,0,.08);
transition:.4s;

}

.card:hover{

transform:translateY(-8px);

}

.card-body{

display:flex;
justify-content:space-between;
align-items:center;

}

.icon{

width:80px;
height:80px;
border-radius:50%;
display:flex;
justify-content:center;
align-items:center;
font-size:35px;
color:white;

}

.orange-bg{

background:#ff7300;

}

.black-bg{

background:#111;

}

.blue-bg{

background:#3949ab;

}

.green-bg{

background:#2e7d32;

}

.number{

font-size:35px;
font-weight:bold;

}

table{

background:white;
border-radius:15px;
overflow:hidden;

}

.table thead{

background:#111111;
color:white;

}

.btn-orange{

background:#ff7300;
color:white;
border:none;

}

.btn-orange:hover{

background:#e56700;
color:white;

}

footer{

margin-top:40px;
text-align:center;
color:#888;

}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">

<i class="bi bi-shop"></i>

<h2>ALLAH-ADJIM</h2>

<p>Sales Management System</p>

</div>

<a href="/dashboard">

<i class="bi bi-speedometer2"></i>

Dashboard

</a>

<a href="/clients">

<i class="bi bi-people-fill"></i>

Clients

</a>

<a href="/produits">

<i class="bi bi-box-seam-fill"></i>

Produits

</a>

<a href="/commandes">

<i class="bi bi-cart-check-fill"></i>

Commandes

</a>

<a href="/facture">

<i class="bi bi-receipt-cutoff"></i>

Factures

</a>

</div>

<div class="main">

<div class="topbar">

<h3>

Bienvenue chez <span class="orange">ALLAH-ADJIM</span>

</h3>

<div class="user">

<i class="bi bi-person-circle"></i>

Administrateur

</div>

</div>

@yield('content')

<footer>

© 2026 ALLAH-ADJIM | Tous droits réservés

</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>