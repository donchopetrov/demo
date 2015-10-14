@extends('core::public.master')

@section('title', 'Error 404 – ' . $websiteTitle)

@section('bodyClass', 'error-404')

@section('main')

    <article class="http-error-message">
        <h1>@lang('db.Error :code', ['code' => '404'])</h1>
        <p>
            @lang('db.Sorry, this page was not found').<br>
            @lang('db.Go to our homepage?', ['a_open' => '<a href="/">', 'a_close' => '</a>'])
        </p>
    </article>

@stop
