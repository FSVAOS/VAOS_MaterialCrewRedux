<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} Crew Center</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@3.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    {{-- Laravel Mix - CSS File --}}
    <link rel="stylesheet" href="{{ mix('css/materialcrewredux.css') }}">

</head>
<body>
<div id="app"></div>
{{-- Laravel Mix - JS File --}}
<script>
    window.appSettings = <?php echo json_encode([
        'community_name' => config('app.name'),
        'colors' => [
            'primary' => '#71ccff'
        ]
    ])?>
</script>
<script src="{{ mix('js/materialcrewredux.js') }}"></script>
</body>
</html>
