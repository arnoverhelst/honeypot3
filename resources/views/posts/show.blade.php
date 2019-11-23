@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="wall image">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" alt="avatar" style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">
                                    {{ $post->user->username }}
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <hr />

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">
                                {{ $post->user->username }}
                            </span>
                        </a>
                    </span>
                    {{ $post->caption }}
                </p>

                <hr />

                @include('comments.show', ['comments' => $post->comments, 'post_id' => $post->id])

                <hr />
                <form method="post" action="{{ route('comment.store', $post->id) }}">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="content"></textarea>
                        <input type="hidden" name="post_id" value="{{ $post->id }}" />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-dark btn-rounded" value="Add Comment" />
                    </div>
                </form>

                @if ($errors->any())
                <div class="alert alert-danger">

                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach

                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection