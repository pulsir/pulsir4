 <article>
        <h2 class="post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2><p class="help-block">{{ $post->created_at->toFormattedDateString() }} by <a href="/{{ $post->user->username }}">{{ $post->user->username }}</a>
        <div class="post-snip">
          <p>{{ $post->body }}</p>
        </div>
      </article>
      <hr>