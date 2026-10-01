<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora Hotel</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header class="site-header">
        <div class="brand">
            <a href="index.php" class="brand-name">Aurora</a>
            <span class="brand-sub">HOTEL GOUDA</span>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="reserveren.php">Reserveren</a></li>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="nav-divider" aria-hidden="true"></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero">
            <div class="hero-content">
                <div class="stars">
                    ★ ★ ★ ★ ★
                </div>
                <h1>
                    Verblijf in het beste hotel<br>
                    van Gouda
                </h1>
                <p class="hero-intro">
                    Hotel Aurora is uitgeroepen tot Beste Hotel van Gouda 2026.
                    Ervaar zelf waarom. Geniet van stijlvolle kamers, persoonlijke
                    service en een verblijf waarbij comfort en gastvrijheid centraal
                    staan.
                </p>
                <p class="hero-text">
                    Of je nu komt voor een romantisch weekend, een ontspannen nacht of
                    een bezoek aan Gouda: bij Hotel Aurora ben je verzekerd van een
                    verblijf om naar uit te kijken.
                </p>
                <a href="kamers.php" class="button button-gold">
                    BEKIJK KAMER →
                </a>
                <div class="scroll-down">
                    <span>SCROLL DOWN</span>
                    <span class="scroll-arrow">⌄</span>
                </div>
            </div>
        </section>

        <!-- WAAROM AURORA -->
        <section class="section why-section">
            <div class="section-heading">
                <h2>Waarom Aurora</h2>
                <p>
                    Meer dan een hotel. Een bijzondere plek in het hart van Gouda.
                </p>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">☆</div>
                    <h3>Beste hotel van Gouda 2026</h3>
                    <p>
                        Uitgeroepen tot beste hotel van Gouda 2026, een erkenning
                        voor onze service en kwaliteit.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">▱</div>
                    <h3>Rust en comfort</h3>
                    <p>
                        Stijlvolle kamers, heerlijke bedden en een rustige sfeer
                        voor een ontspannen verblijf.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">♡</div>
                    <h3>Persoonlijke gastvrijheid</h3>
                    <p>
                        Een warm welkom en persoonlijke aandacht maken het verschil.
                    </p>
                </div>
            </div>
        </section>

        <!-- KAMERS -->
        <section class="section rooms-section">
            <div class="section-heading">
                <h2>Onze kamers</h2>
                <p>
                    Kies de kamer die bij jouw verblijf past.
                </p>
            </div>
            <div class="rooms-grid">
                <!-- Eenpersoonskamer -->
                <article class="room-card">
                    <div class="room-image room-image-single"></div>
                    <div class="room-info">
                        <h3>Eenpersoonskamer</h3>
                        <p>
                            Een comfortabele kamer met alle benodigde faciliteiten
                            voor een prettig verblijf.
                        </p>
                        <span class="price-label">VANAF</span>
                        <div class="price">
                            € 95 <span>per nacht</span>
                        </div>
                        <a href="kamer.php?type=eenpersoons" class="button button-outline">
                            BEKIJK KAMER →
                        </a>
                    </div>
                </article>

                <!-- Tweepersoonskamer -->
                <article class="room-card">
                    <div class="room-image room-image-double"></div>
                    <div class="room-info">
                        <h3>Tweepersoonskamer</h3>
                        <p>
                            Ruime en stijlvolle kamer, ideaal voor een ontspannen
                            weekend samen.
                        </p>
                        <span class="price-label">VANAF</span>
                        <div class="price">
                            € 125 <span>per nacht</span>
                        </div>
                        <a href="kamer.php?type=tweepersoons" class="button button-outline">
                            BEKIJK KAMER →
                        </a>
                    </div>
                </article>
            </div>
        </section>

        <!-- ONTBIJT & FACILITEITEN -->
        <section class="section facilities-section">
            <div class="section-heading">
                <h2>Ontbijt &amp; faciliteiten</h2>
                <p>
                    Alles wat je nodig hebt voor een zorgeloos verblijf.
                </p>
            </div>
            <div class="facilities-grid">
                <div class="facility">
                    <div class="facility-icon">♨</div>
                    <h3>Ontbijt optioneel</h3>
                    <p>
                        Geniet van een uitgebreid ontbijt in onze ontbijtruimte.
                    </p>
                </div>
                <div class="facility">
                    <div class="facility-icon">♨</div>
                    <h3>Ontbijt optioneel</h3>
                    <p>
                        Geniet van een uitgebreid ontbijt in onze ontbijtruimte.
                    </p>
                </div>
                <div class="facility">
                    <div class="facility-icon">♨</div>
                    <h3>Ontbijt optioneel</h3>
                    <p>
                        Geniet van een uitgebreid ontbijt in onze ontbijtruimte.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand">
                <span class="brand-name">Aurora</span>
                <span class="brand-sub">HOTEL GOUDA</span>
            </div>

            <nav class="footer-nav">
                <a href="kamers.php">Kamers</a>
                <a href="faciliteiten.php">Faciliteiten</a>
                <a href="over.php">Over Aurora</a>
                <a href="contact.php">Contact</a>
            </nav>

            <div class="footer-legal">
                <a href="privacy.php">Privacy</a>
                <span>|</span>
                <a href="voorwaarden.php">Algemene voorwaarden</a>
                <span>|</span>
                <a href="cookies.php">Cookies</a>
            </div>
        </div>

        <p class="footer-copy">
            &copy; 2026 Hotel Aurora Gouda. Alle rechten voorbehouden.
        </p>
    </footer>

  </body>
</html>