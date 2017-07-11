<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('base.head')
</head>
<body>
<div id="app-main">
    <header>
        @include('base.header')
    </header>
    <div class="container">
        <div class="row">
            <router-view></router-view>
        </div>
    </div>
</div>
@include('base.footer')
</body>
</html>