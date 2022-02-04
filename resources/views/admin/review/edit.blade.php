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
                                <p>
                                    {!! $review->task->content !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
                <!-- BEGIN: Transactions -->
                <div class="col-span-12 md:col-span-6 2xl:col-span-12 mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Comments
                        </h2>
                    </div>
                    <div class="mt-5">
                        @foreach ($review->comments as $c)
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="box px-5 py-3 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $c->user->name }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">
                                            {{ $c->created_at->format('m/d h:m') }}</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">{{ $c->content }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: Transactions -->
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
                            <form action="{{ route('admin.review.update', $review->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="border-t border-gray-200 dark:border-dark-5 mt-4 pt-4">
                                    <label for="regular-form-3" class="form-label">Review</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <select class="form-select mb-2 sm:mr-2" name="review_status">
                                            @foreach (ReviewStatusConsts::REVIEW_STATUS_LIST as $key => $value)
                                                @if ($review->status == $key)
                                                    <option value="{{ $key }}" selected>
                                                        {{ $value['title'] }}</option>
                                                @else
                                                    <option value="{{ $key }}">{{ $value['title'] }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <textarea name="review_comment" class="form-control" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-activity w-4 h-4 mr-2 w-4 h-4 mr-2">
                                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                        </svg>
                                        レビューを完了する
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Input -->
            </div>
        </div>
    </div>
</x-admin-app>
