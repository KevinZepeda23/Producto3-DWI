
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Compra y Venta de Vehiculos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/carro-deportivo.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/stylesnav.css">
         <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                      <a href="index.php"> <img src="assets/img/carro-deportivo.png" href="index.php"></a> 
                    </span>
                    <div class="text logo-text">
                    <span class="name">AutoMarket</span>
                        <span class="profession">Buying and Selling Cars</span>
                    </div>
                </div>
                <i class='bx bx-chevron-right toggle'></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class='bx bx-search icon'></i>
                        <input type="text" placeholder=" -> Search..."  >
                    </li>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-home-alt icon' ></i>
                                <span class="text nav-text">My Home</span>
                            </a>
                        </li>
                        <!-- <li class="nav-link">
                            <a href="history.php">
                                <i class='bx bx-bar-chart-alt-2 icon' ></i>
                                <span class="text nav-text">History</span>
                            </a>
                        </li> -->
                        <li class="nav-link">
                            <a href="Carrito.php">
                                <i class='bx bx-cart icon' ></i>
                                <span class="text nav-text">Shopping cart</span>
                            </a>
                        </li>
                        <!-- <li class="nav-link">
                            <a href="categoria.php">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Category</span>
                            </a>
                        </li> -->
                        <li class="nav-link">
                            <a href="shop.php">
                                <i class='bx bx-grid-alt icon' ></i>
                                <span class="text nav-text">Catalogue</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class='bx bx-user icon' ></i>
                                <span class="text nav-text">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-content">
            <?php if (isset($_SESSION['Usuario']) && $_SESSION['Usuario'] === true): ?>
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
            <?php else: ?>
                <li class="">
                    <a href="login/index.html">
                        <i class='bx bx-log-in icon'></i>
                        <span class="text nav-text">Log in</span>
                    </a>
                </li>
            <?php endif; ?>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
        <!-- Header-->
        <header class="bg-dark py-5"  style="background-image: url('assets/img/fondo_home_page2.jpg'); background-size: cover; background-position: center;  display: flex; ">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">AutoMarket</h1>
                    <div>
                        <section>
                        
                        <p class="lead fw-normal text-white-50 mb-0"><!-- Quality vehicles at a good price --></p>
                        </section>
                    </div>
                </div>
            </div>
        </header>
       <!-- Offcanvas -->
        
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Contacto</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="index.php" method="post">
            <h2>Envíanos un Mensaje</h2>
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" placeholder="Nombre" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" class="form-control" placeholder="Correo Electrónico" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message"></label>
                <textarea class="form-control" placeholder="Tu mensaje aquí..." name="message" id="message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <div class="contact-social">
                <h3>Síguenos</h3>
                <nav>
                    <a href="#" aria-label="YouTube" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="TikTok" class="social-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="#" aria-label="Instagram" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="WhatsApp" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </nav>
            </div>
        </form>
    </div>
</div>


        </div>
    </div>
</div>
           