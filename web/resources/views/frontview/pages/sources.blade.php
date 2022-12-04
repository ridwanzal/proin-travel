@extends('frontview/layout.app')

@section('content')
<header>
   @include('frontview/components/navbar')
</header>
<main>
   @include('frontview/components/masthead-detail-video')
   @include('frontview/components/section-sources')
   @include('frontview/components/cert')
</main>
<footer>
   @include('frontview/components/footer  ')
</footer>
@include('frontview/components/cookie')
@endsection