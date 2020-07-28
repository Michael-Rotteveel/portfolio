<nav class="navbar is-transparent is-fixed-top">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            <span class="wght-600">Michael</span>
            <span class="wght-600">Rotteveel</span>
        </a>
        <div class="navbar-burger burger" data-target="navbarToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="navbarToggle" class="navbar-menu">
        <div class="navbar-start">
            @foreach($pages as $page)
                @if($page->type_id === 2 && $page->in_nav == 1)
                    <a class="navbar-item" href="#{{$page->slug}}">
                        {{$page->name}}
                    </a>
                @endif
            @endforeach()
        </div>
    </div>
</nav>

