<!DOCTYPE html>
<html>
    <head>
        <title>Oeps, er is iets misgegaan.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Oeps, er is iets misgegaan.</div>
                @unless(empty($sentryID))
                    <!-- Sentry JS SDK 2.1.+ required -->
                    <script src="https://cdn.ravenjs.com/3.18.1/raven.min.js"></script>

                    <script>
                        Raven.showReportDialog({
                            eventId: '{{ $sentryID }}',
                            // use the public DSN (dont include your secret!)
                            dsn: 'https://e9ebbd88548a441288393c457ec90441@sentry.io/3235'
                        });
                    </script>
                @endunless
            </div>
        </div>
    </body>
</html>
