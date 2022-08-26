@extends('layouts.app', ['page' => __('Typography'), 'pageSlug' => 'typography'])

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Black Dashboard') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS -->
    <link href="/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/assets/demo/demo.css" rel="stylesheet" />
</head>

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header mb-5">
          <h5 class="card-category">Black Table Heading</h5>
          <h3 class="card-title">Created using Poppins Font Family</h3>
        </div>
        <div class="card-body">
          <div class="typography-line">
            <h1>
              <span>Header 1</span>The Life of Black Dashboard </h1>
          </div>
          <div class="typography-line">
            <h2>
              <span>Header 2</span>The Life of Black Dashboard </h2>
          </div>
          <div class="typography-line">
            <h3>
              <span>Header 3</span>The Life of Black Dashboard </h3>
          </div>
          <div class="typography-line">
            <h4>
              <span>Header 4</span>The Life of Black Dashboard </h4>
          </div>
          <div class="typography-line">
            <h5>
              <span>Header 5</span>The Life of Black Dashboard </h5>
          </div>
          <div class="typography-line">
            <h6>
              <span>Header 6</span>The Life of Black Dashboard </h6>
          </div>
          <div class="typography-line">
            <p>
              <span>Paragraph</span>
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
            </p>
          </div>
          <div class="typography-line">
            <span>Quote</span>
            <blockquote>
              <p class="blockquote blockquote-primary">
                "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                <br>
                <br>
                <small>
                  - Noaa
                </small>
              </p>
            </blockquote>
          </div>
          <div class="typography-line">
            <span>Muted Text</span>
            <p class="text-muted">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
            </p>
          </div>
          <div class="typography-line">
            <span>Primary Text</span>
            <p class="text-primary">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
          </div>
          <div class="typography-line">
            <span>Info Text</span>
            <p class="text-info">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
          </div>
          <div class="typography-line">
            <span>Success Text</span>
            <p class="text-success">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
          </div>
          <div class="typography-line">
            <span>Warning Text</span>
            <p class="text-warning">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
            </p>
          </div>
          <div class="typography-line">
            <span>Danger Text</span>
            <p class="text-danger">
              I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
          </div>
          <div class="typography-line">
            <h2>
              <span>Small Tag</span>
              Header with small subtitle
              <br>
              <small>Use "small" tag for the headers</small>
            </h2>
          </div>
          <div class="typography-line">
            <span>Lists</span>
            <div class="row">
              <div class="col-md-3">
                <h5>Unordered List</h5>
                <ul>
                  <li>List Item</li>
                  <li>List Item</li>
                  <li class="list-unstyled">
                    <ul>
                      <li>List Item</li>
                      <li>List Item</li>
                      <li>List Item</li>
                    </ul>
                  </li>
                  <li>List Item</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>Ordered List</h5>
                <ol>
                  <li>List Item</li>
                  <li>List Item</li>
                  <li>List item</li>
                  <li>List Item</li>
                </ol>
              </div>
              <div class="col-md-3">
                <h5>Unstyled List</h5>
                <ul class="list-unstyled">
                  <li>List Item</li>
                  <li>List Item</li>
                  <li>List item</li>
                  <li>List Item</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h5>Inline List</h5>
                <ul class="list-inline">
                  <li class="list-inline-item">List1</li>
                  <li class="list-inline-item">List2</li>
                  <li class="list-inline-item">List3</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="typography-line">
            <span>Code</span>
            <p>This is
              <code>.css-class-as-code</code>, an example of an inline code element. Wrap inline code within a
              <code> &lt;code&gt;...&lt;/code&gt;</code>tag.
            </p>
            <pre>1. #This is an example of preformatted text.<br/>2. #Here is another line of code</pre>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
