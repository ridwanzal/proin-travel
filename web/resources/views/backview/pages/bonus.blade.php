@extends('backview/layout.app')

@section('content')
    @include('backview/components/headernav')
    @include('backview/components/sidebar')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
        @include('backview/components/bonus')
        @include('backview/components/bonus-highlight')
    </main>
    <footer>
    </footer>
@endsection
