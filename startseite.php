<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Portfolio</title>
    <!-- Einbindung der externen CSS-Datei -->
    <link rel="stylesheet" href="Portfoliostyle.css">
</head>
<body>

    <!-- Kopfbereich / Begrüßung -->
    <header>
        <div class="header-container">
            <!-- Platzhalter für das Foto (links) -->
            <div class="header-photo">
                <img src="Foto.jpg" alt="Profilbild von Elias" class="header-photo">
            </div>
            
            <!-- Begrüßungstext und Buttons (rechts) -->
            <div class="header-text">
                <h1>Hallo und Herzlich Willkommen auf meiner Webseite</h1>
                
                <p>Ich bin Elias, angehender Fachinformatiker für Anwendungsentwicklung. Mich fasziniert es,
                    wie aus logischem Denken und Code funktionierende Anwendungen entstehen 
                    – von C# und PHP bis hin zu Web-Projekten. Wenn ich nicht programmiere,
                     findest du mich beim Zocken, Reisen oder Angeln
                </p>  
                
                <nav> 
                    <a href="Lebenslauf.php">Lebenslauf</a> 
                    <a href="zeugnisse.php">Zeugnisse</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hauptinhalt der Seite -->
    <main>
        <!-- Sektion über meine Hobbys -->
        <section> 
            <h2>Meine Hobbys</h2> 

            <!-- HOBBY 1: ANGELN -->
            <article class="hobby-card">
                <div class="hobby-content">
                    <h3>Angeln</h3>
                    <p>Am Wasser sein, die Ruhe genießen und einfach mal abschalten. Für mich der beste Weg, um nach einem langen Tag am PC komplett den Kopf freizubekommen.</p>
                </div>
                <!-- 3D Prisma Slider -->
                <div class="hobby-slider-3d-stage">
                    <div class="hobby-cube">
                        <img src="angeln1.jpg" alt="Angeln Bild 1" class="slide">
                        <img src="angeln2.jpg" alt="Angeln Bild 2" class="slide">
                        <img src="angeln3.jpg" alt="Angeln Bild 3" class="slide">
                    </div>
                </div>
            </article>

            <!-- HOBBY 2: REISEN -->
            <article class="hobby-card">
                <div class="hobby-content">
                    <h3>Reisen</h3>
                    <p>Einfach mal rauskommen, neue Orte sehen und was vom Leben mitnehmen. Ich bin gerne unterwegs und entdecke neue Ecken.</p>
                </div>
                <!-- 3D Prisma Slider -->
                <div class="hobby-slider-3d-stage">
                    <div class="hobby-cube">
                        <img src="reisen1.jpg" alt="Reisen Bild 1" class="slide">
                        <img src="reisen2.jpg" alt="Reisen Bild 2" class="slide">
                        <img src="reisen3.jpg" alt="Reisen Bild 3" class="slide">
                    </div>
                </div>
            </article>

            <!-- HOBBY 3: GAMING -->
            <article class="hobby-card">
                <div class="hobby-content">
                    <h3>Gaming</h3>
                    <p>Ob schnelle Runden im Multiplayer oder entspanntes Zocken am Abend: Gaming gehört für mich einfach dazu. Macht Bock, hält das Hirn auf Trab und ist ideal, um mit Freunden am Start zu sein.</p>
                </div>
                <!-- 3D Prisma Slider -->
                <div class="hobby-slider-3d-stage">
                    <div class="hobby-cube">
                        <img src="gaming1.jpg" alt="Gaming Bild 1" class="slide">
                        <img src="gaming2.jpg" alt="Gaming Bild 2" class="slide">
                        <img src="gaming3.jpg" alt="Gaming Bild 3" class="slide">
                    </div>
                </div>
            </article>

        </section>
    </main>

    <!-- Fußzeile / Kontakt -->
    <footer>
        <p><strong>Telefon:</strong> 123456789</p>
        <p><strong>E-Mail:</strong> elias.neumann.2006@gmail.com</p>
    </footer>

</body>
</html>