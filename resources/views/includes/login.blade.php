<div>
    @if (Route::has('login'))
        <div class="links" style="text-align:right">
            @if (Auth::guest())
                            <li style="float:right"><a href="{{ route('register') }}" style="display: block; color: white; background-color: #222222; font-weight: 600">Register</a></li>
                            <li style="float:right"><a href="{{ route('login') }}" style="display: block; color: white; background-color: #222222; font-weight: 600">Login</a></li>
                        @else
                            <li style="float:right; display: block; color: white; background-color: #222222; font-weight: 600">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" style="float:right; position: relative; min-width: 14px; padding: 14px 16px; "role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" style ="color: white; background-color: #222222;  "
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
        </div>
    @endif
</div>
