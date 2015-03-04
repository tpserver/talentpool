<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head><title>Welcome to {{$siteName}}!</title></head>
    <body>
        <div style="max-width: 800px; margin: 0; padding: 30px 0;">
            <table width="80%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="5%"></td>
                    <td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
                        <h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Welcome to {{$siteName}}!</h2>
                        Thanks for joining {{$siteName}}. We listed your sign in details below, make sure you keep them safe.<br />
                        To verify your email address, please follow this link:<br />
                        <br />
                        <big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b>{{link_to_route('signup.activate', 'Finish your registration...', ['email' => $email, 'code' => $code])}}</b></big><br />
                        <br />
                        Link doesn't work? Copy the following link to your browser address bar:<br />
                <nobr>{{route('signup.activate', ['email' => $email, 'code' => $code])}}</nobr><br />
                <br />
                Please verify your email within {{$activationPeriod}} hours, otherwise your registration will become invalid and you will have to register again.<br />
                <br />
                <br />
                Your email address: {{$email}}<br />
                <br />
                <br />
                Have fun!<br />
                The {{$siteName}} Team
                </td>
                </tr>
            </table>
        </div>
    </body>
</html>