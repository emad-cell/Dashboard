<!doctype html>
<html lang="en">
    @include('admin.partials.head')
  <body class="vertical  dark {{ __('keyWords.rtl') }} ">
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
    <main role="main" class="main-content">
        @yield('contant')
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    @include('admin.partials.scripts')
  </body>
</html>
