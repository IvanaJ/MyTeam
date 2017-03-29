

@component('mail::message')
Application Rejected

Your application has been rejected!
@component('mail::panel')
Details for the project:

- Project Name: {{$project}}

- Project Owner: {{$projectOwner}}


@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent



