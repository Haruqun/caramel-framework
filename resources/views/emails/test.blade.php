@component('mail::message')
    # Test Email

    This is a test email.

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
