<x-admin-app>
    <div class="col-span-12 pt-6">
        <div class="intro-y flex items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Regular Form
            </h2>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12">
                <!-- BEGIN: Vertical Form -->
                <div class="intro-y box">
                    <div id="vertical-form" class="p-5">
                        <div class="preview">
                            <form action="{{ route('admin.user.store') }}" method="POST">
                                @csrf
                                <div>
                                    <label for="vertical-form-2" class="form-label">User Name</label>
                                    <input id="vertical-form-2" type="text" name="username" class="form-control" placeholder="鈴木 一郎">
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-1" class="form-label">Email</label>
                                    <input id="vertical-form-1" type="email" name="email" class="form-control"
                                        placeholder="example@gmail.com">
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Directory Name</label>
                                    <input id="vertical-form-2" type="text" name="dir_name" class="form-control">
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">Database Password</label>
                                    <input id="vertical-form-2" type="text" class="form-control"
                                        placeholder="自動生成されます" disabled>
                                </div>
                                <div class="mt-3">
                                    <label for="vertical-form-2" class="form-label">SlackID</label>
                                    <input id="vertical-form-2" type="text" class="form-control"
                                        placeholder="ログイン時に登録されます" disabled>
                                </div>
                                <div class="form-check mt-5">
                                    <input id="vertical-form-3" class="form-check-input" type="checkbox" name="slack_invitation" value="1"
                                        checked>
                                    <label class="form-check-label" for="vertical-form-3">Slackチャンネルへの招待メールを送信する</label>
                                </div>
                                <button type="submit" class="btn btn-primary mt-5">新規登録</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Vertical Form -->
            </div>
        </div>
    </div>
</x-admin-app>
