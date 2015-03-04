Hi @if (strlen($username) > 0) {{ $username }}@endif,

You have changed your password.
Please, keep it in your records so you don't forget it.
@if (strlen($username) > 0)

Your username: {{ $username }}
@endif

Your email address: {{ $email }}

Thank you,
The {{ $site_name }} Team