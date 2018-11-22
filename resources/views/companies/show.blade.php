@extends('layouts.app')

@section('content')

<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">

          <h1 class="display-3"> {{ $companies->name }} </h1>
          <p>{{ $companies->description }}</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
      </div> 

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

          <div class="col-md-4">
            <h2></h2>
            <p></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
          <div class="col-md-4">
            <h2></h2>
            <p></p>
            <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    @endsection