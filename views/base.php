107 lines (94 sloc)  4.32 KB

<!DOCTYPE html>
<html>
    <head>
        <title> travel agency</title>
        <meta charset="utf-8" >
        <link href="styles.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">

    </head>
    <body>
        <header>
            <div class="wrapper">
                <h1> Travel Agency <span class="orange">.</span></h1>
                <nav>
                    <ul>
                        <li><a href="#main-image">Accueil</a></li>
                        <li><a href="#steps">Destinations</a></li>
                        <li><a href="#possibilities">Circuits</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="main-image">
            <div class="wrapper">
                <h2>Organisez votre <br> <strong> voyage sur mesure</strong></h2>
                <a href="#" class="button-1">par ici</a>
            </div>
        </section>
        <section id="steps">
            <div class="wrapper">
                <ul>
                    <li id="step-1">
                        <h4>planifier</h4>
                        <p>Confiez-nous vos rêves d'évasion : en famille ou entre amis,
                             nous trouverons la formule qui comblera vos attentes.</p>
                    </li>

                    <li id="step-2">
                        <h4>organiser</h4>
                        <p>Bénéficiez de l'expertise de nos spécialistes de chaque 
                            destination, ils vous accompagnent dans la réalisation de votre voyage.</p>
                    </li>

                    <li id="step-3">
                        <h4>voyager</h4>
                        <p>Nous nous chargeons d'assurer votre sécurité et de veiller à votre pleine 
                            sérénité tout au long de votre voyage.</p>
                    </li>
                    <div class="clear"></div>
                </ul>
            </div>
        </section>

        <section id="possibilities">
            <div class="wrapper">
                <article style="background-image: url(images/article-image-1.jpg);">
                    <div class="overlay">
                        <h4> partez en famille</h4>
                        <p><small> offrez le meilleur à ceux que vous aimez et partagez des 
                            moment fabuleux</small></p>
                        <a href="#" class="button-2">plus d'infos</a>
                    </div>
                </article>
                <article style="background-image: url(images/article-image-2.jpg) ;">
                    <div class="overlay">
                        <h4> Envie de s'evader</h4>
                        <p><small> parfois un peu d'evasion serait le bienvenue et ferait
                             le plus grand bien</small></p>
                        <a href="#" class="button-2">plus d'infos</a>
                    </div>
                </article>
                <div class="clear"></div>
            </div>
        </section>

        <section id="contact">
            <div class="wrapper">
                <h3>Contactez-nous</h3>
                <p>Chez Travel Agency nous savons que voyager est une aventure humaine 
                    mais également un engagement financier important pour vous. C'est 
                    pourquoi nous mettons un point d'honneur à prendre en compte chacune 
                    de vos attentes pour vous aider dans la préparation de votre séjour,
                     circuit ou voyage sur mesure.</p>
                     <form>
                        <label for="name">NOM</label>
                        <input type="text" id="name" placeholder="votre nom">

                        <label for="email">email</label>
                        <input type="text" id="email" placeholder="votre email">

                        <input type="submit" value="ok" class="button-3">
                     </form>
            </div>
        </section>


        <footer>
            <h1> Travel Agency <span class="orange">.</span></h1>
            <div class="copyright">Copyright 2022 tous droit reservés.</div>
        </footer>

    </body>
</html>