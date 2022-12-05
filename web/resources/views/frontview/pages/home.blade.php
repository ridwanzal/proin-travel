@extends('frontview/layout.app')

@section('content')
    <header>
        @include('frontview/components/navbar')
    </header>
    <main>
        @include('frontview/components/masthead-home')
        @include('frontview/components/section-kendala')
        @include('frontview/components/product-featured')
        @include('frontview/components/section-about')
        @include('frontview/components/cert')
        {{-- @include('frontview/components/facilities-featured') --}}
        {{-- @include('frontview/components/contact') --}}
    </main>
    <footer>
        @include('frontview/components/footer  ')
    </footer>
    @include('frontview/components/cookie')
@endsection
