<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body>
    <!--  ====== preloader start =============================================  -->
    <div id="loading" class="home3">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>

    @include('includes.header')
    <main>
        @yield('content')
    </main>

    @include('includes.sticky-footer')
    @include('includes.footer')
    @yield('page-script')
</body>

</html>