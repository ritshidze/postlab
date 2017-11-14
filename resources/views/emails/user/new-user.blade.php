@component('mail::message')
# Welcome {{ $user->name }}

*Thanks for signing up*, _we really appreciate it._ 

@component('mail::panel')
The email address you signed up with is : {{ $user->email }}
@endcomponent

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks You,<br>
{{ config('app.name') }}
@endcomponent