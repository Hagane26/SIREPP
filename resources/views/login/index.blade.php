@extends('wrapper.header')
@section('title', 'LOGIN SIREPP ')

<form method="POST" action="/actionlogin">
    @csrf
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">LOGIN SIREPP</h5>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="NIP / NIK" aria-label="Username"
                        aria-describedby="basic-addon1" id="username">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password"
                        aria-label="Text input with checkbox" id="password">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox"
                            aria-label="Checkbox for following text input">
                    </div>
                </div>

                <div class="d-grid gap-2">
                    <input type="submit" class="btn btn-primary" type="button">LOGIN</button>
                    <p class="card-text">
                        <a href="#" class="stretched-link text-danger" style="position: relative;">Lupa
                            Password</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</form>

@extends('wrapper.footer')
