<nav class="navbar navbar-default" id="homepage-nav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#the-nav" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">ThreeJect</a>
        </div>
        <ul class="nav navbar-nav navbar">
            <li><a href="{{ route('job.create') }}">New Print Job</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/logout">Logout</a></li>
        </ul>
    </div>
</nav>