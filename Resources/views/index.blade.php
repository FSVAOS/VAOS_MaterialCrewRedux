<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} Crew Center</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Laravel Mix - CSS File --}}
    <link rel="stylesheet" href="{{ mix('css/materialcrewredux.css') }}">

</head>
<body>
<div id="app"></div>
{{-- Laravel Mix - JS File --}}
<script src="{{ mix('js/materialcrewredux.js') }}"></script>
</body>
</html>
