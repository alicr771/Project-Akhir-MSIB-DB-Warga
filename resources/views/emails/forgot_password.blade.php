
@component('mail::message')

Hi, {{$user->name}}. Forgot Password?

<p>It Happen.</p>

@component('mail::button', ['url' => url('reset/'.$user->remember_token)])
Reset your Password 
@endcomponent

Thank, <br>
{{config('ap.name')}}
@endcomponent