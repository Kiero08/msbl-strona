<?php
// 1. KONFIGURACJA
$adresat = "kontakt@psklebork.pl"; // <-- TU WPISZ SWÓJ E-MAIL, NA KTÓRY MAJĄ PRZYCHODZIĆ WIADOMOŚCI
$domena = "psklebork.pl"; // <-- TU WPISZ ADRES SWOJEJ STRONY (bez https://)

// 2. SPRAWDZENIE CZY FORMULARZ ZOSTAŁ WYSŁANY
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3. POBIERANIE I CZYSZCZENIE DANYCH (Ochrona przed atakami)
    $imie = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $wiadomosc = trim($_POST["message"]);
    
    // Sprawdzamy, czy to formularz "Dołącz" (czy ma pole 'role')
    $rola = isset($_POST["role"]) ? htmlspecialchars($_POST["role"]) : "";

    // 4. WALIDACJA (Czy pola nie są puste?)
    if (empty($imie) || empty($wiadomosc) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Jeśli błąd, wróć do formularza (można tu zrobić stronę błędu)
        header("Location: index.html");
        exit;
    }

    // 5. BUDOWANIE TREŚCI MAILA
    $temat = "Wiadomość ze strony PSK od: $imie";
    
    $tresc = "Otrzymałeś nową wiadomość ze strony internetowej.\n\n";
    $tresc .= "Imię i Nazwisko: $imie\n";
    $tresc .= "E-mail: $email\n";
    
    // Jeśli to rekrutacja, dodaj rolę
    if (!empty($rola)) {
        $tresc .= "Wybrana rola: " . strtoupper($rola) . "\n";
        $temat = "REKRUTACJA PSK: $imie ($rola)";
    }
    
    $tresc .= "\nWiadomość:\n$wiadomosc\n";

    // 6. NAGŁÓWKI (Żeby nie wpadało do spamu)
    // Wiadomość technicznie idzie z Twojego serwera, ale "Odpisz do" idzie do nadawcy
    $naglowki = "From: Formularz WWW <no-reply@$domena>\r\n";
    $naglowki .= "Reply-To: $email\r\n";
    $naglowki .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // 7. WYSYŁKA
    if (mail($adresat, $temat, $tresc, $naglowki)) {
        // Sukces - przekierowanie na stronę z podziękowaniem
        header("Location: sukces.html");
    } else {
        // Błąd serwera
        echo "Wystąpił błąd podczas wysyłania wiadomości.";
    }

} else {
    // Jeśli ktoś próbuje wejść w plik bezpośrednio, wyrzuć go na główną
    header("Location: index.html");
}
?>
