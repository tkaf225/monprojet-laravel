<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bank.css">
    <link rel="icon" href="image/Lcl_logo.svg.png">
    <script src="style.js"></script>
 
</head>
<body>

    <!-- MENU LATERAL -->
    <section id="mySidenav" class="sidenav">
        <div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                <img src="image/Close.svg" width="30px" height="30px" alt="">
            </a>
        </div>
        <div class="avatar">
            <span class="img">
                <img src="image/avatar.jpg" width="40px" height="40px" alt="">
            </span>
            <span class="identite">
            @if(auth()->check())
    <p>{{ auth()->user()->name }}</p>
@endif
                <a href="#">N°15458880</a>
            </span>
        </div>
             @if(auth()->check())
    <h2>{{ auth()->user()->solde }}€</h2>
@endif
        <span>
            <h3>Menu</h3>
        </span>
        <nav class="latbar-nav">
            <a class="acceuil"  href="{{ route('index') }}">Acceuil</a>
            <a class="card" href="{{ route('my-cards') }}">Cartes et Comptes</a>
            <a class="profil" href="{{ route('settings') }}">Profil
            <a class="logout" href="deco.php">Déconnexion</a>
        </nav>
    </section>

    <header>
        <div class="contenair">
            <div>
                <a href="#">
                    <img src="image/menu.svg"  width="30px" height="30px"  alt="" onclick="openNav()">
                </a>
            </div>
            <div>
                <h3>Mes cartes de credit</h3>
            </div>
            <div class="div-none"></div>
        </div>
    </header>
<!-- LES CARTES -->
    <div class="mes-cartes">
        <article>
            <img src="image/card-1.png" alt="">
        </article>
    </div>
    

    <div class="mes-cartes">
        <article>
            <img src="image/card-2.png" alt="">
        </article>
    </div>

    <div style="padding-bottom: 90px;" class="mes-cartes">
        <article>
            <img src="image/card-3.png" alt="">
        </article>
    </div>

    <footer>
        <nav class="foot-nav">
        <a class="acceuil"  href="{{ route('index') }}">Acceuil</a>
        <a class="card" href="{{ route('my-cards') }}">Cartes et Comptes</a>
        <a class="profil" href="{{ route('settings') }}">Profil
        </nav>
    </footer>
</body>
</html>