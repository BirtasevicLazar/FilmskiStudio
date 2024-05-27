<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmski studio - Pregled filmova</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <style>
        .navbar-transparent {
            background-color: rgba(0, 0, 0, 0.9); /* Transparent background */
        }
        
        .full-screen-image {
            position: relative;
        }
        
        .full-screen-image::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60vh;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
            z-index: 1;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff; /* Bela boja teksta */
            text-align: center;
            background-color: rgba(0, 0, 0, 0.75); /* Poluprovidna crna pozadina */
            border-radius: 20px;
            padding: 20px; /* Povećan padding */
            box-shadow: 0 0 20px rgba(255, 255, 255, 1); /* Dodaje sjajni beli border */
            font-family: 'Roboto', sans-serif; /* Promena fonta */
        }

        .centered-text h1 {
            font-size: 48px; /* Veći font za naslov */
            font-weight: 700; /* Deblji font za naslov */
            margin-bottom: 10px; /* Razmak ispod naslova */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Dodavanje senke tekstu */
        }

        .centered-text h2 {
            font-size: 24px; /* Veći font za podnaslov */
            font-weight: 400; /* Tanji font za podnaslov */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Dodavanje senke tekstu */
        }

        @media (max-width: 768px) {
            .centered-text h1 {
                font-size: 32px; /* Smanjenje veličine fonta na manjim ekranima */
            }
            .centered-text h2 {
                font-size: 18px; /* Smanjenje veličine fonta na manjim ekranima */
            }
            .container .row .col-lg-3 {
                margin: 2px; /* Još manji razmak za demonstraciju */
            }
        }
        .card-link {
        }
        .centered-text h2 {
            font-weight: 200; /* Smanjena debljina fonta za podnaslov */
        }
        .centered-text h1 {
            font-weight: 300; /* Smanjena debljina fonta za podnaslov */
        }
        .card-link {
            text-decoration: none; /* Uklanja podcrtavanje */
            color: inherit; /* Nasleđuje boju teksta iz roditeljskog elementa */
            display: block; /* Čini link blok elementom */
        }

        .container .row .col-lg-3 .card {
            display: flex;
            flex-direction: column;
            min-height: 300px; /* Podesite visinu prema potrebi */
        }

        .card-link:hover .card {
            transform: scale(1.05); /* Povećava karticu kada je hover */
        }

        .col-lg-3 {
            flex: 1 0 21%; /* 21% omogućava malo prostora za margine/padding */
            margin: 10px; /* Dodaje malo prostora između kartica */
        }

        .card-img-top {
            width: 100%; /* Osigurava da slika pokriva širinu kartice */
            height: auto; /* Visina slike se automatski prilagođava da očuva proporcije */
            object-fit: cover; /* Slika e pokriti dostupan prostor, izrezana ako je potrebno */
        }

        .card-body {
            padding: 15px; /* Povećan padding unutar kartice */
            padding-bottom: 20px; /* Dodatni padding na dnu za bolji vizuelni balans */
            text-align: center; /* Centriranje teksta unutar kartice */
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .card-title {
            margin-bottom: 10px; /* Razmak između naslova i žanra */
            white-space: nowrap; /* Sprečava prelamanje teksta */
            overflow: hidden; /* Sakriva tekst koji izlazi iz granica elementa */
            text-overflow: ellipsis; /* Dodaje elipsu ako tekst prelazi dostupan prostor */
            font-size: 16px; /* Početna veličina fonta */
        }

        @media (max-width: 768px) {
            .card-title {
                font-size: 14px; /* Smanjenje veličine fonta na manjim ekranima */
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch; /* Ovo osigurava da sve kartice budu iste visine */
        }

        .footer {
            background-color: #343a40; /* Tamnija nijansa za profesionalniji izgled */
            padding: 40px 20px; /* Povećane padding vrednosti za više prostora */
            color: #f8f9fa;
        }

        .footer h5 {
            font-weight: 500; /* Smanjen font-weight za naslove */
            margin-bottom: 20px; /* Veći razmak ispod naslova */
        }

        .footer ul {
            list-style: none;
            padding-left: 0;
            margin-top: 0; /* Uklanja defaultni gornji margin */
        }

        .footer a {
            color: #f8f9fa;
            text-decoration: none;
            font-weight: 400; /* Smanjen font-weight za linkove */
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer .container {
            max-width: 1140px;
        }

        .text-center {
            margin-top: 30px; /* Povećan razmak iznad autorskih prava */
            font-size: 0.9rem;
            font-weight: 400; /* Smanjen font-weight za tekst autorskih prava */
        }

        /* Dodavanje margina između kolona za bolje razdvajanje */
        .footer .col-md-4 {
            margin-bottom: 20px;
        }

        #searchDropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 1000;
            display: none;
            width: 250px; /* Podesite širinu da odgovara input polju */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .dropdown-item {
            display: block;
            width: 100%;
            padding: 10px;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            text-decoration: none;
        }

        .dropdown-item img {
            vertical-align: middle;
            margin-right: 10px;
            border-radius: 5px; /* Zaobljeni uglovi slike */
        }

        .dropdown-item:hover, .dropdown-item:focus {
            color: #1d2124;
            text-decoration: none;
            background-color: #f8f9fa;
        }

        .navbar-nav {
            align-items: center;
        }

        #searchInput {
            width: 250px; /* Podesite širinu prema potrebi */
        }

        .form-inline {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        /* Još manji razmak između kartica */
        .col-md-6, .col-lg-3 {
            margin: 2px; /* Još manji razmak */
        }

        .card-text {
            min-height: 3em; /* Postavlja minimalnu visinu za dva reda teksta */
            display: flex;
            flex-direction: column;
            justify-content: space-around; /* Ravnomerno raspoređuje sadržaj unutar elementa */
        }
    </style>
</head>
<body>
    <div class="full-screen-image">
        <img src="Images/pozadina4.jpg" alt="Početna slika" style="width: 100vw; height: 100vh; display: block; object-fit: cover;">
        <div class="centered-text">
            <h1>Dobrodošli u FilmskiStudio</h1>
            <h2>Otkrijte svet filma sa nama</h2>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-transparent">
        <a class="navbar-brand" href="index.php">
            <img src="Images/FilmskiStudio2.png" alt="Filmski Studio" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pretraži filmove" aria-label="Search" id="searchInput">
                        <div id="searchDropdown" class="dropdown-menu" aria-labelledby="searchInput"></div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="linkBtn" href="admin_login.html"><button id="btn">Admin Prijava</button></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row g-1 justify-content-center">
            <?php
            include 'php/dbconnection.php';
            $query = mysqli_query($con, "SELECT * FROM filmovi");
            while ($row = mysqli_fetch_assoc($query)) {
                $filmId = $row['id'];
                $imagePath = $row['image_path'];
                echo "<div class='col-md-6 col-lg-3 mb-4'>"; // Koristi col-md-6 za manje ekrane (2 kartice), col-lg-3 za veće ekrane (4 kartice)
                echo "<a href='film_details.php?id=$filmId' class='card-link'>";
                echo "<div class='card h-100'>";
                if (file_exists($imagePath)) {
                    echo "<img class='card-img-top' src='$imagePath' alt='Slika filma'>";
                } else {
                    echo "<img class='card-img-top' src='Images/placeholder.png' alt='Placeholder'>";
                }
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . htmlspecialchars($row['naziv']) . "</h5>";
                echo "<p class='card-text'><small class='text-muted'>Žanr: " . htmlspecialchars($row['zanr']) . "</small></p>";
                echo "</div></div></a></div>";
            }
            ?>
        </div>
    </div>
    <footer class="footer bg-dark text-white pt-4 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Kontakt</h5>
                    <ul class="list-unstyled">
                        <li>Adresa: Ulica 123, Grad</li>
                        <li>Telefon: +381 12 345 6789</li>
                        <li>Email: kontakt@filmskistudio.rs</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>O nama</h5>
                    <p>Dobrodošli na "FilmskiStudio", vašu krajnju destinaciju za detaljne uvide u svet filma. Naša platforma je posvećena pružanju sveobuhvatnih informacija o filmovima, od onih koji tek dolaze do klasika koji su oblikovali industriju.</p>
                </div>
                <div class="col-md-4">
                    <h5>Pratite nas</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Facebook</a></li>
                        <li><a href="#" class="footer-link">Instagram</a></li>
                        <li><a href="#" class="footer-link">Twitter</a></li>
                        <li><a href="#" class="footer-link">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                &copy; 2024 Filmski Studio. Sva prava zadržana.
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var linkBtn = document.getElementById("linkBtn");
        var btn = document.getElementById("btn");

        // Uvek omogući dugme kada se stranica učita
        btn.disabled = false;

        function redirectToPage() {
            window.location.href = "admin_login.html";
        }

        linkBtn.addEventListener("click", function(event) {
            event.preventDefault();
            btn.disabled = true; // Onemogući dugme samo privremeno
            setTimeout(function() {
                redirectToPage();
                // Opcionalno: ponovo omogući dugme ako je potrebno
                btn.disabled = false;
            }, 500);
        });
    });



    document.addEventListener("DOMContentLoaded", function() {
        var searchInput = document.getElementById("searchInput");
        var searchDropdown = document.getElementById("searchDropdown");

        searchInput.addEventListener("input", function() {
            var searchText = this.value;
            if (searchText.length > 0) {
                fetch('php/search_movies.php?query=' + searchText)
                .then(response => response.json())
                .then(data => {
                    searchDropdown.innerHTML = '';
                    data.forEach(function(movie) {
                        var option = document.createElement('a');
                        option.href = 'film_details.php?id=' + movie.id;
                        option.classList.add('dropdown-item');
                        option.innerHTML = `<img src="${movie.image_path}" alt="${movie.naziv}" style="width: 50px; height: auto; margin-right: 10px;"> ${movie.naziv}`;
                        searchDropdown.appendChild(option);
                    });
                    searchDropdown.style.display = 'block';
                });
            } else {
                searchDropdown.innerHTML = '';
                searchDropdown.style.display = 'none';
            }
        });

        document.addEventListener('click', function(event) {
            if (!searchInput.contains(event.target)) {
                searchDropdown.style.display = 'none';
            }
        });
    });
</script>

</body>
</html>

