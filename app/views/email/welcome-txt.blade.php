Welcome to {{ $site_name }},

Thanks for joining {{ $site_name }}. We listed your sign in details below. Make sure you keep them safe.
Follow this link to login on the site:

{{ URL::to('login') }}

@if(strlen($username) > 0)
    Your username: {{ $username }}
@endif

Your email address: {{ $email }}

Have fun!
The {{ $site_name }} Team