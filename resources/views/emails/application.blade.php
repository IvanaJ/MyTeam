@component('mail::message')
Application

This user want to applicate for your project!

@component('mail::panel')

-{{ $user->name }}

-{{$user->last_name}}

-{{$user->email}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
