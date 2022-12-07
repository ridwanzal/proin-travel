@extends('frontview/layout.app')

@section('content')
    <header>
        @include('frontview/components/navbar')
    </header>
    <main>
        @include('frontview/components/masthead-home')
        @include('frontview/components/cert')
        @include('frontview/components/section-kendala')
        @include('frontview/components/section-about')
        @include('frontview/components/section-testimoni')
        @include('frontview/components/product-featured')
        @include('frontview/components/section-kelebihan')
        @include('frontview/components/callout-one')
        @include('frontview/components/faq')
        @include('frontview/components/callout-two')
    </main>
    <footer>
        @include('frontview/components/footer  ')
    </footer>
    @include('frontview/components/cookie')
@endsection
