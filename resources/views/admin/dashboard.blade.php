<x-admin-app>
    <!-- BEGIN: Profile Info -->
    <div class="col-span-12 pt-6">
        <div class="intro-y box px-5 pt-5 mt-5">
            <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ asset('dist/images/profile-6.jpg') }}">
                        <div
                            class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-primary rounded-full p-2">
                            <i class="w-4 h-4 text-white" data-feather="camera"></i>
                        </div>
                    </div>
                    <div class="ml-5">
                        <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                            {{ Auth::user()->name }}</div>
                        <div class="text-slate-500">DevOps Engineer</div>
                    </div>
                </div>
                <div
                    class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-3">Profile</div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail"
                                class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram"
                                class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="twitter"
                                class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                    </div>
                </div>
                <div
                    class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-3">Server Info</div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="mail"
                                class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="instagram"
                                class="w-4 h-4 mr-2"></i> {{ Auth::user()->email }} </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Profile Info -->
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Weekly Top Products -->
            <div class="col-span-12 mt-6 mb-6">
                <div class="intro-y block sm:flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Unreviewed List
                    </h2>
                    <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                        <button class="btn box flex items-center text-slate-600 dark:text-slate-300"> <i
                                data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                        </button>
                        <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300"> <i
                                data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                        </button>
                    </div>
                </div>
                <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                    <table class="table table-report sm:mt-2">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Task No.</th>
                                <th class="whitespace-nowrap">User Name</th>
                                <th class="whitespace-nowrap">Submitted Date</th>
                                <th class="whitespace-nowrap">STATUS</th>
                                <th class="whitespace-nowrap">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviewedTasks as $r)
                                <tr class="intro-x">
                                    <td class="w-40">
                                        <p class="font-medium whitespace-nowrap">課題{{ $r->task->task_number }}</p>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                            {{ $r->task->title }}</div>
                                    </td>
                                    <td>
                                        <p class="font-medium whitespace-nowrap">{{ $r->user->name }}さん</p>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">〇〇大学</div>
                                    </td>
                                    <td>
                                        <p class="font-medium whitespace-nowrap">{{ $r->created_at->diffForHumans() }}
                                        </p>
                                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                                            {{ $r->created_at->format('Y/m/d h:m') }}</div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex text-success"> <i
                                                data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex">
                                            <a class="flex text-primary mr-3" href="{{ route('admin.review.edit', $r->id) }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Review
                                            </a>
                                            <a class="flex text-danger" href="{{ route('admin.review.show', $r->id) }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Show
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                    {{ $reviewedTasks->links() }}
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
</x-admin-app>
