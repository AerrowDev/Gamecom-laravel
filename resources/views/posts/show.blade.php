@extends('layouts.app')

@section('content')
<div class="container">
<div class="container">
    <div class="row">
      <div class="col-8">
        <img src="/storage/{{ $post->image }}" alt="post1" class="w-100">
      </div>
      <div class="col-4">
        <div class="d-flex align-items-center">
          <div>
            <img src="{{ $post->user->profile->profileImage() }}" alt="{{$post->caption}}" class="rounded-circle w-100" height="50px">
          </div>
          <div class="pt-3">
            <p class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline">
              <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
                <span class="text-dark "> {{$post->user->username}}</span>
              </a>
              <a href="#" class="ps-2 text-decoration-none fs-smaller">Follow</a>
            </p>
            <p class="fw-small text-muted ps-2 ">{{$post->created_at}}</p>
          </div>
        </div>
        <hr>  

      <p>
         <span class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline">
          <a href="/profile/{{$post->user->id}}" class="text-decoration-none">
            <span class="text-dark "> {{$post->user->username}}</span>
          </a>
        </span> {{$post->caption}}
      </p>
      </div>  
    </div>
</div>
    </div>
@endsection
