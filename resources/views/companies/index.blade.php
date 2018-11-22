@extends('layouts.app')
@section('content')

<div class="col-md-10 col-lg-10 col-md-offset-4 col-lg-offset-4">
  <div class="panel panel-primary">
    <div class="panel-heading">COMPANIES</div>
    <div class="panel-body">
      
      <ul class="list-group">
        @foreach($companies as $company)
        <li class="list-group-item">
          <a href="/companies/{{ $company->id }}" >{{ $company->name }}</a>
        </li>
        @endforeach
      </ul>


    </div>
  </div>
</div>

@endsection
