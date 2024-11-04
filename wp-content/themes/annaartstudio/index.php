<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" <?php echo 'href="'.get_template_directory_uri().'/assets/css/style.css'.'"';?>>
    <script type="text/javascript" <?php echo 'src="'.get_template_directory_uri().'/assets/js/main.js'.'"';?>></script>
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a href="/">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png';?>">
            </a>
            <div class="header-contacts">
                <div class="header-socials">
                    <a target="_blank" href="https://facebook.com/">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/facebook.png';?>"/>
                    </a>
                    <a target="_blank" href="https://instagram.com/">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/instagram.png';?>"/>
                    </a>
                </div>
                <div class="header-phone-contacts">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/phone.png';?>"/>
                    <a href="tel:+48579192951" class="header-phone">+48 579 192 951</a>
                </div>
            </div>
        </div>
    </header>
    <section class="main-section">
        <div class="main-section-container">
            <h1 class="main-section-text">Warsztaty na eventy</h1>
            <div class="main-content-container">
                <div class="maincontent-section">
                    <div class="mainimage-content-container">
                        <img class="mainimage-img" src="http://annawordpress/wp-content/themes/annaartstudio/assets/img/main-backimage.png" alt="Фоновое изображение">
                        <span class="mainimage-content-text">Rysowanie pocztówek piaskiem</span>    
                    </div>
                    <div class="maincontain-btn-container">
                        <span class="maincontain-text">Staliśmy się częścią każdego wydarzenia – zarówno dużego, jak i małego.</span>
                        <a href="/" class="url-btn">
                            <span class="maincontain-btn-text">Zacznijmy</span>
                            <img src="<?php echo get_template_directory_uri().'/assets/img/arrow-btn.png';?>"/>
                        </a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri().'/assets/img/main-image.png';?>"/>
            </div>
        </div>
    </section>
    <section class="festival-section">
        <div class="festival-container">
            <img src="<?php echo get_template_directory_uri().'/assets/img/festival-image.png';?>"/>
            <div class="festival-content-container">
                <div class="festival-image-content">
                    <h1 class="festival-image-text">Dla firm i festywali</h1>
                    <img class="festival-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-festival.png';?>"/>
                </div>
                <span class="festival-content-text">Zachęcamy firmy do zamówienia naszych warsztatów animacji piaskowej na festiwale i imprezy firmowe! Uczestnicy w zaledwie 5 minut nauczą się techniki rysowania piaskiem, tworząc unikalne pocztówki. Na wydarzeniu możemy ustawić do 5 stołów jednocześnie, a profesjonalna obsługa z naszego studia DIAZ-art studio zapewni sprawny przebieg warsztatów i wyjątkowe wrażenia dla uczestników.</span>
            </div>
        </div>
    </section>
    <section class="parents-section">
        <div class="parents-section-container">
            <div class="parents-content-container">
                <div class="parents-image-content">
                    <h1 class="parents-image-text">Dla rodziców i dzieci</h1>
                    <img class="parents-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-parents.png';?>"/>
                </div>
                <span class="parents-content-text">Zapraszamy rodziców do zamówienia naszych warsztatów animacji piaskowej na urodziny i kameralne imprezy! Dzieci w szybkim, 5-minutowym szkoleniu nauczą się rysowania piaskiem na specjalnych stołach, tworząc piękne pocztówki. Każda praca jest natychmiast fotografowana, drukowana i elegancko zapakowana. To nie tylko zabawa, ale także wspaniała pamiątka z przyjęcia! Nasze warsztaty mogą obsługiwać jednocześnie do 5 stołów, a profesjonalny zespół z DIAZ-art studio zadba o niezapomniane chwile pełne kreatywności.</span>
            </div>
            <img src="<?php echo get_template_directory_uri().'/assets/img/parents-image.png';?>"/>
        </div>
    </section>
    <section class="hotel-section">
        <div class="hotel-section-container">
            <img src="<?php echo get_template_directory_uri().'/assets/img/hotel-image.png';?>"/>
            <div class="hotel-content-container">
                <div class="hotel-image-content">
                    <h1 class="hotel-image-text">Dla hoteli i restauracji</h1>
                    <img class="hotel-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-hotel.png';?>"/>
                </div>
                <span class="hotel-content-text">Zapraszamy rodziców do zamówienia naszych warsztatów animacji piaskowej na urodziny i kameralne imprezy! Dzieci w szybkim, 5-minutowym szkoleniu nauczą się rysowania piaskiem na specjalnych stołach, tworząc piękne pocztówki. Każda praca jest natychmiast fotografowana, drukowana i elegancko zapakowana. To nie tylko zabawa, ale także wspaniała pamiątka z przyjęcia! Nasze warsztaty mogą obsługiwać jednocześnie do 5 stołów, a profesjonalny zespół z DIAZ-art studio zadba o niezapomniane chwile pełne kreatywności.</span>
            </div>
        </div>
    </section>
    <section class="seminar-section">
        <div class="seminar-section-container">
            <span class="seminar-section-maintext">Porozmawiajmy o organizacji warsztata na Twoim wydarzeniu!</span>
            <div class="seminar-section-content">
                <span class="seminar-section-content-text">Jeśli jesteś zainteresowany nawiązaniem współpracy, skontaktuj się z nami. Przedstawimy efekty naszych wcześniejszych działań i omówimy najlepsze i najciekawsze rozwiązanie specjalnie dla Ciebie.</span>
                <a href="/" class="url-btn">
                    <span class="maincontain-btn-text">Zacznijmy</span>
                    <img src="<?php echo get_template_directory_uri().'/assets/img/arrow-btn.png';?>"/>
                </a>
            </div>
        </div>
    </section>
    <section class="proffesional-section">
        <div class="proffesional-section-container">
            <div class="proffesional-content-container">
                <div class="proffesional-image-content">
                    <h1 class="proffesional-image-text">Je steśmy specjalistami w organizacji najlepszej rozrywki dla dzieci i dorosłych</h1>
                    <img class="professional-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-proffesional.png';?>"/>
                </div>
            </div>
            <div class="proffessional-slider">
                <button class="proffessional-slider-left-btn">
                    <svg width="25.448242" height="45.028320" viewBox="0 0 25.4482 45.0283" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	                    <path id="Vector" d="M0.6 23.91L22.19 44.49C22.55 44.83 23.03 45.02 23.53 45.02C24.03 45.02 24.5 44.83 24.87 44.49L24.89 44.47C25.06 44.3 25.2 44.1 25.3 43.88C25.39 43.65 25.44 43.41 25.44 43.17C25.44 42.93 25.39 42.69 25.3 42.47C25.2 42.25 25.06 42.05 24.89 41.88L4.55 22.51L24.89 3.14C25.06 2.97 25.2 2.77 25.3 2.55C25.39 2.33 25.44 2.09 25.44 1.85C25.44 1.6 25.39 1.36 25.3 1.14C25.2 0.92 25.06 0.72 24.89 0.55L24.87 0.53C24.5 0.19 24.03 0 23.53 0C23.03 0 22.55 0.19 22.19 0.53L0.6 21.11C0.41 21.29 0.25 21.51 0.15 21.75C0.05 21.99 0 22.25 0 22.51C0 22.77 0.05 23.03 0.15 23.27C0.25 23.51 0.41 23.73 0.6 23.91Z" fill="#767676" fill-opacity="1.000000" fill-rule="nonzero"/>
                    </svg>
                </button>
                <div class="proffessional-slider-items">
                    <div class="proffessional-slider-item">
                        <div class="proff-slider-item-content">
                            <div class="proff-slider-named-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/photo-review-1.png';?>"/>
                                <span class="proff-slider-named-text">Lana Rendly</span>
                            </div>
                            <div class="proff-slider-stars-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                            </div>
                        </div>
                        <span class="proff-slider-item-text">Spędziliśmy fantastyczny czas w studiu animacji piaskowej. Atmosfera była niezwykle twórcza, a nasza prowadząca doskonale wprowadziła nas w tajniki tej sztuki. Każdy z nas mógł dać upust swojej wyobraźni i stworzyć coś wyjątkowego.</span>
                    </div>
                    <div class="proffessional-slider-item">
                        <div class="proff-slider-item-content">
                            <div class="proff-slider-named-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/photo-review-2.png';?>"/>
                                <span class="proff-slider-named-text">Don</span>
                            </div>
                            <div class="proff-slider-stars-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                            </div>
                        </div>
                        <span class="proff-slider-item-text">Ostatnio odwiedziliśmy studio animacji piaskowej i to była jedna z najlepszych decyzji! Cały proces tworzenia był niezwykle relaksujący, a praca z piaskiem dawała niesamowitą frajdę.</span>
                    </div>
                    <div class="proffessional-slider-item">
                        <div class="proff-slider-item-content">
                            <div class="proff-slider-named-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/photo-review-3.png';?>"/>
                                <span class="proff-slider-named-text">Ksenia</span>
                            </div>
                            <div class="proff-slider-stars-container">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                                <img src="<?php echo get_template_directory_uri().'/assets/img/star-reviews.png';?>"/>
                            </div>
                        </div>
                        <span class="proff-slider-item-text">Nasza wizyta w studiu animacji piaskowej przerosła nasze oczekiwania! Uczyliśmy się tworzyć animacje w miłej i zachęcającej atmosferze. Nasze dzieła były pełne emocji i osobistego wyrazu.</span>
                    </div>  
                </div>
                <button class="proffessional-slider-right-btn">
                    <svg width="25.448242" height="45.028320" viewBox="0 0 25.4482 45.0283" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	                    <path id="Vector" d="M24.84 23.91L3.25 44.49C2.89 44.83 2.41 45.02 1.91 45.02C1.41 45.02 0.93 44.83 0.57 44.49L0.55 44.47C0.37 44.3 0.23 44.1 0.14 43.88C0.04 43.65 0 43.41 0 43.17C0 42.93 0.04 42.69 0.14 42.47C0.23 42.25 0.37 42.05 0.55 41.88L20.89 22.51L0.55 3.14C0.37 2.97 0.23 2.77 0.14 2.55C0.04 2.33 0 2.09 0 1.85C0 1.6 0.04 1.36 0.14 1.14C0.23 0.92 0.37 0.72 0.55 0.55L0.57 0.53C0.93 0.19 1.41 0 1.91 0C2.41 0 2.89 0.19 3.25 0.53L24.84 21.11C25.03 21.29 25.18 21.51 25.29 21.75C25.39 21.99 25.44 22.25 25.44 22.51C25.44 22.77 25.39 23.03 25.29 23.27C25.18 23.51 25.03 23.73 24.84 23.91Z" fill="#FDD551" fill-opacity="1.000000" fill-rule="nonzero"/>
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <section class="written-section">
        <div class="written-section-container">
            <div class="written-content-container">
                <div class="written-image-content">
                    <h1 class="written-image-text">Pisemna recenzja</h1>
                    <img class="written-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-written.png';?>"/>
                </div>
            </div>
            <div class="written-slider-container">
                <div class="written-slider-items">
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-1.png';?>"/>
                    </div>
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-2.png';?>"/>
                    </div>
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-3.png';?>"/>
                    </div>
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-4.png';?>"/>
                    </div>
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-5.png';?>"/>
                    </div>
                    <div class="written-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/written-item-6.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="working-section">
        <div class="working-section-container">
            <div class="working-content-container">
                <div class="working-image-content">
                    <h1 class="working-image-text">Współpracujemy z najlepszymi</h1>
                    <img class="working-img" src="<?php echo get_template_directory_uri().'/assets/img/backimage-working.png';?>"/>
                </div>
            </div>
            <div class="working-slider-container">
                <div class="working-slider-items">
                    <div class="working-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/working-item-1.png';?>"/>
                    </div>
                    <div class="working-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/working-item-2.png';?>"/>
                    </div>
                    <div class="working-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/working-item-3.png';?>"/>
                    </div>
                    <div class="working-slider-item">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/working-item-4.png';?>"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cooperation-section">
        <div class="cooperation-section-container">
            <div class="cooperation-form-container">
                <div class="cooperation-formtext-container">
                    <h1 class="cooperation-maintext">Współpracuj z nami</h1>
                    <span class="cooperation-text">Zostaw swoje kontakty i otrzymaj szczegółową prezentację o wszystkich możliwościach oraz informację jak rozpocząć z nami współpracę</span>
                </div>
                <form class="form-cooperation">
                    <div class="form-cooperation-container">
                        <div class="form-cooperation-input-container">
                            <input class="form-cooperation-input-small" placeholder="Imię (wymagane)"/>
                            <input class="form-cooperation-input-small" placeholder="Nazwisko"/>
                        </div>
                        <input class="form-cooperation-input" placeholder="Email (wymagane)"/>
                        <div class="form-cooperation-input-container">
                            <input class="form-cooperation-input-small" placeholder="Planowany termin imprezy"/>
                            <input class="form-cooperation-input-small" placeholder="Planowane miejsce imprezy"/>
                        </div>
                        <input class="form-cooperation-input" placeholder="Telefon (wymagane)"/>
                        <input class="form-cooperation-input" placeholder="Planowany budżet"/>
                        <input class="form-cooperation-input" placeholder="Twoja wiadomość"/>
                        <div class="checkbox-container-form">
                            <input type="checkbox" class="checkbox-input"/>
                            <label class="checkbox-input-text">Wyrażam zgodę na przetwarzanie moich danych osobowych przez DIAZ-art studio w celu i zakresie koniecznym do udzielenia odpowiedzi na przesłane pytanie *.</label>
                        </div>
                    </div>
                    <button type="submit" class="form-cooperation-btn">Wyślij wiadomość</button>
                </form>
            </div>
            <div class="cooperation-image-container">
                <img src="<?php echo get_template_directory_uri().'/assets/img/cooperation-image.png';?>"/>
                <div class="cooperation-image-textcontainer">
                    <span class="cooperation-image-text">Anna Diaz</span>
                    <span class="cooperation-image-text">Założycielka firmy</span>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages-section">
        <div class="advantages-section-container">
            <div class="advantages-row">
                <span class="advantages-maintext">Warsztaty firmowe – Oryginalne atrakcje eventowe dla Twojej firmy</span>
                <div class="advantages-text-container">
                    <span class="advantages-text">W dzisiejszych czasach, kiedy rywalizacja na rynku jest coraz większa, przedsiębiorstwa szukają innowacyjnych sposobów na wyróżnienie się i przyciągnięcie klientów. Warsztaty firmowe stanowią doskonałą okazję do zbudowania zespołu, rozwijania kreatywności oraz integracji pracowników. Oferując oryginalne atrakcje eventowe, można nie tylko wzbogacić program wydarzenia, ale również stworzyć niezapomniane wspomnienia, które na długo pozostaną w pamięci uczestników.</span>
                </div>
            </div>
            <div class="advantages-row">
                <span class="advantages-maintext">Dlaczego warto zainwestować w warsztaty firmowe?</span>
                <div class="advantages-text-container">
                    <span class="advantages-text">Warsztaty firmowe to nie tylko czas spędzony w gronie współpracowników, ale także możliwość rozwijania umiejętności i kreatywności w sposób interaktywny i angażujący. Współczesne podejście do organizacji wydarzeń stawia na oryginalne atrakcje eventowe, które przyciągają uwagę i angażują uczestników. Nasze warsztaty animacji piaskowej są idealnym przykładem takiej atrakcji, łącząc sztukę z zabawą.</span>
                    <span class="advantages-text">Podczas warsztatów uczestnicy mają okazję nauczyć się techniki rysowania piaskiem na specjalnych stołach. W ciągu zaledwie pięciu minut, każdy z uczestników może stworzyć unikalne dzieło, które zostanie natychmiast sfotografowane, a następnie wydrukowane jako piękna pocztówka. Tego rodzaju doświadczenie nie tylko pobudza kreatywność, ale także integruje zespół, dając możliwość wspólnej zabawy i współpracy.</span>
                </div>
            </div>
            <div class="advantages-row">
                <span class="advantages-maintext">Oryginalne atrakcje eventowe – klucz do sukcesu</span>
                <div class="advantages-text-container">
                    <span class="advantages-text">Organizując event, warto postawić na oryginalne atrakcje, które wyróżnią Twoje wydarzenie na tle innych. Warsztaty firmowe są doskonałym rozwiązaniem na imprezy integracyjne, konferencje czy targi. Dzięki nim, uczestnicy mogą aktywnie brać udział w tworzeniu, co sprawia, że każde wydarzenie staje się wyjątkowe</span>
                    <span class="advantages-text">Nasze warsztaty animacji piaskowej można zorganizować w różnych lokalizacjach, co czyni je idealnym rozwiązaniem na każdą okazję. Niezależnie od pory roku, nasze atrakcje są elastyczne i łatwe do dostosowania do potrzeb klienta. W letnie dni uczestnicy mogą cieszyć się świeżym powietrzem, a zimą przenieść się w magiczny świat kreatywności w ciepłym wnętrzu.</span>
                </div>
            </div>
            <div class="advantages-row">
                <span class="advantages-maintext">Jak rozpocząć współpracę?</span>
                <div class="advantages-text-container">
                    <span class="advantages-text">Zachęcamy do kontaktu z nami, aby uzyskać więcej informacji na temat naszych warsztatów firmowych oraz oryginalnych atrakcji eventowych. Oferujemy kompleksową obsługę oraz dostosowanie programu do specyfiki Twojej firmy i oczekiwań uczestników. Warsztaty firmowe to nie tylko świetna zabawa, ale także inwestycja w rozwój zespołu i budowanie pozytywnego wizerunku firmy.</span>
                    <span class="advantages-text">Nie zwlekaj! Zainwestuj w oryginalne atrakcje eventowe i spraw, aby Twoje wydarzenie stało się niezapomniane. Warsztaty firmowe z animacją piaskową to doskonały wybór dla każdej organizacji, która pragnie wyróżnić się na rynku i zbudować silniejsze więzi w zespole.</span>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer-container">
            <a href="/">
                <img src="<?php echo get_template_directory_uri().'/assets/img/logo.png';?>">
            </a>
            <div class="footer-content">
                <span class="footer-text-politics">© 2002 DIAZ-art studio. Wszelkie prawa zastrzeżone</span>
                <div class="footer-urls-container">
                    <a href="/" class="footer-url">Polityka prywatności</a>
                    <a href="/" class="footer-url">Kontakt</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>