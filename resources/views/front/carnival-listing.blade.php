@extends('front.layouts.app')
@section('front-content')
@include('front.home-template.carnival')
@include('front.home-template.subscribe')
@include('front.home-template.our-partner')
@include('front.home-template.news')
@include('front.home-template.brand-showcase')

@endsection
@section('front-script')
@include('front.home-template.js.carnival-script')
@endsection
