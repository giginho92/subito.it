<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('welcome')}}">Subito.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('announcements_show')}}">Lista Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iscriviti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('announcements_create')}}">Carica il tuo annuncio</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active">Log-in</a>
                </li>
            </ul>
            
            
        </div>
    </div>
</nav>