<aside :class="sidebarToggle ? 'ltr:translate-x-0 rtl:-translate-x-0' : 'rtl:translate-x-full -translate-x-full'"
    class="absolute ltr:left-0 rtl:right-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static rtl:lg:-translate-x-0 ltr:lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div class="flex items-center h-fit lg:justify-center justify-between gap-2 px-6 py-3.5 ">
        <a href="/home" class="">
            <img src="{{ asset('assets/images/logo/dark-logo.png') }}" class="lg:w-36 w-20" alt="Logo" />
        </a>
        <button class="block lg:hidden rtl:rotate-180" @click.stop="sidebarToggle = !sidebarToggle">
            <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                    fill="" />
            </svg>
        </button>
    </div>
    <!-- SIDEBAR HEADER -->

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <!-- Sidebar Menu -->
        <nav class=" px-4 py-2 lg:mt-2 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
            <!-- Menu Group -->
            <div>

                <h3 class="mb-4 ml-4 text-sm font-medium text-white"></h3>

{{--                <h3 class="mb-4 ml-4 text-sm font-medium text-white">MENU</h3>--}}


                <ul class="mb-6 flex flex-col gap-1.5">
                    <!-- Menu Item Dashboard -->
                    @if(Auth()->user()->checkShowRole(9))
                        <li>
                            <a class=" relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                               href="/dashboard/9" @click.once="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                               :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') || (page === 'Dashboard')
                                }">
                                <svg class="fill-current" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z" fill="" />
                                    <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z" fill="" />
                                    <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z" fill="" />
                                    <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z" fill="" />
                                </svg>
                                الرئيسية
                            </a>
                        </li>
                    @endif
                    <!-- Menu Item Dashboard -->

                    @if(Auth()->user()->checkShowRole(1))
                        <li>
                            <a class="relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                               href="/branches/1" @click="selected = 'Branches'"
                               :class="{
                                    'bg-graydark dark:bg-meta-4': selected === 'Branches' || page === 'Branches'
                                }">
                                <svg class="fill-current" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_130_9807)">
                                        <path d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V7.53335C0.506348 8.4896 1.29385 9.2771 2.2501 9.2771H15.7501C16.7063 9.2771 17.4938 8.4896 17.4938 7.53335V2.3021C17.4938 1.34585 16.7063 0.55835 15.7501 0.55835ZM16.2563 7.53335C16.2563 7.8146 16.0313 8.0396 15.7501 8.0396H2.2501C1.96885 8.0396 1.74385 7.8146 1.74385 7.53335V2.3021C1.74385 2.02085 1.96885 1.79585 2.2501 1.79585H15.7501C16.0313 1.79585 16.2563 2.02085 16.2563 2.3021V7.53335Z" fill="" />
                                        <path d="M6.13135 10.9646H2.2501C1.29385 10.9646 0.506348 11.7521 0.506348 12.7083V15.8021C0.506348 16.7583 1.29385 17.5458 2.2501 17.5458H6.13135C7.0876 17.5458 7.8751 16.7583 7.8751 15.8021V12.7083C7.90322 11.7521 7.11572 10.9646 6.13135 10.9646ZM6.6376 15.8021C6.6376 16.0833 6.4126 16.3083 6.13135 16.3083H2.2501C1.96885 16.3083 1.74385 16.0833 1.74385 15.8021V12.7083C1.74385 12.4271 1.96885 12.2021 2.2501 12.2021H6.13135C6.4126 12.2021 6.6376 12.4271 6.6376 12.7083V15.8021Z" fill="" />
                                        <path d="M15.75 10.9646H11.8688C10.9125 10.9646 10.125 11.7521 10.125 12.7083V15.8021C10.125 16.7583 10.9125 17.5458 11.8688 17.5458H15.75C16.7063 17.5458 17.4938 16.7583 17.4938 15.8021V12.7083C17.4938 11.7521 16.7063 10.9646 15.75 10.9646ZM16.2562 15.8021C16.2562 16.0833 16.0312 16.3083 15.75 16.3083H11.8688C11.5875 16.3083 11.3625 16.0833 11.3625 15.8021V12.7083C11.3625 12.4271 11.5875 12.2021 11.8688 12.2021H15.75C16.0312 12.2021 16.2562 12.4271 16.2562 12.7083V15.8021Z" fill="" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_130_9807">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.052124)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                الفروع
                            </a>
                        </li>
                    @endif
                    <!-- Menu Item Branches -->
                    <!-- Menu Item People -->
                    @if(Auth()->user()->checkShowRole(2) || Auth()->user()->checkShowRole(3) || Auth()->user()->checkShowRole(4))
                        <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="employees" @click.prevent="selected = (selected === 'People' ? '':'People')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'People') || (page === 'Employees' ||
                                    page === 'Delegates' || page === 'Costumers')
                            }">

                            <svg class="fill-current" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                                    fill=""></path>
                                <path
                                    d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                                    fill=""></path>
                            </svg>
                            الموارد البشرية

                            <svg class="absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 transition-transform fill-current"
                                :class="{ 'rotate-180': (selected === 'People') }" width="30" height="30"
                                viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" transform="translate(5, 5)" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'People') ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 text-xl flex flex-col gap-2.5 ltr:pl-6 rtl:pr-6">
                                @if(Auth()->user()->checkShowRole(2))
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                           href="/employees/2" :class="page === 'Employees' && '!text-white'">الموظفين
                                        </a>
                                    </li>
                                @endif
                                @if(Auth()->user()->checkShowRole(3))
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                           href="/delegates/3" :class="page === 'Delegates' && '!text-white'">المندوبين
                                        </a>
                                    </li>
                                @endif
                                @if(Auth()->user()->checkShowRole(4))
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                           href="/customers/4" :class="page === 'Customers' && '!text-white'">الزبائن
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    @endif
                    <!-- Menu Item People -->
                    <!-- Menu Item Shipments -->
                    @if(Auth()->user()->checkShowRole(5) || Auth()->user()->checkShowRole(11))
                        <li>
                            <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                               href="Shipments" @click.prevent="selected = (selected === 'Shipments' ? '':'Shipments')"
                               :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Shipments') || (page === 'status1' ||
                                    page === 'status2' || page === 'status3' || page === 'status4')
                            }">

                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                                        fill=""></path>
                                    <path
                                        d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                                        fill=""></path>
                                </svg>
                                    الشحنات
                                <svg class="absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 transition-transform fill-current"
                                     :class="{ 'rotate-180': (selected === 'Shipments') }" width="30" height="30"
                                     viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                          fill="" transform="translate(5, 5)" />
                                </svg>
                            </a>

                            <!-- Dropdown Menu Start -->
                            <div class="translate transform overflow-hidden"
                                 :class="(selected === 'Shipments') ? 'block' : 'hidden'">
                                <ul class="mb-5.5 mt-4 text-xl flex flex-col gap-2.5 ltr:pl-6 rtl:pr-6">
                                    @if(Auth()->user()->id_type_users != 2)
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl  text-white duration-300 ease-in-out hover:text-white"
                                               href="{{ route('shipments.index', ['page_id' => 5, 'status_id' => 1]) }}" :class="page === 'status1' && '!text-white'">الشحنات الجديدة
                                            </a>
                                        </li>
                                    @endif
                                    @if(Auth()->user()->checkShowRole(11))
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                               href="{{ route('statuses.index', ['page_id' => 11]) }}" :class="page === 'status2' && '!text-white'">الشحنات قيد التوصيل
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                           href="{{ route('shipments.index', ['page_id' => 5, 'status_id' => 3]) }}" :class="page === 'status3' && '!text-white'">الشحنات التي تم تسليمها
                                        </a>
                                    </li>
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                           href="{{ route('shipments.index', ['page_id' => 5, 'status_id' => 4]) }}" :class="page === 'status4' && '!text-white'">الشحنات التي تعذر تسليمها
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- Dropdown Menu End -->
                        </li>
                    @endif
                    <!-- Menu Item Shipments -->

                    <!-- Menu Item Regions -->
                    @if(Auth()->user()->checkShowRole(6))
                        <li>
                            <a class=" relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                href="/subCities/6" @click.once="selected = (selected === 'SubCities' ? '':'SubCities')"
                                :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'SubCities') || (page === 'SubCities')
                                }">
                                <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_130_9728)">
                                        <path
                                            d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z"
                                            fill=""></path>
                                        <path
                                            d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z"
                                            fill=""></path>
                                        <path
                                            d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z"
                                            fill=""></path>
                                        <path
                                            d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z"
                                            fill=""></path>
                                        <path
                                            d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z"
                                            fill=""></path>
                                        <path
                                            d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z"
                                            fill=""></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_130_9728">
                                            <rect width="18" height="18" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                المدن او المناطق
                            </a>
                        </li>
                    @endif
                    <!-- Menu Item Regions -->
                    <!-- Menu Item Settings -->
                    @if(Auth()->user()->checkShowRole(7) || Auth()->user()->checkShowRole(8))
                        <li>
                        <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                            href="Settings" @click.prevent="selected = (selected === 'Settings' ? '':'Settings')"
                            :class="{
                                'bg-graydark dark:bg-meta-4': (selected === 'Settings') || (page === 'Permission' ||
                                    page === 'Settings' || page === 'Settings')
                            }">

                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_130_9763)">
                                    <path
                                        d="M17.0721 7.30835C16.7909 6.99897 16.3971 6.83022 15.9752 6.83022H15.8909C15.7502 6.83022 15.6377 6.74585 15.6096 6.63335C15.5815 6.52085 15.5252 6.43647 15.4971 6.32397C15.4409 6.21147 15.4971 6.09897 15.5815 6.0146L15.6377 5.95835C15.9471 5.6771 16.1159 5.28335 16.1159 4.86147C16.1159 4.4396 15.9752 4.04585 15.6659 3.73647L14.569 2.61147C13.9784 1.99272 12.9659 1.9646 12.3471 2.58335L12.2627 2.6396C12.1784 2.72397 12.0377 2.7521 11.8971 2.69585C11.7846 2.6396 11.6721 2.58335 11.5315 2.55522C11.3909 2.49897 11.3065 2.38647 11.3065 2.27397V2.13335C11.3065 1.26147 10.6034 0.55835 9.73148 0.55835H8.15648C7.7346 0.55835 7.34085 0.7271 7.0596 1.00835C6.75023 1.31772 6.6096 1.71147 6.6096 2.10522V2.21772C6.6096 2.33022 6.52523 2.44272 6.41273 2.49897C6.35648 2.5271 6.32835 2.5271 6.2721 2.55522C6.1596 2.61147 6.01898 2.58335 5.9346 2.49897L5.87835 2.4146C5.5971 2.10522 5.20335 1.93647 4.78148 1.93647C4.3596 1.93647 3.96585 2.0771 3.65648 2.38647L2.53148 3.48335C1.91273 4.07397 1.8846 5.08647 2.50335 5.70522L2.5596 5.7896C2.64398 5.87397 2.6721 6.0146 2.61585 6.09897C2.5596 6.21147 2.53148 6.29585 2.47523 6.40835C2.41898 6.52085 2.3346 6.5771 2.19398 6.5771H2.1096C1.68773 6.5771 1.29398 6.71772 0.984604 7.0271C0.675229 7.30835 0.506479 7.7021 0.506479 8.12397L0.478354 9.69897C0.450229 10.5708 1.15335 11.274 2.02523 11.3021H2.1096C2.25023 11.3021 2.36273 11.3865 2.39085 11.499C2.4471 11.5833 2.50335 11.6677 2.53148 11.7802C2.5596 11.8927 2.53148 12.0052 2.4471 12.0896L2.39085 12.1458C2.08148 12.4271 1.91273 12.8208 1.91273 13.2427C1.91273 13.6646 2.05335 14.0583 2.36273 14.3677L3.4596 15.4927C4.05023 16.1115 5.06273 16.1396 5.68148 15.5208L5.76585 15.4646C5.85023 15.3802 5.99085 15.3521 6.13148 15.4083C6.24398 15.4646 6.35648 15.5208 6.4971 15.549C6.63773 15.6052 6.7221 15.7177 6.7221 15.8302V15.9427C6.7221 16.8146 7.42523 17.5177 8.2971 17.5177H9.8721C10.744 17.5177 11.4471 16.8146 11.4471 15.9427V15.8302C11.4471 15.7177 11.5315 15.6052 11.644 15.549C11.7002 15.5208 11.7284 15.5208 11.7846 15.4927C11.9252 15.4365 12.0377 15.4646 12.1221 15.549L12.1784 15.6333C12.4596 15.9427 12.8534 16.1115 13.2752 16.1115C13.6971 16.1115 14.0909 15.9708 14.4002 15.6615L15.5252 14.5646C16.144 13.974 16.1721 12.9615 15.5534 12.3427L15.4971 12.2583C15.4127 12.174 15.3846 12.0333 15.4409 11.949C15.4971 11.8365 15.5252 11.7521 15.5815 11.6396C15.6377 11.5271 15.7502 11.4708 15.8627 11.4708H15.9471H15.9752C16.819 11.4708 17.5221 10.7958 17.5502 9.92397L17.5784 8.34897C17.5221 8.01147 17.3534 7.5896 17.0721 7.30835ZM16.2284 9.9521C16.2284 10.1208 16.0877 10.2615 15.919 10.2615H15.8346H15.8065C15.1596 10.2615 14.569 10.6552 14.344 11.2177C14.3159 11.3021 14.2596 11.3865 14.2315 11.4708C13.9784 12.0333 14.0909 12.7365 14.5409 13.1865L14.5971 13.2708C14.7096 13.3833 14.7096 13.5802 14.5971 13.6927L13.4721 14.7896C13.3877 14.874 13.3034 14.874 13.2471 14.874C13.1909 14.874 13.1065 14.874 13.0221 14.7896L12.9659 14.7052C12.5159 14.2271 11.8409 14.0865 11.2221 14.3677L11.1096 14.424C10.4909 14.6771 10.0971 15.2396 10.0971 15.8865V15.999C10.0971 16.1677 9.95648 16.3083 9.78773 16.3083H8.21273C8.04398 16.3083 7.90335 16.1677 7.90335 15.999V15.8865C7.90335 15.2396 7.5096 14.649 6.89085 14.424C6.80648 14.3958 6.69398 14.3396 6.6096 14.3115C6.3846 14.199 6.1596 14.1708 5.9346 14.1708C5.54085 14.1708 5.1471 14.3115 4.83773 14.6208L4.78148 14.649C4.66898 14.7615 4.4721 14.7615 4.3596 14.649L3.26273 13.524C3.17835 13.4396 3.17835 13.3552 3.17835 13.299C3.17835 13.2427 3.17835 13.1583 3.26273 13.074L3.31898 13.0177C3.7971 12.5677 3.93773 11.8646 3.6846 11.3021C3.65648 11.2177 3.62835 11.1333 3.5721 11.049C3.3471 10.4583 2.7846 10.0365 2.13773 10.0365H2.05335C1.8846 10.0365 1.74398 9.89585 1.74398 9.7271L1.7721 8.1521C1.7721 8.0396 1.82835 7.98335 1.85648 7.9271C1.8846 7.89897 1.96898 7.84272 2.08148 7.84272H2.16585C2.81273 7.87085 3.40335 7.4771 3.65648 6.88647C3.6846 6.8021 3.74085 6.71772 3.76898 6.63335C4.0221 6.07085 3.9096 5.36772 3.4596 4.91772L3.40335 4.83335C3.29085 4.72085 3.29085 4.52397 3.40335 4.41147L4.52835 3.3146C4.61273 3.23022 4.6971 3.23022 4.75335 3.23022C4.8096 3.23022 4.89398 3.23022 4.97835 3.3146L5.0346 3.39897C5.4846 3.8771 6.1596 4.01772 6.77835 3.7646L6.89085 3.70835C7.5096 3.45522 7.90335 2.89272 7.90335 2.24585V2.13335C7.90335 2.02085 7.9596 1.9646 7.98773 1.90835C8.01585 1.8521 8.10023 1.82397 8.21273 1.82397H9.78773C9.95648 1.82397 10.0971 1.9646 10.0971 2.13335V2.24585C10.0971 2.89272 10.4909 3.48335 11.1096 3.70835C11.194 3.73647 11.3065 3.79272 11.3909 3.82085C11.9815 4.1021 12.6846 3.9896 13.1627 3.5396L13.2471 3.48335C13.3596 3.37085 13.5565 3.37085 13.669 3.48335L14.7659 4.60835C14.8502 4.69272 14.8502 4.7771 14.8502 4.83335C14.8502 4.8896 14.8221 4.97397 14.7659 5.05835L14.7096 5.1146C14.2034 5.53647 14.0627 6.2396 14.2877 6.8021C14.3159 6.88647 14.344 6.97085 14.4002 7.05522C14.6252 7.64585 15.1877 8.06772 15.8346 8.06772H15.919C16.0315 8.06772 16.0877 8.12397 16.144 8.1521C16.2002 8.18022 16.2284 8.2646 16.2284 8.3771V9.9521Z"
                                        fill="" />
                                    <path
                                        d="M9.00029 5.22705C6.89092 5.22705 5.17529 6.94268 5.17529 9.05205C5.17529 11.1614 6.89092 12.8771 9.00029 12.8771C11.1097 12.8771 12.8253 11.1614 12.8253 9.05205C12.8253 6.94268 11.1097 5.22705 9.00029 5.22705ZM9.00029 11.6114C7.59404 11.6114 6.44092 10.4583 6.44092 9.05205C6.44092 7.6458 7.59404 6.49268 9.00029 6.49268C10.4065 6.49268 11.5597 7.6458 11.5597 9.05205C11.5597 10.4583 10.4065 11.6114 9.00029 11.6114Z"
                                        fill="" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_130_9763">
                                        <rect width="20" height="20" fill="white"
                                            transform="translate(0 0.052124)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            الإعدادات

                            <svg class="absolute ltr:right-4 rtl:left-4 top-1/2 -translate-y-1/2 transition-transform fill-current"
                                :class="{ 'rotate-180': (selected === 'Settings') }" width="30" height="30"
                                viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                                    fill="" transform="translate(5, 5)" />
                            </svg>
                        </a>

                        <!-- Dropdown Menu Start -->
                        <div class="translate transform overflow-hidden"
                            :class="(selected === 'Settings') ? 'block' : 'hidden'">
                            <ul class="mb-5.5 mt-4 text-xl flex flex-col gap-2.5 ltr:pl-6 rtl:pr-6">
                                @if(Auth()->user()->checkShowRole(7))
                                    <li>
                                        <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                            href="/roles/7" :class="page === 'Permission' && '!text-white'">
                                            الصلاحيات
                                        </a>
                                    </li>
                                @endif
                                @if(Auth()->user()->checkShowRole(8))
                                    <li>
                                <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-xl text-white duration-300 ease-in-out hover:text-white"
                                    href="/status/8" :class="page === 'TypeShipments' && '!text-white'">
                                    انواع حالات الشحنة
                                </a>
                            </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Dropdown Menu End -->
                    </li>
                    @endif
                    <!-- Menu Item Settings -->
                    @if(Auth()->user()->checkShowRole(12))
                        <li>
                            <a class=" relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-2xl text-white duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                               href="/reports/12" @click.once="selected = (selected === 'Reports' ? '':'Reports')"
                               :class="{
                                    'bg-graydark dark:bg-meta-4': (selected === 'Reports') || (page === 'Reports')
                                }">
                                <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_130_9787)">
                                        <path d="M15.8343 2.49902C15.8343 1.43027 14.9624 0.530273 13.8655 0.530273H4.13428C3.06553 0.530273 2.16553 1.40215 2.16553 2.49902V16.6178C2.16553 16.8428 2.30615 17.0678 2.50303 17.1803C2.6999 17.2928 2.95303 17.2646 3.1499 17.1521L4.55615 16.224L6.44053 17.4615C6.66553 17.6021 6.91865 17.6021 7.14365 17.4615L8.9999 16.224L10.8562 17.4615C10.9687 17.5459 11.0812 17.574 11.1937 17.574C11.3062 17.574 11.4468 17.5459 11.5312 17.4615L13.3874 16.224L14.7937 17.1803C14.9905 17.3209 15.2437 17.3209 15.4405 17.2084C15.6374 17.0959 15.778 16.8709 15.778 16.6459L15.8343 2.49902ZM14.0343 15.099C13.6687 14.8459 13.1905 14.8459 12.8249 15.099L11.2218 16.1678L9.61865 15.099C9.42178 14.9865 9.2249 14.9021 8.9999 14.9021C8.80303 14.9021 8.57803 14.9584 8.40928 15.099L6.80615 16.1678L5.20303 15.099C4.8374 14.8459 4.35928 14.8459 3.99365 15.099L3.45928 15.4365V2.49902C3.45928 2.10527 3.76865 1.7959 4.1624 1.7959H13.9218C14.3155 1.7959 14.6249 2.10527 14.6249 2.49902V15.4365L14.0343 15.099Z" fill=""></path>
                                        <path d="M7.93106 3.79272H5.5123C5.1748 3.79272 4.89355 4.07397 4.89355 4.41147C4.89355 4.74897 5.1748 5.03022 5.5123 5.03022H7.93106C8.26856 5.03022 8.54981 4.74897 8.54981 4.41147C8.54981 4.07397 8.26856 3.79272 7.93106 3.79272Z" fill=""></path>
                                        <path d="M12.347 3.79272H11.672C11.3345 3.79272 11.0532 4.07397 11.0532 4.41147C11.0532 4.74897 11.3345 5.03022 11.672 5.03022H12.347C12.6845 5.03022 12.9657 4.74897 12.9657 4.41147C12.9657 4.07397 12.6845 3.79272 12.347 3.79272Z" fill=""></path>
                                        <path d="M5.5123 8.74275H7.05918C7.39668 8.74275 7.67793 8.4615 7.67793 8.124C7.67793 7.7865 7.39668 7.50525 7.05918 7.50525H5.5123C5.1748 7.50525 4.89355 7.7865 4.89355 8.124C4.89355 8.4615 5.14668 8.74275 5.5123 8.74275Z" fill=""></path>
                                        <path d="M12.347 7.47717H11.672C11.3345 7.47717 11.0532 7.75842 11.0532 8.09592C11.0532 8.43342 11.3345 8.71467 11.672 8.71467H12.347C12.6845 8.71467 12.9657 8.43342 12.9657 8.09592C12.9657 7.75842 12.6845 7.47717 12.347 7.47717Z" fill=""></path>
                                        <path d="M7.93106 11.1334H5.5123C5.1748 11.1334 4.89355 11.4147 4.89355 11.7522C4.89355 12.0897 5.1748 12.3709 5.5123 12.3709H7.93106C8.26856 12.3709 8.54981 12.0897 8.54981 11.7522C8.54981 11.4147 8.26856 11.1334 7.93106 11.1334Z" fill=""></path>
                                        <path d="M12.347 11.1334H11.672C11.3345 11.1334 11.0532 11.4147 11.0532 11.7522C11.0532 12.0897 11.3345 12.3709 11.672 12.3709H12.347C12.6845 12.3709 12.9657 12.0897 12.9657 11.7522C12.9657 11.4147 12.6845 11.1334 12.347 11.1334Z" fill=""></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_130_9787">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.052124)"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                                التقارير
                            </a>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- Others Group -->
            <div>

                <h3 class="mb-4 ml-4 text-sm font-medium text-white"></h3>

{{--                <h3 class="mb-4 ml-4 text-sm font-medium text-white">OTHERS</h3>--}}



            </div>
        </nav>
        <!-- Sidebar Menu -->
    </div>
</aside>
