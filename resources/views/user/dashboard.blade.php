<x-app-layout>
    <!-- BEGIN: Profile Info -->
    <div class="col-span-12 pt-6">
        <div class="intro-y box px-5 pt-5 mt-5">
            <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                        <img alt="Tinker Tailwind HTML Admin Template" class="rounded-full"
                            src="{{ Auth::user()->avatar }}">
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
                        <div class="truncate sm:whitespace-normal flex items-center">
                            <i data-feather="mail" class="w-4 h-4 mr-2"></i>
                            {{ Auth::user()->email }}
                        </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">
                            <i data-feather="twitter" class="w-4 h-4 mr-2"></i>
                            {{ Auth::user()->email }}
                        </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">
                            <i data-feather="slack" class="w-4 h-4 mr-2"></i>
                            {{ Auth::user()->slack_id ? '連携済み' : '未連携' }}
                        </div>
                    </div>
                </div>
                <div
                    class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                    <div class="font-medium text-center lg:text-left lg:mt-3">Server Info</div>
                    <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                        <div class="truncate sm:whitespace-normal flex items-center">
                            <i data-feather="database" class="w-4 h-4 mr-2"></i>
                            {{ Auth::user()->email }}
                        </div>
                        <div class="truncate sm:whitespace-normal flex items-center mt-3">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Profile Info -->
    <!-- BEGIN: News -->
    <div class="col-span-12">
        <div class="2xl:border-l -mb-10 pb-10">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 md:col-span-6 xl:col-span-6 mt-3 2xl:mt-6">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">
                            News
                        </h2>
                        <button data-carousel="important-notes" data-target="prev"
                            class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="important-notes" data-target="next"
                            class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="box zoom-in">
                            <div class="tiny-slider" id="important-notes">
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s.
                                        </div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 md:col-span-6 xl:col-span-6 mt-3 2xl:mt-6">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">
                            News
                        </h2>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="box zoom-in">
                            <div class="tiny-slider" id="important-notes">
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">
                                            Lorem Ipsum is simply dummy text
                                        </div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s.
                                        </div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: News -->
    <div class="col-span-12">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: Reviewed Tasks -->
            <div class="col-span-12 xl:col-span-8 mt-6">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Reviewed Tasks
                    </h2>
                </div>
                <div class="mt-5">
                    @if ($reviewedTasks->isNotEmpty())
                        @foreach ($reviewedTasks as $r)
                            <div class="intro-y">
                                <a href="{{ route('user.review.show', $r->id) }}">
                                    <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                        <div class="ml-4 mr-auto">
                                            <div class="text-slate-500 text-xs">課題{{ $r->task->task_number }}</div>
                                            <div class="font-medium mt-0.5">{{ $r->task->title }}</div>
                                        </div>
                                        @switch($r->status)
                                            @case(ReviewStatusConsts::REVIEWING)
                                                <div
                                                    class="py-1 px-2 rounded-full text-xs bg-primary text-white cursor-pointer font-medium">
                                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                </div>
                                            @break
                                            @case(ReviewStatusConsts::REJECTED)
                                                <div
                                                    class="py-1 px-2 rounded-full text-xs bg-danger text-white cursor-pointer font-medium">
                                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                </div>
                                            @break
                                            @case(ReviewStatusConsts::PASSED)
                                                <div
                                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                </div>
                                            @break
                                            @case(ReviewStatusConsts::REVERSED)
                                                <div
                                                    class="py-1 px-2 rounded-full text-xs bg-dark text-white cursor-pointer font-medium">
                                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                </div>
                                            @break
                                            @default
                                        @endswitch
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @else
                        <div class="intro-y">
                            <div class="box px-4 py-4 mb-3 flex items-center">
                                <div class="ml-4 mr-auto">
                                    <div class="text-xs">
                                        まだ提出した課題がありません。
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <!-- END: Reviewed Tasks -->
            <!-- BEGIN: Recent Activities -->
            <div class="col-span-12 xl:col-span-4 mt-6">
                <div class="intro-x flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        Recent Activities
                    </h2>
                </div>
                <div
                    class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                    <div class="intro-x relative flex items-center mb-3">
                        <div
                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-4.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1">
                            <div class="flex items-center">
                                <div class="font-medium">Johnny Depp</div>
                                <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-slate-500 mt-1">Has joined the team</div>
                        </div>
                    </div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div
                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1">
                            <div class="flex items-center">
                                <div class="font-medium">Kevin Spacey</div>
                                <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="mt-1">Added 3 new photos</div>
                        </div>
                    </div>
                    <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div
                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1">
                            <div class="flex items-center">
                                <div class="font-medium">Russell Crowe</div>
                                <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">Oppo
                                    Find X2 Pro</a> price and description</div>
                        </div>
                    </div>
                    <div class="intro-x relative flex items-center mb-3">
                        <div
                            class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                            <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/profile-6.jpg">
                            </div>
                        </div>
                        <div class="box px-5 py-3 ml-4 flex-1">
                            <div class="flex items-center">
                                <div class="font-medium">Brad Pitt</div>
                                <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                            </div>
                            <div class="text-slate-500 mt-1">
                                Has changed <a class="text-primary" href="">Nikon Z6</a> description
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Recent Activities -->
        </div>
    </div>
</x-app-layout>
