@extends('layouts.page')

@section('page', $page)

@section('content')
    {{ html_entity_decode($page->content) }}
    @widget('categoriesList')
@endsection
