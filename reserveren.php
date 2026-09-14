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

<main class="page">
  <h2 class="page-title">Reserverings-formulier</h2>

  <div class="form-card">
    <form action="verwerk_reservering.php" method="post">

      <div class="form-row two-col">
        <div class="field">
          <label for="naam">Naam *</label>
          <input type="text" id="naam" name="naam" required />
        </div>
        <div class="field">
          <label for="achternaam">Achternaam *</label>
          <input type="text" id="achternaam" name="achternaam" required />
        </div>
      </div>

      <div class="form-row">
        <div class="field">
          <label for="email">Email *</label>
          <input type="email" id="email" name="email" required />
        </div>
      </div>

      <div class="form-row three-col">
        <div class="field">
          <label for="telefoon">Telefoon *</label>
          <input type="tel" id="telefoon" name="telefoon" required />
        </div>
        <div class="field">
          <label for="volwassenen">Volwassenen</label>
          <select id="volwassenen" name="volwassenen">
            <option value="">Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
        </div>
        <div class="field">
          <label for="kinderen">Kinderen</label>
          <select id="kinderen" name="kinderen">
            <option value="">Select</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <div class="field field-narrow">
          <label for="huisdieren">Huisdieren</label>
          <select id="huisdieren" name="huisdieren">
            <option value="">Select</option>
            <option value="ja">Ja</option>
            <option value="nee">Nee</option>
          </select>
        </div>
      </div>

      <div class="form-row two-col">
        <div class="field">
          <label for="kamer">Gekozen kamer *</label>
          <select id="kamer" name="kamer" required>
            <option value="eenpersoons">Eenpersoonskamer</option>
            <option value="tweepersoons" selected>Standaard kamer</option>
            <option value="suite">Suite</option>
          </select>
        </div>
        <div class="field">
          <label for="aantal_kamers">Aantal kamers *</label>
          <input type="number" id="aantal_kamers" name="aantal_kamers" min="1" value="1" required />
        </div>
      </div>

      <div class="form-row two-col">
        <div class="field">
          <label for="aankomstdatum">Check-in *</label>
          <input type="date" id="aankomstdatum" name="aankomstdatum" required />
        </div>
        <div class="field">
          <label for="vertrekdatum">Check-out *</label>
          <input type="date" id="vertrekdatum" name="vertrekdatum" required />
        </div>
      </div>

      <button type="submit" class="submit-btn">Boek nu</button>

      <p class="form-note">Let op! Wijzigingen of annuleringen kunnen alleen telefonisch behandeld worden</p>
    </form>
  </div>
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
  <p class="footer-copy">&copy; 2026 Hotel Aurora Gouda. Alle rechten voorbehouden.</p>
</footer>

</body>
</html>