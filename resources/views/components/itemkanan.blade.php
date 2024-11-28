@if(auth()->check())
    <p class="genshin mb-1">Halo, {{ auth()->user()->username }}!</p>
    <form action="/logout" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-sm genshin fs-7 btn-danger">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </button>
    </form>
@else
    <form class="" method="post" action="/login" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 ">
            <label class="form-label genshin" for="username">Username</label>
            <input class="form-control genshin fs-7" id="username" name="username" type="text" placeholder="Masukkan nilai anda">
        </div>
        <div class="mb-3 ">
            <label class="form-label genshin" for="password">Password</label>
            <input class="form-control genshin fs-7" id="password" name="password" type="password" placeholder="Masukkan nilai anda">
        </div>
        <button class="btn btn-primary genshin fs-7" type="submit">Login</button>
    </form>
@endif
