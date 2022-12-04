@extends('frontview/layout.app')

@section('content')
    <main class="form-signin w-100 m-auto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12">
                    <form>
                        <div class="text-center mt-5">
                            <img class="mb-5 lazyload" data-src="{{ asset('images/logo.svg') }}" alt="" width="150">
                        </div>
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-warning" type="submit">Masuk</button>
                        <p class="mt-3 mb-3 text-muted">&copy; Copyright <?= date('Y') ?></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
