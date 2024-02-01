<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANTREAN PKM CIKALAPA</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="css/templatemo-pod-talk.css" rel="stylesheet">
</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-1 me-0">
                    <img src="images/pkm.png" class="logo-image img-fluid">
                </a>
                <form action="#" method="get" class="custom-form search-form flex-fill me-1" role="search">
                    <div class="input-group input-group-lg">
                        <h3 class="text-light">UPTD PUSKESMAS CIKALAPA</h3>
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link">
                            <?php  
                            date_default_timezone_set('Asia/Jakarta');
                            echo "<span style='font-size:20px;'>" .date('d M Y |'). "</span>" ;?>

                            <span id="jam" style="font-size:20px"></span>

                            <script type="text/javascript">
                                window.onload = function() {
                                    jam();
                                }

                                function jam() {
                                    var e = document.getElementById('jam'),
                                        d = new Date(),
                                        h, m, s;
                                    h = d.getHours();
                                    m = set(d.getMinutes());
                                    s = set(d.getSeconds());

                                    e.innerHTML = h + ':' + m + ':' + s;

                                    setTimeout('jam()', 1000);
                                }

                                function set(e) {
                                    e = e < 10 ? '0' + e : e;
                                    return e;
                                }
                            </script>
                            </a>
                        </li>
                    </ul>

                    <div class="ms-4">
                        <a href="#" class="btn custom-btn custom-border-btn smoothscroll">ANTRIAN ONLINE</a>
                    </div>
                </div>
            </div>
        </nav>
        
        <?php
            $konek = mysqli_connect("localhost","root","", "antrian");

            $tampilkan = mysqli_query($konek, "SELECT * from tabelantrian where panggil = '' order by huruf = 'A' AND id asc");
            $data = mysqli_fetch_array($tampilkan);

            $nomor = $data['nomor'];

        ?>
        <?php include"audio.php"; ?>
        <section class="hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-2 pb-2">
                            <p class="text-white">NOMOR ANTRIAN</p>
                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="custom-block bg-light text-center">
                                    <span style="font-size:3em;">Nomor Antrian</span><br>
                                    <span style="font-size:9em;">A1</span><br>
                                    <span style="font-size:2em;">Ruang Umum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
        <div class="container text-center pt-5">
            <div class="row align-items-center">
                    <p class="copyright-text mb-1 text-info">Copyright © 2023 AMD Computer | Mamad Ahmad</p>
            </div>
        </div>
    </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>