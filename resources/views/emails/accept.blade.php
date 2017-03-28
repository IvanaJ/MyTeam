@component('mail::message')
Application Accepted


Your application has been accepted.
@component('mail::panel')
Details for the project:

- Project Name:

{{---{{$user->name}}--}}

{{--- Project Owner:--}}

{{---{{$project->user->name}}--}}


@endcomponent

@component('mail::button', ['url' => ''])
Project Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


