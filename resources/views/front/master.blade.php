<!DOCTYPE html>
<html lang="en">
@include('front.partials.head')

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('front.partials.spinner')
        <!-- Spinner End -->
        <div class="container-xxl position-relative p-0">
            @include('front.partials.navbar')
            @yield('hero')
        </div>


        @yield('content')


        @include('front.partials.footer')

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.partials.scripts')
</body>

</html>
