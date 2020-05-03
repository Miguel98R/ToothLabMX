<nav class="navbar  navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">
        <img src="./img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Seven
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav ml-auto">

<li class="nav-item">
                <a class="nav-link" href="#">Bienvenid@: <?php echo $_SESSION['userName'];?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Cerrar sesión</a>
            </li>



            </ul>
        </div>
</nav>