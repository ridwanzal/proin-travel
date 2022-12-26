@extends('frontview/layout.app')

@section('content')
    <main class="form-signin w-100 m-auto">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-12">
                    <form method="POST" action="{{ route('login.action') }}">
                        <!-- CROSS Site Request Forgery Protection -->
                        @csrf
                        <h1 class="h3 mb-3 mt-5 fw-bold">Please sign in</h1>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @elseif(Session::has('error'))
                            <div class="alert alert-danger">
                                Error please provide valid email address and password
                                <button type="button" class="btn-close float-end" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password"  id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-warning" type="submit">Masuk</button>
                        <p style="font-size: 12px;" class="text-center mt-3 mb-3 text-muted">&copy; Copyright <?= date('Y') ?></p>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
