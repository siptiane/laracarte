@component('mail::message')

# hey admin

{{$msg->name}} <br>
{{$msg->email}} 

@component('mail::panel')
{{$msg->message}}
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
