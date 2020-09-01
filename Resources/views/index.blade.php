<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} Flight Operations</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel="stylesheet">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="/css/SparkVirtual.css">
    <link rel="stylesheet" href="https://use.typekit.net/vrq1kxj.css">
    {{-- Laravel Mix - CSS File --}}
    <link rel="stylesheet" href="{{ mix('css/materialcrewredux.css') }}">
    <style>

    </style>
</head>
<body>
<div id="app"></div>
{{-- Laravel Mix - JS File --}}
<script>
    window.appSettings = <?php echo json_encode([
        'community_name' => config('app.name'),
        'colors' => [
            'primary' => '#A40000', //'#71ccff'
            'accent' => '#790000',
            'secondary' => '#002561' // 002561 dark 17269c light
        ],
        'user' => \Illuminate\Support\Facades\Auth::user()
    ])?>
</script>
<script src="{{ mix('js/materialcrewredux.js') }}"></script>
</body>
</html>
