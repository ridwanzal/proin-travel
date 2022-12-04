@extends('frontview/layout.app')

@section('content')
<header>
   @include('frontview/components/navbar')
</header>
<main>
   @include('frontview/components/masthead-detail')
   @include('frontview/components/contact')
</main>
<footer>
   @include('frontview/components/footer  ')
</footer>
@include('frontview/components/cookie')
@endsection