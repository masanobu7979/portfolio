<!DOCTYPE html>
<html>
<head>
@isset($title)
<title>{{ $title }} - ポートフォリオ</title>
@else
<title>ポートフォリオ</title>
@endisset

<link rel="stylesheet" href="{{  secure_asset('css/style.css') }}" />

</head>

<body>