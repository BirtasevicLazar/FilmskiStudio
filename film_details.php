<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalji Filma</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <style>
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .navbar-transparent {
            background-color: rgba(0, 0, 0, 0.9); /* Transparent background */
        }
        
        .row {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .col-md-6 {
            padding: 15px;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        #specific-id h1, #specific-id h2, #specific-id h3, #specific-id h4, #specific-id h5, #specific-id h6 {
            color: #ffffff; /* Skroz bela boja za naslove */
        }

        #specific-id p, #specific-id .lead, #specific-id .card-text {
            color: #f8f8f8; /* Svetlija nijansa sive, blizu bele */
        }

        /* Stilovi za formu za unos komentara */
        .comments-section {
            background-color: #333; /* Tamno siva boja */
            padding: 30px; /* Povećan padding */
            border-radius: 10px; /* Zaobljeniji uglovi */
            margin-top: 50px; /* Veći gornji margin */
            margin-bottom: 30px; /* Dodat margin na dnu */
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Dodavanje senke */
            color: #fff; /* Bela boja teksta */
        }

        .comments-section h2 {
            margin-bottom: 20px; /* Veći razmak ispod naslova */
            font-size: 24px; /* Veći font za naslov */
        }

        .comments-section form {
            margin-top: 30px; /* Veći razmak iznad forme */
        }

        .comments-section label {
            color: #ccc; /* Svetlija siva boja za labele */
            font-size: 16px; /* Veći font za labele */
        }

        .comments-section .btn-primary {
            background-color: #007bff; /* Plava boja za dugme */
            border: none;
            padding: 10px 20px; /* Veći padding za dugme */
            font-size: 16px; /* Veći font za tekst na dugmetu */
        }

        .comments-section .btn-primary:hover {
            background-color: #0056b3; /* Tamnija nijansa plave za hover */
        }

        /* Stilovi za prikaz komentara */
        .existing-comments .comment {
            background-color: #444; /* Malo svetlija tamno siva boja */
            padding: 20px; /* Povećan padding */
            margin-bottom: 20px; /* Veći razmak između komentara */
            border-radius: 8px; /* Zaobljeniji uglovi */
            box-shadow: 0 2px 4px rgba(0,0,0,0.15); /* Dodavanje senke */
            color: #fff; /* Bela boja teksta */
        }

        .existing-comments h4 {
            margin-top: 0;
            font-size: 18px; /* Veći font za ime */
        }

        .existing-comments p {
            font-size: 16px; /* Veći font za tekst komentara */
            line-height: 1.5; /* Veći razmak između linija teksta */
        }

        .main-content {
            min-height: 100%;
            position: relative;
            padding-bottom: 60px;
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

        .navbar-transparent {
            background-color: rgba(0, 0, 0, 0.9); /* Transparent background */
        }
        
        .navbar-nav {
            align-items: center; /* Centrira elemente vertikalno u navbar-u */
            justify-content: center; /* Centrira elemente horizontalno */
        }
    </style>
</head>
<body>
   

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

    <div class="main-content">
        <?php
        include 'php/dbconnection.php';
        $filmId = $_GET['id'];
        $query = mysqli_query($con, "SELECT * FROM filmovi WHERE id = $filmId");
        $film = mysqli_fetch_assoc($query);

        if ($film) {
            echo "<div class='film-container'>";
            echo "<div class='row'>";
            echo "<div class='col-md-6'>";
            echo "<img src='" . htmlspecialchars($film['image_path']) . "' alt='Slika filma' class='img-fluid rounded'>";
            echo "</div>";
            echo "<div class='col-md-6'>";
            echo "<h1 class='display-4'>" . htmlspecialchars($film['naziv']) . "</h1>";
            echo "<p class='lead'>" . htmlspecialchars($film['opis']) . "</p>";
            echo "<p><strong>Režiser:</strong> " . htmlspecialchars($film['reziser']) . "</p>";
            echo "<p><strong>Žanr:</strong> " . htmlspecialchars($film['zanr']) . "</p>";
            echo "<p><strong>Godina:</strong> " . htmlspecialchars($film['godina']) . "</p>";
            echo "<p><strong>Budžet:</strong> <span class='budget'>$" . number_format($film['budzet'], 2, '.', ',') . "</span></p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        } else {
            echo "<p>Film nije pronađen.</p>";
        }
        ?>
        
        <!-- Dodavanje forme za unos komentara -->
        <div class="comments-section">
            <h2>Komentari</h2>
            <form action="php/submit_comment.php" method="post">
                <input type="hidden" name="film_id" value="<?php echo $filmId; ?>">
                <div class="form-group">
                    <label for="ime">Vaše ime:</label>
                    <input type="text" class="form-control" id="ime" name="ime" required>
                </div>
                <div class="form-group">
                    <label for="komentar">Komentar:</label>
                    <textarea class="form-control" id="komentar" name="komentar" required></textarea>
                </div>
                <button type="submit" button id="btn"  class="btn btn-primary">Pošalji</button>
            </form>
        </div>

        <!-- Prikaz komentara -->
        <div class="existing-comments">
            <?php
            $komentariQuery = mysqli_query($con, "SELECT * FROM komentari WHERE film_id = $filmId ORDER BY id DESC");
            while ($komentar = mysqli_fetch_assoc($komentariQuery)) {
                echo "<div class='comment'>";
                echo "<h4>" . htmlspecialchars($komentar['ime']) . "</h4>";
                echo "<p>" . htmlspecialchars($komentar['komentar']) . "</p>";
                echo "</div>";
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
```
</rewritten_file><|eot_id|>

