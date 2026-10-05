<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: reserveren.php");
    exit;
}

// database verbinding 
$db_host = "localhost";
$db_gebruiker = "root";
$db_wachtwoord = "";
$db_naam = "aurora";

$conn = mysqli_connect($db_host, $db_gebruiker, $db_wachtwoord, $db_naam);
if (!$conn) {
    die("Verbinding met database mislukt: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

// formulierwaardes 
$naam = trim($_POST["naam"] ?? "");
$achternaam = trim($_POST["achternaam"] ?? "");
$email = trim($_POST["email"] ?? "");
$telefoon = trim($_POST["telefoon"] ?? "");
$volwassenen = ($_POST["volwassenen"] ?? "") !== "" ? (int)$_POST["volwassenen"] : 1;
$kinderen = ($_POST["kinderen"] ?? "") !== "" ? (int)$_POST["kinderen"] : 0;
$huisdieren = ($_POST["huisdieren"] ?? "") !== "" ? $_POST["huisdieren"] : "nee";
$kamer = $_POST["kamer"] ?? "";
$aantal_kamers = (int)($_POST["aantal_kamers"] ?? 1);
$aankomstdatum = $_POST["aankomstdatum"] ?? "";
$vertrekdatum = $_POST["vertrekdatum"] ?? "";

// controleren voor fouten
$fouten = [];

if ($naam === "" || $achternaam === "" || $email === "" || $telefoon === "") {
    $fouten[] = "Vul alle verplichte velden in.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $fouten[] = "Het e-mailadres is ongeldig.";
}
if (!in_array($kamer, ["eenpersoons", "tweepersoons", "suite"], true)) {
    $fouten[] = "Ongeldige kamerkeuze.";
}
if ($aantal_kamers < 1) {
    $fouten[] = "Het aantal kamers moet minimaal 1 zijn.";
}
if ($aankomstdatum === "" || $vertrekdatum === "" || $vertrekdatum <= $aankomstdatum) {
    $fouten[] = "De check-out datum moet na de check-in datum liggen.";
}

if (!empty($fouten)) {
    echo "<h2>Er ging iets mis</h2><ul>";
    foreach ($fouten as $fout) {
        echo "<li>" . htmlspecialchars($fout) . "</li>";
    }
    echo "</ul><p><a href='reserveren.php'>Terug naar het formulier</a></p>";
    exit;
}

// opslaan in database 
$sql = "INSERT INTO reserveringen
        (naam, achternaam, email, telefoon, volwassenen, kinderen, huisdieren, kamer, aantal_kamers, aankomstdatum, vertrekdatum)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param(
    $stmt,
    "ssssiississ",
    $naam, $achternaam, $email, $telefoon,
    $volwassenen, $kinderen, $huisdieren,
    $kamer, $aantal_kamers, $aankomstdatum, $vertrekdatum
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: reserveren.php?gelukt=1");
    exit;
} else {
    echo "Opslaan mislukt: " . htmlspecialchars(mysqli_stmt_error($stmt));
}

mysqli_stmt_close($stmt);
mysqli_close($conn);