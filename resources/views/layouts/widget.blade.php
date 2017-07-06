<div class="spotlight text-center">
  	<div class="spotlight-box">
  		<h3><a href="/widgets/{{ $widget->id }}">{{ $widget->title }}</a></h3>
        <p class="help-block">by <a href="/{{ $widget->user->username }}">{{ $widget->user->username }}</a></p>
        <p>{{ $widget->body }}</p>		
    </div>
</div>