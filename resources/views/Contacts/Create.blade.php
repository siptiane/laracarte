@extends('layouts/default',['title' => 'Contact'])

@section('content')
	
	<div class="container espace">
		<div class="row">
			<div class="col-md-8 offset-2 col-sm-10 offset-1">

				<h2>Get In Touch </h2>
				<p class="text-muted">if you having trouble with this service, please 
				<a href="mailto:{{env('ADMIN_SUPPORT_MAIL')}}" class="link">ask for help</a></p>

				<form action="{{ route('contact_path')}}" method="POST" novalidate class="was-validate">

					{{ csrf_field() }}

					<div class="form-group">
						<label for="name" class="form-label">Name</label>
						<input type="text" name="name"  class="form-control {{ $errors->has('name')? 'is-invalid': ''}}" id="name" value="{{ old('name')}}" required>
						{!! $errors->first('name','<span class="text-danger">:message</span>') !!}
					</div>

					<div class="form-group mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" name="email" id="email" class="form-control {{ $errors->has('email')? 'is-invalid': ''}}" value="{{ old('email')}}" required>
						{!! $errors->first('email','<span class="text-danger">:message</span>') !!}
					</div>

					<div class="form-group mb-3">
						<label for="message" class="message sr-only">Message</label>
						<textarea name="message" id="message" class="form-control {{ $errors->has('message')? 'is-invalid': ''}}" required>{{ old('message')}}</textarea>
						{!! $errors->first('message','<span class="text-danger">:message</span>') !!}
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-primary w-100" value="submit Enquiry &raquo;">
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection