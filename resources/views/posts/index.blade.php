@extends('layouts.app')

@section('content')
<div class="container">
    @if($posts->isEmpty())
    <div class="alert alert-secondary">
        <p>Sorry {{ Auth::user()->name }}, There aren't any posts for you to display. <br />
            Start following people to see their posts!
        </p>
    </div>
    @else

    @foreach($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100" alt="wall image"></a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
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
            </div>
            <hr />
        </div>
    </div>
    @endforeach
    @endif

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection