<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lcl</title>
    <link rel="icon"  href="image/Lcl_logo.svg.png">
    <link rel="stylesheet" href="bank.css">
    <script src="style.js"></script>
 
</head>
<body>
  </div>    
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
          
        </nav>
    </section>
         <!-- HEADER -->
    <header>
        <!-- Nav header -->
        <nav id="sidebar" class="sidebar">
            <div class="sidelog">
                <a href="#">
                    <img src="image/menu.svg"  width="30px" height="30px"  alt="" onclick="openNav()">
                </a>
                <a href="#">
                    <img src="image/Lcl_logo.svg.png" width="70px" height="50px" alt="">
                </a>
                @if(auth()->check())
    <p>Bienvenue, {{ auth()->user()->name }}</p>
@endif

            </div>
            
        </nav>
    </header>
    <section id="content" class="content">
    <!-- <div class="container"> -->
    <!-- COTE SOLDE -->
    <section class="contenue">
        <section class="sec">
            <div class="div-solde">
                <!-- Article solde 1 -->
                    <article class="art-solde-left">
                        <p>
                            <Span class="monsolde">Mon solde</Span>
                            @if(auth()->check())
    <h3>+{{ auth()->user()->solde }}€</h3>
@endif
                        </p>
                    </article>
                    <!-- Article solde 2 -->
                    <article class="art-solde-right">
                        <br>
                        <span>Votre gestionnaire:</span>
                        <nav style="color:cornflowerblue;"><br>Alexandre dangelse</nav>
                    </article>
            </div>
        </section>
        <!-- LES ICONES DE PAIEMENT -->
    
         <!-- Section de Paiement -->
        <section class="section-pay">
            <!-- Retrait -->
            <div onclick="openModal()" class="retrait">
                <a onclick="openModal()" href="#">
                    <span class="icone-retrait">
                        <img src="image/arrow-down.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="operation-label">Retrait</span>
                </a>
            </div>
            <!-- Virement -->
            <div onclick="openModal2()" class="virement">
                <a onclick="openModal2()" href="#">
                    <span class="icone-virement">
                        <img src="image/right-arrow.png" width="20px" height="21px" alt="">
                    </span>
                    <span class="operation-label">Virement</span>
                </a>
            </div>
            <!-- Cartes -->
            <div class="cartes">
            <a class="card" href="{{ route('my-cards') }}">
                    <span class="icone-carte">
                        <img src="image/credit-card.png" width="25px" height="25px" alt="">
                    </span>
                    <span class="operation-label">Mes cartes</span>
                </a>
            </div>
        </section>
    
        <!-- DIFFERENTS COMPTES -->
    
        <!-- Section des comptes -->
        <section class="comptes">
            <!-- CASE ECONOMIE -->
            <div class="compte-economie">
                <article class="icone-economie">
                    <img src="image/ys.svg" width="22px" height="22px" alt="">
                </article>
                <article class="info-compte">
                    <nav class="mots">Mes economies</nav>
                    <nav class="chiffres">0€</nav>
                </article>
            </div>
            <!-- CASE COMPTE EPARGNE -->
            <div class="compte-epargne">
                <article class="icone-epargne">
                    <img src="image/epargne.svg" width="22px" height="22pxpx" alt="">
                </article>
                <article class="info-compte">
                    <nav class="mots">Compte d'epargne</nav>
                    <nav class="chiffres">0€</nav>
                </article>
            </div>
        </section>
        <!-- CASE DEPENSES -->
        <section class="section-depense">
            <div class="compte-depenses">
                <article class="icone-depense">
                    <img src="image/depense.svg" width="22px" height="22px" alt="">
                </article>
                <article class="info-compte">
                    <nav class="mots">Mes dépenses</nav>
                    <nav class="chiffres">0€</nav>
                </article>
            </div>
        </section>
        <!-- HISTORIQUE DES TRANSACTIONS -->
        <!-- Description titre -->
        <nav class="titre-transac">
            <h2>Historique de transactions</h2>
            <span>Afficher tout</span>
        </nav>
        <!-- Differents barres de transactions -->
        <section class="transac">
            
            <!-- Barre de transction 1 -->
            <div class="transac-div">
                <!-- Date et image illustration -->
                <article class="transac-div-art1">
                    <img src="image/transaction-e.png" width="40px" height="40px" alt="">
                    <span class="mot-vir">
                        <span>11/02/2024:</span>
                        <span class="mots">Virement reçu</span>
                    </span>
                    <!-- Argent -->
                </article>
                <article class="transac-div-art2">
                    +24.463€
                </article>
            </div>
            <!-- Barre de transction 2 -->
            <div class="transac-div">
                <!-- Date et image illustration -->
                <article class="transac-div-art1">
                    <img src="image/transaction-e.png" width="40px" height="40px" alt="">
                    <span class="mot-vir">
                        <span>19/01/2024:</span>
                        <span class="mots">Virement reçu</span>
                    </span>
                    <!-- Argent -->
                </article>
                <article class="transac-div-art2">+54.000€</article>
            </div>
            <!-- Barre de transction 3 -->
            <div style="border-bottom-color: red;" class="transac-div">
                <!-- Date et image illustration -->
                <article class="transac-div-art1">
                    <img src="image/transaction-e.png" width="40px" height="40px" alt="">
                    <span class="mot-vir">
                        <span>15/01/2024:</span>
                        <span class="mots">Virement effectué vers FR72 7002 7120 0154
                            8701 0085 XXX
                        </span>
                    </span>
                </article>
                <!-- Argent -->
                <article style="color: red;" class="transac-div-art2">-14.000€</article>
            </div>
            <!-- Barre de transction 4 -->
            <div class="transac-div">
                <!-- Date et image illustration -->
                <article class="transac-div-art1">
                    <img src="image/transaction-e.png" width="40px" height="40px" alt="">
                    <span class="mot-vir">
                        <span>08/01/2024:</span>
                        <span class="mots">Virement reçu</span>
                    </span>
                </article>
                <!-- Argent -->
                <article class="transac-div-art2">+72.050€</article>
            </div>
        </section>
        <!-- PARTIE ABONNEMENT -->
        <nav class="titre-transac">
            <h2>Mes abonnements</h2>
            <span>Afficher tout</span>
        </nav>
        <!-- Section des div abonnements -->
        <section class="sec-abonnement">
            <!-- Abonnement 1 -->
            <div class="div-abonnement">
                <nav class="arr-logo">
                    <img class="logo" src="image/ntflix.jpg" alt="">
                </nav>
                <a class="nom-logo">Netflix</a>
                <span class="logo-descript">Debit Services Subscription</span>
                <nav class="info-logo">
                    <span class="payer">Payer</span>
                    <span class="prix"> 13,49€</span>
                </nav>
            </div>
            <!-- Abonnement 2 -->
            <div class="div-abonnement">
                <nav class="arr-logo">
                    <img class="logo" src="image/mytf1.jpg" width="60px" height="38px" alt="">
                </nav>
                <a class="nom-logo">Movistar</a>
                <span class="logo-descript">Debit Services Subscription</span>
                <nav class="info-logo">
                    <span class="payer">Payer</span>
                    <span class="prix">19,99€</span>
                </nav>
            <!-- Abonnement 3 -->
            </div>
            <div class="div-abonnement">
                <nav class="arr-logo">
                    <img class="logo" src="image/cm-logo-3.png" alt="">
                </nav>
                <a class="nom-logo">Nezox.com</a>
                <span class="logo-descript">Debit Services Subscription</span>
                <nav class="info-logo">
                    <span class="payer">Payer</span>
                    <span class="prix">21,35€</span>
                </nav>
            </div>
        </div>
        </section>

        <!-- PARTIE DE LA CARTE -->
        <div class="mes-cartes">
            <article>
                <nav class="titre-transac">
                    <h2>Mes cartes</h2>
                    <span><a href="my-cards.php">Afficher tout</a></span>
                </nav>
                <img src="image/card-1.png" alt="">
                <ul class="card-ul">
                    <li>
                        <a href="">
                            <img src="image/edit.svg" width="15px" height="15px" alt="">
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <img src="image/delete.svg" width="20px" height="20px" alt="">
                        </a>
                    </li>
                </ul>
            </article>
        </div>

        <div class="Budgets">
            <nav class="titre-transac">
                <h2>Mes budgets</h2>
                <span>Afficher tout</span>
            </nav>
            <div class="appart">
                <article class="appart-art">
                    <span>
                        <h4>Appartement</h4>
                        <span class="petit">Maison</span>
                    </span>
                    <span>5000.00 €</span>
                </article>
            </div>
            <div class="educ">
                <article class="educ-art">
                    <span>
                        <h4>Education</h4>
                        <span class="petit">lifestyle</span>
                    </span>
                    <span>1250.00 €</span>
                </article>
            </div>
        </div>
        </nav>
    </section>
</section>
<p class="droit">
    Tous les droits reservés &copy; LCL
</p>
    <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span onclick="closeModal()" class="close">&times;</span>
        <h5 class="">Retrait</h5>
      </div>
      <div class="modal-body">
        <form class="form-blocked" action="">
            
            <!-- compte pour le retrait -->
            <div class="compte-retrait">
                <label for="">De</label>
                <select name="" id="">
                    <option selected value="0">Compte courant (*** 4014)</option>
                    <option value="1">Compte d'épargne (*** 6223)</option>
                    <option value="2">Economie *** 5073</option>
                </select>
            </div>

            <!-- nom du compte -->
            <div class="name-retrait">
                <label for="">À</label>
                <input required type="text" placeholder="  Alicia Williams">
            </div>

            <!-- montant du retrait -->
            <div class="montant-retrait">
                <label for="">Entrer le montant</label>
                <input required type="number" placeholder=" € 458.00">
            </div>


                <button onclick="sms()" value="Confirmer" type="submit"></button>
            
        </form>
      </div>
    </div>
</div>

<!-- modal 2 -->

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <span onclick="closeModal2()" class="close">&times;</span>
        <h5 class="block-virement">Effectuer un virement</h5>
      </div>
      <div class="modal-body">
        <form class="form-blocked" action="">
            
            <!-- compte pour le retrait -->
            <div class="compte-retrait">
                <label for="">De</label>
                <select name="" id="">
                    <option selected value="0">Compte courant (*** 4014)</option>
                    <option value="1">Compte d'épargne (*** 6223)</option>
                    <option value="2">Economie *** 5073</option>
                </select>
            </div>

            <!-- nom du compte -->
            <div class="name-retrait">
                <label for="">À</label>
                <input type="text" placeholder="  RIB">
            </div>

            <!-- montant du retrait -->
            <div class="montant-retrait">
                <label for="">Entrer le montant</label>
                <input type="number" placeholder=" € 458.00">
            </div>
            <div>
                
            </div>
            <button onclick="sms()">Comfirmer</button>
        </form>
      </div>
    </div>
</div>

<div id="sms" class="modal-sms">
    <div class="modal-sms-content">
        <span><img src="image/delete.png" width="70px" height="70px" alt=""></span>
        <p>
            Désolé, votre operation a échouée, veuillez contacter votre banque pour plus d'informations.
        </p>
    </div>
</div>

    <footer>
        <nav class="foot-nav">
            <a class="acceuil"  href="{{ route('index') }}">Acceuil</a>
            <a class="card" href="{{ route('my-cards') }}">Cartes et Comptes</a>
            <a class="profil" href="{{ route('settings') }}">Profil</a>
            <a class="logout" href="deco.php">Déconnexion</a>
        </nav>
    </footer>
</body>
</html>