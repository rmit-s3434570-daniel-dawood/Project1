<div>
    @if (Route::has('login'))
        <div class="links" style="text-align:right">
            @if (Auth::check())
                <a href="'/home">Home</a>
            @else
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endif
        </div>
    @endif
</div>
