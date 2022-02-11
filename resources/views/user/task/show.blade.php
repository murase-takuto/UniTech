<x-app-layout>
    <div class="col-span-12 pt-6">
        <div class="grid grid-cols-12 gap-6 mt-5 mb-5">
            <div class="intro-y col-span-12">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">課題{{ $task->task_number }}</h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Title</label>
                                <p>{{ $task->title }}</p>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Content</label>
                                <p>{!! $task->content !!}</p>
                            </div>
                            <div class="mt-3">
                                @if (!$reviewingFlg)
                                    <a href="{{ route('user.review.create') }}"
                                        class="btn btn-primary w-32 mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-send block mr-2">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                        提出する
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
            {{-- <div class="intro-y col-span-12">
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">課題{{ $task->task_number }}の提出履歴</h2>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
