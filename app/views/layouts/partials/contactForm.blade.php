{{ Form:: open(array('url' => 'contact_request', 'id' => 'contact')) }}

	<div class="text-group">
		{{ Form:: label ('name', 'Name', array( 'class' => 'hide' )) }}
		{{ Form:: text ('name', '', array( 'placeholder' => 'Name' )) }}
		<span class="sprites-name"></span>
	</div>

	<div class="text-group">
		{{ Form:: label ('email', 'Email', array( 'class' => 'hide' )) }}
		{{ Form:: email ('email', '', array( 'placeholder' => 'Email', 'required' => 'true' )) }}
		<span class="sprites-email"></span>
	</div>

	<div class="text-group">
		{{ Form:: label ('subject', 'Subject', array( 'class' => 'hide' )) }}
		{{ Form:: text ('subject', '', array( 'placeholder' => 'Subject', 'required' => 'true' )) }}
		<span class="sprites-subject"></span>
	</div>

	<div class="text-group">
		{{ Form:: label ('message', 'Message', array( 'class' => 'hide' ) )}}
		{{ Form:: textarea ('message', '', array( 'placeholder' => 'Message', 'required' => 'true' ))}}
		<span class="sprites-message"></span>
	</div>

	<div class="text-group clearfix">
		{{ Form::button('Submit', array('class' => 'btn btn-primary pull-right', 'type' => 'submit')) }}
	</div>

	@foreach($errors->all('<span class="error">:message</span>') as $message)
		{{ $message }}
	@endforeach

	@if( Session::has('success_message') )
		<div class="success">{{ Session::get('success_message') }}</div>
	@endif

{{ Form:: close() }}


