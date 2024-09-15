<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title>Projets</title>
</head>
<body>


<div id="banniere">
        <header>
            <nav>
                <ul>
                    <li><a class="lien" href="page_principal.php">Accueil</a></li>
                    <li><a class="lien" href="projet.php">Projets</a></li>
                    <li><a class="lien" href="parcours_certif.php">Certification</a></li>
                    <li><a class="lien" href="veille_techno.php">Veille technologique</a></li>
                    <li><a class="lien" href="../documents/cv_2024.pdf"download="cv_2024.pdf">CV</a></li>
                    <li><a class="lien" href="journal.php">Journal de bord</a></li>
                    <div class="elem_droit"> 
                        <form action="deconnexion.php" method="post">
                            <input type="submit" class="boutton" value="Déconnexion"/>
                        </form>

                        <button id="mode_sombre" onclick="toggleDarkMode()">mode sombre</button>   
                    </div>
                </ul>
            </nav>
        </header>
    </div>

    <!--
    <div>
        <p><a href="https://github.com/quent1vky"><button class="boutton">Mes projets <img class="img-footer" src="../img/github.png" alt="" srcset=""></button></a></p>
    </div>
    -->


    <div class="maBox">
        <div class="box">
            <p>Snake</p>
            <button class="boutton_box">code</button>
        </div>

        <div class="box">
            <p>Tetris</p>
            <button class="boutton_box">code</button>
        </div>

        <div class="box">
            <p>Netflux</p>            
            <button class="boutton_box">code</button>
        </div>

        <div class="box">
            <p>Portfolio</p>
            <button class="boutton_box">code</button>
        </div>

        <div class="box">
            <p>Autres projets</p>
            <button class="boutton_box">code</button>
        </div>

        <div class="box">
            <p>Autres projets</p>
            <button class="boutton_box">code</button>
        </div>

    </div>

    

    <script src="../JS/script.js"></script>






    
    <!--

    <div id="footer">
        <footer>
            <ul>
                <li><img class="img-footer" src="../img/proton.png" alt="" srcset=""> : quentin.vky@proton.me</li>
                <li><img class="img-footer" src="../img/tel.png" alt="" srcset=""> : +33 7 49 21 66 83</li>
                <li><img class="img-footer" src="../img/github.png" alt="" srcset=""> : <a class="lien" href="https://github.com/quent1vky">https://github.com/quent1vky</a></li>
            </ul>

        </footer>

    </div>

    -->


</body>
</html>