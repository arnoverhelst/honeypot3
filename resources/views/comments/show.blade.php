@foreach($comments as $comment)
<div class="display-block">
    <strong href>{{ $comment->user->username }}</strong>
    <p>{{ $comment->content }}</p>
</div>
@endforeach