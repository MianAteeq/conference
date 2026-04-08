<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PDA App Login ID</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:'Segoe UI', Arial, sans-serif;">

    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="padding:30px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="background-color:#004aad; padding:25px 15px;">
                            <h1 style="color:#ffffff; font-size:26px; margin:0; font-weight:600;">
                                🔐 PDA App Login ID
                            </h1>
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:30px;">

                            <p style="font-size:16px; color:#333; margin-bottom:20px;">
                                Dear <strong>{{ $user['name'] }}</strong>,
                            </p>

                            <p style="font-size:16px; color:#333; line-height:1.6;">
                                Welcome to our mobile application! Below are your login credentials:
                            </p>

                            <!-- Credentials Box -->
                            <div style="margin:25px 0;">
                                <h3 style="color:#004aad; border-bottom:2px solid #eee; padding-bottom:5px;">
                                    Login Details
                                </h3>

                                <table cellpadding="6" cellspacing="0" width="100%"
                                    style="font-size:15px; color:#444;">
                                    <tr>
                                        <td width="35%" style="font-weight:600;">Email:</td>
                                        <td>{{ $user['email'] }}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight:600;">Password:</td>
                                        <td>{{ $user['password'] }}</td>
                                    </tr>
                                </table>
                            </div>

                            <p style="font-size:15px; color:#555; line-height:1.6;">
                                For security reasons, please <strong>change your password after your first
                                    login</strong>.
                            </p>

                            <!-- App Button -->
                            <div style="text-align:center; margin-top:30px;">
                                <a href="https://play.google.com/store/apps/details?id=com.authentik.pdaapp&hl=en"
                                    style="background-color:#004aad; color:#ffffff; text-decoration:none;
                               padding:12px 30px; border-radius:30px; font-weight:600; display:inline-block;">
                                    📱 Download Android App
                                </a>
                            </div>

                            <p style="margin-top:30px; font-size:15px; color:#555;">
                                If you need assistance, please contact our support team.
                            </p>

                            <p style="margin-top:30px; font-size:15px; color:#555;">
                                Best Regards,<br>
                                <strong>PDA Conference Team</strong><br>
                                <a href="https://conference.fissionmonster.com"
                                    style="color:#004aad; text-decoration:none;">conference.fissionmonster.com</a>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="background-color:#fafafa; padding:15px;">
                            <p style="font-size:12px; color:#888; margin:0;">
                                © {{ date('Y') }} All rights reserved.
                                Designed & Developed by
                                <a href="https://fissionmonster.com" style="color:#004aad; text-decoration:none;">
                                    Fission Monster
                                </a>
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>

</html>
