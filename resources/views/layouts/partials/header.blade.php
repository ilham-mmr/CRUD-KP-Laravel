<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="/">CRUD KP Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('negara.index') }}">Negara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('negara.create') }}">Tambah Negara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kota.index') }}">Kota</a>
            </li>

        </ul>

    </div>
</nav>
