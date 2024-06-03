@extends('layouts.app')

@section('content')
<section class="login bg-light vh-100 vm_bg_cover vm_bg_center vm_bg_norepeat" style="background:url('{{ asset('img/atto_desk_login_background.webp') }}');">
    <div class="overlay w-100 h-100 d-flex justify-content-center">
        <div class="container_login h-100 w-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <div class="bg-white shadow-lg p-5 w-100">
                        <div class="d-flex justify-content-center pb-4">
                            <img src="{{ asset('img/logo_main_black.webp') }}" alt="AttoDesk Login">
                        </div>
                        <form action="{{route('login')}}" method="POST">
                            @csrf
                            <div class="form-floating mb-3 lh-base">
                                <input type="text" class="form-control shadow-sm" id="username" name="username" placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating mb-4 lh-base">
                                <input type="password" class="form-control shadow-sm" id="password" name="password" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <button class="btn vm_bg_primary text-white">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
