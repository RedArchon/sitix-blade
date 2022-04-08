<html>
<head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
<header>
    <x-navbar></x-navbar>
</header>

{{ $slot }}

<footer>
    footer
</footer>
</body>
</html>
