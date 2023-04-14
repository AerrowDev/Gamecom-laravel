@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" alt="{{$post->caption}}"  class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p class="mb-0">
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                            <span class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline text-white">{{ $post->user->username }}</span>
                        </a>
                    </span> <span class="fs-5">{{ $post->caption }} </span>
                    </p>
                    <p class="fw-small fs-6 text-muted ps-2 pt-0 ">{{$post->created_at}}</p>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links('vendor.pagination.my-pagination') }}
            </div>

        </div>
</div>
@endsection
