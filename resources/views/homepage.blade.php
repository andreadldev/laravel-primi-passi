<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    @include('cdn')
</head>
<body class="vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-fixed w-100">
        <div class="container-fluid">
            <div style="cursor:pointer" class="text-white fw-semibold">LOGO</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-md-auto gap-2">
                    <li class="nav-item rounded">
                        <a class="nav-link active" aria-current="page" href=""><i class="bi bi-house-fill me-2"></i>Home</a>
                    </li>
                    <li class="nav-item rounded">
                        <a class="nav-link" href="{{ url('chi-siamo') }}"><i class="bi bi-people-fill me-2"></i>Chi siamo</a>
                    </li>
                    <li class="nav-item rounded">
                        <a class="nav-link" href="{{ url('contatti') }}"><i class="bi bi-telephone-fill me-2"></i>Contatti</a>
                    </li>
                    <li class="nav-item dropdown rounded">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Profilo</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Impostazioni</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex h-100 justify-content-center align-items-center">
        <h2>HELLO WORLD</h2>
    </div>
</body>
</html>