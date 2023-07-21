<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbardropdpwn">
    <a class="dropdown-item" href="{{route('logout') }}"
        onclick="event.preventDefault();
            document.getelementById('logout-form') submit();">
            {{ _ ('logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout')}}" method="post" class="d-none">
        @csrf
    </form>
</div>