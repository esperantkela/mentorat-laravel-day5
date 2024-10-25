@extends('layouts.app')
@section('title', 'A propos')
@php
    $content = "Some quick example text to build on the card title and make up the bulk of the card's content.";
@endphp
@section('content')
    <section class="py-5 text-center container">
        <x-card title="About title" :body="$content" link="google.com" />
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">About</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it
                    entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
