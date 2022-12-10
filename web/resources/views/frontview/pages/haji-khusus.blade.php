@extends('frontview/layout.app')

@section('content')
    <header>
        @include('frontview/components/navbar')
    </header>
    <main>
        @include('frontview/components/section-haji-khusus')
    </main>
    <footer>
        @include('frontview/components/footer')
    </footer>
    @include('frontview/components/cookie')
@endsection
