@extends('frontview/layout.app')

@section('content')
<header>
   @include('frontview/components/navbar')
</header>
<main>
   @include('frontview/components/masthead-detail')
   @include('frontview/components/section-story')
   @include('frontview/components/section-mission')
   @include('frontview/components/cert')
</main>
<footer>
   @include('frontview/components/footer  ')
</footer>
@include('frontview/components/cookie')
@endsection