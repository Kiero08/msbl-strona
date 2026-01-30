<?php 
    $page_title = "Dołącz do nas - Północna Strona Koszykówki";
    include 'naglowek.php'; 
?>

<section class="container" style="margin-top: 120px; margin-bottom: 80px;">
    
    <div class="aurora-top-line" data-aos="fade-up">
        <h2 style="font-family: var(--font-heading); font-size: 2.5rem; margin-bottom: 20px;">DOŁĄCZ DO <span style="color: var(--secondary);">GRY</span></h2>
        <p style="font-size: 1.1rem; color: #aaa; max-width: 600px;">
            Niezależnie od tego, czy chcesz grać, pomagać czy po prostu kibicować – dla każdego znajdzie się miejsce w naszej ekipie.
        </p>
    </div>

    <div class="aurora-card" data-aos="fade-up" data-aos-delay="100" style="max-width: 700px; margin: 40px auto 0;">
        
        <form action="mail.php" method="POST">
            
            <div class="form-group">
                <label for="name" style="color: var(--primary); font-weight: bold; margin-bottom: 5px; display: block;">Imię i Nazwisko</label>
                <input type="text" id="name" name="name" placeholder="Twoje dane..." required>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div class="form-group">
                    <label for="email" style="color: var(--primary); font-weight: bold; margin-bottom: 5px; display: block;">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="mail@przyklad.pl" required>
                </div>
                <div class="form-group">
                    <label for="role" style="color: var(--primary); font-weight: bold; margin-bottom: 5px; display: block;">Twoja rola</label>
                    <select id="role" name="role">
                        <option value="zawodnik">Zawodnik</option>
                        <option value="wolontariusz">Wolontariusz</option>
                        <option value="sympatyk">Sympatyk</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="message" style="color: var(--primary); font-weight: bold; margin-bottom: 5px; display: block;">Dlaczego chcesz do nas dołączyć?</label>
                <textarea id="message" name="message" rows="5" placeholder="Napisz kilka słów o swojej pasji..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Wyślij zgłoszenie</button>
        </form>
    </div>

</section>

<?php include 'stopka.php'; ?>