<!DOCTYPE html>

<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale() == 'ar' ? 'rtl':'ltr'}}">
<!-- BEGIN HEAD -->

<head>
    @include('web_base_layouts.components.header.headerMeta')
    @yield('style')
</head>

<body>
<!-- BEGIN HEADER -->
@includeIf('web_base_layouts.components.header.header')

<!-- END HEADER -->

<!-- BEGIN CONTAINER -->
{{--<div class="page-container"><!-- BEGIN SIDEBAR -->--}}


   @yield('body')
{{--</div>--}}

@includeIf('web_base_layouts.components.footer.footer')
</body>
</html>