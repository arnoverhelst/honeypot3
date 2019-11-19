<div class="overflow-auto" style="height: 40vh;">
    @foreach($comments as $comment)
    <div class="overflow-auto">
        <strong href>{{ $comment->user->username }}</strong>
        <p>{{ $comment->content }}</p>
    </div>
    @endforeach
</div>