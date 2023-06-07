@extends('template,backen.theme')


@section('content')
<br>
<br>

@if($notif != null)
<div class="alert alert-info" role="alert">
  {{ $notif }}
</div>
@endif
<form> method="post" action="{{ current_url() }}">
    <div cllas="mb-3">
    <label for="Username" class="form-label">Email address</label>
    <input type="text" class="form-control" id="Username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection