<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('themes.includes.head')

<body>
    <div class="page">
        @include('themes.includes.header',['title' => 'Devvalfe - delix'])
    </div>
</body>
@include('themes.includes.script')

</html>