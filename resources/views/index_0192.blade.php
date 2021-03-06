<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <title>My Portofolio | Moch. Octa Venanda</title>
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: rgb(28, 171, 163)">
        <div class="container">
            <a class="navbar-brand" href="#">Venanda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#project">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Data
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/select">Select</a></li>
                            <li><a class="dropdown-item" href="/where">Select Where</a></li>
                            <li><a class="dropdown-item" href="/join">Select Join</a></li>
                            <li><a class="dropdown-item" href="/joinwhere">Select Join dengan Where</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/octa.jpg" alt="" width="200" class="rounded-circle img-thumbnail shadow-sm" />
        <h1 class="display-4">Welcome to My Web</h1>
        <p class="lead">Moch. Octa Venanda | 1461900192.</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,64L48,80C96,96,192,128,288,149.3C384,171,480,181,576,165.3C672,149,768,107,864,106.7C960,107,1056,149,1152,149.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir Jumbotron -->
    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos quasi eveniet molestiae aliquam,
                        nesciunt voluptas ut nostrum quod sequi dolor.</p>
                </div>
                <div class="col-md-4">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, odit amet, asperiores ab fugiat
                        quidem molestias sit magnam distinctio obcaecati voluptatum. Quibusdam, suscipit similique?
                        Optio.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#1caba3" fill-opacity="1"
                d="M0,96L40,90.7C80,85,160,75,240,74.7C320,75,400,85,480,106.7C560,128,640,160,720,176C800,192,880,192,960,186.7C1040,181,1120,171,1200,154.7C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <!-- Akhir About -->

    <!-- Project -->
    {{-- <section id="project">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Project</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/project/1.jpg" class="card-img-top" alt="Project1" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/project/2.jpg" class="card-img-top" alt="Project2" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/project/3.jpg" class="card-img-top" alt="Project3" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="img/project/4.jpg" class="card-img-top" alt="Project4" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card">
                        <img src="img/project/5.jpg" class="card-img-top" alt="Project5" />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,192L60,186.7C120,181,240,171,360,192C480,213,600,267,720,277.3C840,288,960,256,1080,218.7C1200,181,1320,139,1380,117.3L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </section> --}}
    <!-- Akhir Project -->
    <!-- Contact -->
    {{-- <section id="contact">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,192L40,202.7C80,213,160,235,240,229.3C320,224,400,192,480,165.3C560,139,640,117,720,117.3C800,117,880,139,960,176C1040,213,1120,267,1200,266.7C1280,267,1360,213,1400,186.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section> --}}
    <!-- Akhir Contact -->
    <!-- Footer -->
    <footer class="text-white text-center pb-3" style="background-color: rgb(28, 171, 163)">
        {{-- <img src="img/octa.jpg" alt="" width="200" class="rounded-circle img-thumbnail shadow-sm" /> --}}
        {{-- <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <p><i class="bi bi-whatsapp"></i> <a href="https://api.whatsapp.com/send?phone=6285731525470"
                            class="text-white fw-bold">085731525470</a></p>
                </div>
                <div class="col-3">
                    <p><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/mo.venan "
                            class="text-white fw-bold">Moch. Octa Venanda</a></p>
                </div>
                <div class="col-3">
                    <p>
                        <i class="bi bi-envelope-fill"> <a href="mailto:octananda98@gmail.com"
                                class="text-white fw-bold">Moch. Octa Venanda</a></i>
                    </p>
                </div>
            </div>
        </div> --}}
        <p>
            Created by with <i class="bi bi-heart-fill text-danger"></i> by <a
                href="https://www.instagram.com/mo.venan/" class="text-white fw-bold">Moch. Octa Venanda</a>
        </p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
