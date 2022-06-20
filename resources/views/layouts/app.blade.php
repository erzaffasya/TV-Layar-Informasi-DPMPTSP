<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.partials.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.partials.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        {{-- <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div> --}}
        <!-- End Page Title -->
        <section class="section dashboard">
            {{ $slot }}
        </section>
    </main><!-- End #main -->

    @include('admin.partials.footer')l

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.partials.scripts')

</body>

</html>
