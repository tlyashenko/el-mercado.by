@extends('layouts.page')

@section('page', $page)

@section('content')
    {!! $page->content !!}
    @widget('categoriesList')
@endsection
