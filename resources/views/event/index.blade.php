@extends('navbar.main')

@section('container')
<div class="container marketing">
<div class="row">
  <hr class="featurette-divider">
    @foreach ($events as $item)
    <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

      <h2>{{ $item['title'] }}</h2>
      <p><a class="btn btn-secondary" href="/detail/{{ $item['id'] }}">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    @endforeach
    <hr class="featurette-divider">
  </div><!-- /.row -->
</div>
@endsection