@extends("layouts.default")

@section("content")
<main class="flex-shrink-0 mt-5">
    <div class="container">
        @if(session()->has("success"))
          <div class="alert alert-success" >
              {{session()->get("success")}}
          </div>
      @endif
      @if(session("error"))
          <div class="alert alert-danger" >
              {{session("error")}}
          </div>
      @endif
      {{$tasks}}
    </div>
  </main>
@endsection