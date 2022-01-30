<x-app-layout>
    <div class="col-span-12 lg:col-span-3 2xl:col-span-2 pt-6">
        <h2 class="intro-y text-lg font-medium mr-auto mt-2">
            みんなのコード
        </h2>
        <!-- BEGIN: File Manager Menu -->
        <div class="intro-y box p-5 mt-6">
            <div class="mt-1">
                <a href="" class="flex items-center px-3 py-2 rounded-md bg-primary text-white font-medium"> <i
                        class="w-4 h-4 mr-2" data-feather="image"></i> すべてのコード </a>
                <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md"> <i class="w-4 h-4 mr-2"
                        data-feather="users"></i> 1期生 </a>
            </div>
            <div class="border-t border-slate-200 dark:border-darkmode-400 mt-4 pt-4">
                <a href="" class="flex items-center px-3 py-2 rounded-md">
                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[ReviewStatusConsts::REVIEWING]['title'] }}
                </a>
                <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                    <div class="w-2 h-2 bg-success rounded-full mr-3"></div>
                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[ReviewStatusConsts::PASSED]['title'] }}
                </a>
                <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                    <div class="w-2 h-2 bg-danger rounded-full mr-3"></div>
                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[ReviewStatusConsts::REJECTED]['title'] }}
                </a>
                <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                    <div class="w-2 h-2 bg-dark rounded-full mr-3"></div>
                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[ReviewStatusConsts::REVERSED]['title'] }}
                </a>
            </div>
        </div>
        <!-- END: File Manager Menu -->
    </div>
    <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
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
                            @foreach ($reviews as $r)
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
                                        {{-- <div class="flex text-success"> <i
                                                data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div> --}}
                                        <div class="flex">
                                            @switch($r->status)
                                                @case(ReviewStatusConsts::REVIEWING)
                                                    <div class="py-1 px-2 rounded-full text-xs bg-primary text-white cursor-pointer font-medium">
                                                        {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                    </div>
                                                @break
                                                @case(ReviewStatusConsts::REJECTED)
                                                    <div class="py-1 px-2 rounded-full text-xs bg-danger text-white cursor-pointer font-medium">
                                                        {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                    </div>
                                                @break
                                                @case(ReviewStatusConsts::PASSED)
                                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                                                        {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                    </div>
                                                @break
                                                @case(ReviewStatusConsts::REVERSED)
                                                    <div class="py-1 px-2 rounded-full text-xs bg-dark text-white cursor-pointer font-medium">
                                                        {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$r->status]['title'] }}
                                                    </div>
                                                @break
                                                @default
                                            @endswitch
                                        </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex">
                                            <a class="flex text-primary mr-3" href="{{ route('user.review.show', $r->id) }}">
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
                    {{ $reviews->links() }}
                </div>
            </div>
            <!-- END: Weekly Top Products -->
        </div>
    </div>
    {{-- <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
        <!-- BEGIN: Directory & Files -->
        <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
            @for ($i = 0; $i < 30; $i++)
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <div class="absolute left-0 top-0 mt-3 ml-3">
                            <input class="form-check-input border border-slate-500" type="checkbox">
                        </div>
                        <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                            <div class="file__icon--image__preview image-fit">
                                <img alt="Tinker Tailwind HTML Admin Template" src="dist/images/preview-9.jpg">
                            </div>
                        </a>
                        <a href="" class="block font-medium mt-4 text-center truncate">preview-9.jpg</a>
                        <div class="text-slate-500 text-xs text-center mt-0.5">1 MB</div>
                        <div class="absolute top-0 right-0 mr-2 mt-3 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"
                                data-tw-toggle="dropdown"> <i data-feather="more-vertical"
                                    class="w-5 h-5 text-slate-500"></i> </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-feather="users"
                                                class="w-4 h-4 mr-2"></i> Share File </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-feather="trash"
                                                class="w-4 h-4 mr-2"></i> Delete </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <!-- END: Directory & Files -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
            <nav class="w-full sm:w-auto sm:mr-auto">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevrons-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                    <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                    <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4"
                                data-feather="chevron-right"></i> </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#"> <i class="w-4 h-4"
                                data-feather="chevrons-right"></i> </a>
                    </li>
                </ul>
            </nav>
            <select class="w-20 form-select box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
    </div> --}}
</x-app-layout>
