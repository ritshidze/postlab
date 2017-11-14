@component('mail::message')
# Hello {{$data['name']}}

Thank you for contacting us, _Our team will be in touch with you just now!_

@component('mail::panel')

**Message you sent**<br/>

{{$data['message']}}

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
