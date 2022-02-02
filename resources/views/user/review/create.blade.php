<x-app-layout>
    <div class="col-span-12 pt-6">
        <div class="grid grid-cols-12 gap-6 mt-5 mb-5">
            <div class="intro-y col-span-12 lg:col-span-4">
                <!-- BEGIN: Task -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Task{{ $task->task_number }}
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <div>
                                <label for="regular-form-1" class="form-label">サンプルURL</label>
                                <input id="regular-form-1" type="text" class="form-control"
                                    placeholder="/home/www/yamada/hello.php">
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Content</label>
                                <p>
                                    {!! nl2br($task->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Task -->
            </div>
            <div class="intro-y col-span-12 lg:col-span-8">
                <!-- BEGIN: Submit Form -->
                <div class="intro-y box">
                    <div
                        class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">
                            Submit
                        </h2>
                    </div>
                    <div id="input" class="p-5">
                        <div class="preview">
                            <form action="{{ route('user.review.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="regular-form-1" class="form-label">URL</label>
                                    <input id="regular-form-1" type="text" name="url" class="form-control"
                                        placeholder="/home/www/yamada/hello.php">
                                </div>
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <textarea class="form-control border-primary bg-slate-100 pl-2 py-2 resize-none"
                                            rows="5" name="file_first"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <textarea class="form-control border-primary bg-slate-100 pl-2 py-2 resize-none"
                                            rows="5" name="file_second"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="regular-form-3" class="form-label">Full Path of File</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <textarea class="form-control border-primary bg-slate-100 pl-2 py-2 resize-none"
                                            rows="5" name="file_third"></textarea>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 dark:border-dark-5 mt-4 pt-4">
                                    <label for="regular-form-3" class="form-label">Comment</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <textarea class="form-control border-primary bg-slate-100 pl-2 py-2 resize-none"
                                            rows="5" name="submit_comment"></textarea>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary w-32 mr-2 mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-send block mr-2">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
                                        提出する
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Submit Form -->
            </div>
        </div>
    </div>
</x-app-layout>
