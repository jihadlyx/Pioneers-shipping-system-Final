<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('site.layouts.head')

<body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
$watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
<!-- ===== Preloader Start ===== -->
@include('site.layouts.preloader')
<!-- ===== Preloader End ===== -->

<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">

        <!-- ====== Forms Section Start -->
        <div
            class=" rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
        >
            <div class="flex flex-wrap items-center">
                <div class="hidden w-full xl:block xl:w-1/2">
                    <div class="px-26 py-17.5 text-center">
                        <a class="mb-5.5 inline-block" href="index.html">
{{--                            <img class="hidden dark:block" src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">--}}
{{--                            <img class="dark:hidden" src="{{ asset('assets/images/logo/logo-dark.svg') }}" alt="Logo">--}}
                        </a>

{{--                        <p class="font-medium 2xl:px-20">--}}
{{--                            Lorem ipsum dolor sit amet, consectetur adipiscing elit--}}
{{--                            suspendisse.--}}
{{--                        </p>--}}

                        <span class="mt-15 inline-block">
                      <img src="{{ asset('assets/images/illustration/illustration-03.svg') }}" alt="illustration">
                    </span>
                    </div>
                </div>
                <div class="w-full xl:w-1/2">
                    <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
                        <h2 class="mb-3 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">
                            إعادة تعيين كلمة المرور
                        </h2>
                        <p class="mb-7.5 font-medium">
                            أدخل عنوان بريدك الإلكتروني لتلقي رابط إعادة تعيين كلمة المرور
                        </p>
                        @if(Session::has('message'))
                            <div class="alert-{{ Session::get('message')["type"] }} flex  rounded-lg p-4 mb-4 text-md " role="alert">
                                <svg class="w-5 h-5 inline ltr:mr-3 rtl:ml-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                    <span class="font-medium">{{ Session::get('message')["title"] }} !</span> {{ Session::get('message')["text"] }}
                                </div>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.sendLink') }}">
                            @csrf
                            @method('POST')
                            <div class="mb-6">
                                <label class="mb-2.5 block font-medium text-black dark:text-white">البريد الإلكتروني</label>
                                <div class="relative">
                                    <input type="email" name="email" placeholder="ادخل بريدك الإلكتروني" class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">

                                    <span class="absolute ltr:right-4 rtl:left-4 top-1/2 transform -translate-y-1/2">
                                        <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <g opacity="0.5">
                                            <path d="M19.2516 3.30005H2.75156C1.58281 3.30005 0.585938 4.26255 0.585938 5.46567V16.6032C0.585938 17.7719 1.54844 18.7688 2.75156 18.7688H19.2516C20.4203 18.7688 21.4172 17.8063 21.4172 16.6032V5.4313C21.4172 4.26255 20.4203 3.30005 19.2516 3.30005ZM19.2516 4.84692C19.2859 4.84692 19.3203 4.84692 19.3547 4.84692L11.0016 10.2094L2.64844 4.84692C2.68281 4.84692 2.71719 4.84692 2.75156 4.84692H19.2516ZM19.2516 17.1532H2.75156C2.40781 17.1532 2.13281 16.8782 2.13281 16.5344V6.35942L10.1766 11.5157C10.4172 11.6875 10.6922 11.7563 10.9672 11.7563C11.2422 11.7563 11.5172 11.6875 11.7578 11.5157L19.8016 6.35942V16.5688C19.8703 16.9125 19.5953 17.1532 19.2516 17.1532Z" fill=""></path>
                                          </g>
                                        </svg>
                                     </span>
                                </div>
                            </div>

                            <div>
                                <input type="submit" value="ارسال" class="w-full cursor-pointer rounded-lg border border-primary bg-primary p-4 font-medium text-white transition hover:bg-opacity-90">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Forms Section End -->
    </div>
</main>

@include('site.layouts.script')
</body>

</html>


