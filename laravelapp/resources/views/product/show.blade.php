@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["product"]->getName() }}
        </h5>
        @if ($viewData["product"]->getPrice() > 100)
          <p class="card-text text-danger">${{ $viewData["product"]->getPrice() }}</p>
        @else
          <p class="card-text">${{ $viewData["product"]->getPrice() }}</p>
        @endif
        @foreach($viewData["product"]->getComments() as $comment)
          - {{ $comment->getDescription() }}<br />
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
