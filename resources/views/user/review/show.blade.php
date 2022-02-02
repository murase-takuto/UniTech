<x-app-layout>
    <div class="col-span-12 pt-6">
        <div class="grid grid-cols-12 gap-6 mt-5 mb-5">
            <div class="intro-y col-span-12 lg:col-span-8">
                <!-- BEGIN: Task -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            課題{{ $review->task->task_number }}
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="regular-form-1" class="form-label">動作確認URL</label>
                                <a href="{{ $review->url }}" class="text-theme-25 block font-bold"
                                    target="_blank">{{ $review->url }}</a>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Content</label>
                                <p>
                                    {!! nl2br($review->task->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Task -->
                <!-- BEGIN: Review -->
                <div class="intro-y box mt-5">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Review
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <label for="regular-form-3" class="form-label">Review Status</label>
                            <div class="rounded-md text-center">
                                @switch($review->status)
                                    @case(ReviewStatusConsts::REVIEWING)
                                        <div class="py-1 px-2 rounded-full text-xs bg-primary text-white font-medium">
                                            {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                        </div>
                                    @break
                                    @case(ReviewStatusConsts::REJECTED)
                                        <div class="py-1 px-2 rounded-full text-xs bg-danger text-white font-medium">
                                            {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                        </div>
                                    @break
                                    @case(ReviewStatusConsts::PASSED)
                                        <div class="py-1 px-2 rounded-full text-xs bg-success text-white font-medium">
                                            {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                        </div>
                                    @break
                                    @case(ReviewStatusConsts::REVERSED)
                                        <div class="py-1 px-2 rounded-full text-xs bg-dark text-white font-medium">
                                            {{ ReviewStatusConsts::REVIEW_STATUS_LIST[$review->status]['title'] }}
                                        </div>
                                    @break
                                    @default
                                @endswitch
                            </div>
                            <label for="regular-form-3" class="form-label mt-4">Comment</label>
                            <div class="overflow-y-auto py-3 px-3 rounded-md bg-slate-100">
                                @if (!$review->status == ReviewStatusConsts::PASSED || $review->status == ReviewStatusConsts::REJECTED)
                                    {!! nl2br($review->review_comment) !!}
                                @else
                                    <p>この提出はまだレビューされていません。</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Review -->
                <!-- BEGIN: Code -->
                <div class="intro-y box mt-5">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Code
                        </h2>
                        <div class="text-xs text-gray font-medium">
                            {{ $review->created_at->format('Y/m/d h:m') }}に提出
                        </div>
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
                <!-- END: Code -->
            </div>
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Comments -->
                <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Comments
                        </h2>
                    </div>
                    @if ($review->user_id != Auth::id())
                        <div class="intro-y box">
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <form action="{{ route('user.comment.store') }}" method="POST">
                                        @csrf
                                        <div>
                                            <input type="hidden" value="{{ $review->id }}" name="review_id">
                                            <textarea
                                                class="form-control border-primary bg-slate-100 pl-2 py-2 resize-none"
                                                rows="5" name="comment"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-2 mr-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-send block mr-2">
                                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                            </svg>
                                            コメントする
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="mt-5">
                        @foreach ($review->comments as $c)
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="box px-5 py-3 flex-1">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $c->user->name }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">
                                            {{ $c->created_at->format('m/d h:m') }}</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">{!! nl2br($c->content) !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: Commentss -->
            </div>
        </div>
    </div>
</x-app-layout>
