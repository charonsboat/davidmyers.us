@section('main')

<section>
	<header>
		<h2>Recent Activity</h2>
	</header>
	<div>
		<ul>
		@foreach ($github['data'] as $event)
			<li class="formal social-network-feed">
				<h3><a href="{{ $github['base_url'] . $event->actor->login }}">{{ $event->actor->login }}</a></h3>
				<p><span class="network-timestamp">{{ date('Y-m-d', strtotime($event->created_at)) }}: </span>
				@if ($event->type == 'WatchEvent')
					starred the repo <a href="{{ $github['base_url'] . $event->repo->name }}">{{ $event->repo->name }}</a>.
				@elseif ($event->type == 'PushEvent')
					pushed changes to the repo <a href="{{ $github['base_url'] . $event->repo->name }}">{{ $event->repo->name }}</a>.
				@elseif ($event->type == 'CreateEvent')
					created the repo <a href="{{ $github['base_url'] . $event->repo->name }}">{{ $event->repo->name }}</a>.
				@else
					did something random
				@endif
				<span class="network-tag"><a href="{{ $github['base_url'] }}">on github</a></span></p>
			</li>
		@endforeach
		</ul>
	</div>
</section>

@stop