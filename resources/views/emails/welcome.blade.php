@component('mail::message')
# Welcome to TodoApp!

Your registration was successfull.<br>

@component('mail::button', ['url' => 'https://laracasts.com/'])
Go to TodoApp
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
