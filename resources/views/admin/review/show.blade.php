<x-admin-app>
    <div class="col-span-12 pt-6">
        <div class="grid grid-cols-12 gap-6 mt-5 mb-5">
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Task{{ $review->task->task_number }}
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="regular-form-1" class="form-label">URL</label>
                                <input id="regular-form-1" type="text" class="form-control"
                                    placeholder="/home/www/yamada/hello.php">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Content</label>
                                {{-- <input id="regular-form-3" type="text" class="form-control" placeholder=""> --}}
                                {{-- <div class="form-help">(ex) /home/www/yamada/hello.php</div> --}}
                                <p>
                                    {!! $review->task->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
            <div class="intro-y col-span-12 lg:col-span-8">
                <!-- BEGIN: Input -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Review
                        </h2>
                        @switch($review->status)
                            @case(ReviewStatusConsts::REVIEWING)
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-primary text-white cursor-pointer font-medium">
                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                </div>
                            @break
                            @case(ReviewStatusConsts::REJECTED)
                                <div class="py-1 px-2 rounded-full text-xs bg-danger text-white cursor-pointer font-medium">
                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                </div>
                            @break
                            @case(ReviewStatusConsts::PASSED)
                                <div
                                    class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                </div>
                            @break
                            @case(ReviewStatusConsts::REVERSED)
                                <div class="py-1 px-2 rounded-full text-xs bg-dark text-white cursor-pointer font-medium">
                                    {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                </div>
                            @break
                            @default
                        @endswitch
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="regular-form-1" class="form-label">動作確認用URL</label>
                                <a href="{{ $review->url }}" class="text-theme-25 block font-bold"
                                    target="_blank">{{ $review->url }}</a>
                            </div>
                            @if ($review->file_first)
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <pre><code class="language-php">{{ $review->file_first }}</code></pre>
                                </div>
                            @endif
                            @if ($review->file_second)
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <pre><code class="language-php">{{ $review->file_second }}</code></pre>
                                </div>
                            @endif
                            @if ($review->file_third)
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <pre><code class="language-php">{{ $review->file_third }}</code></pre>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
        </div>
    </div>
</x-admin-app>
