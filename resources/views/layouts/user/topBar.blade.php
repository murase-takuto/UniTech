<!-- BEGIN: Top Bar -->
<div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Search -->
    <div class="intro-x relative mr-3 sm:mr-6">
        <div class="search hidden sm:block">
            <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
            <i data-feather="search" class="search__icon dark:text-slate-500"></i>
        </div>
        <a class="notification sm:hidden" href=""> <i data-feather="search"
                class="notification__icon dark:text-slate-500"></i> </a>
        <div class="search-result">
            <div class="search-result__content">
                <div class="search-result__content__title">Pages</div>
                <div class="mb-5">
                    <a href="" class="flex items-center">
                        <div
                            class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="inbox"></i>
                        </div>
                        <div class="ml-3">Mail Settings</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="users"></i>
                        </div>
                        <div class="ml-3">Users & Permissions</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div
                            class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                            <i class="w-4 h-4" data-feather="credit-card"></i>
                        </div>
                        <div class="ml-3">Transactions Report</div>
                    </a>
                </div>
                <div class="search-result__content__title">Users</div>
                <div class="mb-5">
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-9.jpg') }}">
                        </div>
                        <div class="ml-3">Kevin Spacey</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">kevinspacey@left4code.com
                        </div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-12.jpg') }}">
                        </div>
                        <div class="ml-3">Denzel Washington</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                            denzelwashington@left4code.com</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-13.jpg') }}">
                        </div>
                        <div class="ml-3">Al Pacino</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com
                        </div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                                src="{{ asset('dist/images/profile-6.jpg') }}">
                        </div>
                        <div class="ml-3">John Travolta</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johntravolta@left4code.com
                        </div>
                    </a>
                </div>
                <div class="search-result__content__title">Products</div>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/preview-5.jpg') }}">
                    </div>
                    <div class="ml-3">Sony A7 III</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/preview-9.jpg') }}">
                    </div>
                    <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/preview-10.jpg') }}">
                    </div>
                    <div class="ml-3">Dell XPS 13</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                </a>
                <a href="" class="flex items-center mt-2">
                    <div class="w-8 h-8 image-fit">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/preview-15.jpg') }}">
                    </div>
                    <div class="ml-3">Sony Master Series A9G</div>
                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                </a>
            </div>
        </div>
    </div>
    <!-- END: Search -->
    <!-- BEGIN: Notifications -->
    <div class="intro-x dropdown mr-auto sm:mr-6">
        <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
            aria-expanded="false" data-tw-toggle="dropdown"> <i data-feather="bell"
                class="notification__icon dark:text-slate-500"></i> </div>
        <div class="notification-content pt-2 dropdown-menu">
            <div class="notification-content__box dropdown-content">
                <div class="notification-content__title">Notifications</div>
                <div class="cursor-pointer relative flex items-center ">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-9.jpg') }}">
                        <div
                            class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomi</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-12.jpg') }}">
                        <div
                            class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of
                            Lorem Ipsum available, but the majority have suffered alteration in some form, by injected
                            humour, or randomi</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-13.jpg') }}">
                        <div
                            class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy
                            text ever since the 1500</div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-6.jpg') }}">
                        <div
                            class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a reader
                            will be disracted by the readable content of a page when looking at its layout. The point
                            of using Lorem </div>
                    </div>
                </div>
                <div class="cursor-pointer relative flex items-center mt-5">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-15.jpg') }}">
                        <div
                            class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                        </div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                        <div class="flex items-center">
                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                            <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                        </div>
                        <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is
                            not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                            making it over 20</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Notifications -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
            aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="Tinker Tailwind HTML Admin Template" src="{{ Auth::user()->avatar }}">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ Auth::user()->name }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="user"
                            class="w-4 h-4 mr-2"></i> Profile </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="edit"
                            class="w-4 h-4 mr-2"></i> Add Account </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="lock"
                            class="w-4 h-4 mr-2"></i> Reset Password </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5"> <i data-feather="help-circle"
                            class="w-4 h-4 mr-2"></i> Help </a>
                </li>
                <li>
                    <hr class="dropdown-divider border-white/[0.08]">
                </li>
                <li>
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <a href="{{ route('user.logout') }}" class="dropdown-item hover:bg-white/5" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                            {{ __('Sign Out') }}
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
