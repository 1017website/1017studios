@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
            <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
        </div>
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
            <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                Portofolio
            </h2>
            <p class="paragraph text-white lg:text-xl text-center "="">
                Desain Logo dan Website untuk usaha anda adalah Asset yang sangat berharga.
            </p>
            <div data-aos="zoom-out-up" data-aos-duration="1000"
                class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                <button
                    class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                    fdprocessedid="rdwmjd">
                    SAYA MAU PESAN !!
                </button>
            </div>
            <details class="dropdown mb-32">
                <summary class="m-1 btn bg-[#FFE200] hover:bg-[#FFE200] text-black font-extrabold rounded-full">Semua<i class="fa fa-caret-down" aria-hidden="true"></i></summary>
                <ul class="p-2 shadow menu dropdown-content ease-in-out z-[1] bg-[#1c1c1c] text-white font-bold rounded-box w-52">
                    <li><a>Semua</a></li>
                    <li><a>Logo</a></li>
                    <li><a>Website</a></li>
                </ul>
            </details>
            <div
                class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-0 py-6 pb-20 sm:py-8 place-content-center rounded-[2.25rem] transform lg:-translate-y-12">

                <div id="portfolio-home" data-aos="fade-up" data-aos-duration="1000"
                    class="flex flex-col flex-wrap sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item logo relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-5.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div
                        class="portfolio-item website relative sm:w-1/3 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                        <img src="{{ asset('assets/img/default-port-6.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection