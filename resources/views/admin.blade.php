 @extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-offset-2">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="name">	
					<label>Last Name</label>
					<input type="text" name="last_name" class="last_name">	
					<input type="hidden" name="_method" class="hidden" value="PUT">
					<button type="button" class="generate_url" data-url=''>generate url</button>
				</div>
				<button type="submit" class='send'>Send</button>
			</div>
			<div class="col-md-5">

				@foreach($users as $user)
				<div>
					<span>{{$user->name}}</span>
					<span>{{$user->lastname}}</span>
					<a href="/{{$user->url}}">Invite link</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection