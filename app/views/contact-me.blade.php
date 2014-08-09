@section('main')

<section>
	<div>
	{{ Form::open(array('action' => 'ContactMeController@submit')) }}

		<label for="name">Name: </label>
		<input type="text" name="name" placeholder="Full Name">

		<label for="organization">Organization (Optional): </label>
		<input type="text" name="organization" placeholder="Organization or Business Title">

		<label for="email">Email: </label>
		<input type="email" name="email" placeholder="Email Address">

		<label class="none" for="email-verify">Don't type in this field: </label>
		<input class="none" type="email" name="email-verify" placeholder="Don't type in this field">

		<label for="inquiry">How can I help you? </label>
		<textarea name="inquiry" placeholder="What are you looking to accomplish? What is your timeline? Do you have a budget in mind? The more information you can give me, the better. Thank you."></textarea>

		<button type="submit">Submit</button>

	{{ Form::close() }}
	</div>
</section>

@stop