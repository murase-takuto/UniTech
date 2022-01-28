<x-admin-app>
    <div class="col-span-12 pt-6">
        <div class="grid grid-cols-12 gap-6 mt-5 mb-5">
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Task{{ $task->task_number }}
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Title</label>
                                {{-- <input id="regular-form-3" type="text" class="form-control" placeholder=""> --}}
                                {{-- <div class="form-help">(ex) /home/www/yamada/hello.php</div> --}}
                                <p>
                                    {{ $task->title }}
                                </p>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Content</label>
                                {{-- <input id="regular-form-3" type="text" class="form-control" placeholder=""> --}}
                                {{-- <div class="form-help">(ex) /home/www/yamada/hello.php</div> --}}
                                <p>
                                    {!! $task->content !!}
                                </p>
                            </div>
                            <div class="mt-3">
                                <a href="{{ route('user.review.create') }}" class="btn btn-primary w-32 mr-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-activity w-4 h-4 mr-2 w-4 h-4 mr-2">
                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                    </svg>
                                    提出する
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
            <div class="intro-y col-span-12 lg:col-span-6">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Activity Log
                        </h2>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
        </div>
    </div>
</x-admin-app>