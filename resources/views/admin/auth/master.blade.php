<!doctype html>
<html lang="en">
    @include('admin.auth.head')
  <body class="dark {{ __('keyWords.rtl') }} ">
      @yield('content')
    @include('admin.auth.scripts')
  </body>
</html>

