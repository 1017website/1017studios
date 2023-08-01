@extends('layouts/header_footer')
<style>
    .map-container {
        position: relative;
        overflow: hidden;
        padding-top: 56.25%;
        /* 16:9 aspect ratio - adjust this based on your map's aspect ratio */
    }

    .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="container mx-auto place-content-center">
            <div data-aos="zoom-out-up" data-aos-duration="1000"
                class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 lg:px-4 aos-init"="">
                <h2
                    class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 pl-6 lg:pl-0 pt-20 lg:pt-0 xl:pr-12"="">
                    Kontak
                </h2>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div>01</div>
                <!-- ... -->
                <div>09</div>
              </div>
        </div>
    </div>
</section>

@endsection

@section('jquery')
<script>

</script>
@endsection