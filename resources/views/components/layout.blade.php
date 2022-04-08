<html>
<head>
    <title>{{ $title ?? '' }}</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
<header>
    <x-navbar></x-navbar>
    @if($headertype ?? null == 'nfl')
        <x-nfl-header>{{$header}}</x-nfl-header>
    @else
        <x-header>{{$header}}</x-header>
    @endif
</header>

{{ $slot }}

<x-footer></x-footer>
</body>
</html>
