@component('mail::message')
# Activate your account

Thanks for signing up, please verify your email to activate your account.

@component('mail::button', ['url' => ''])
Verify
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
