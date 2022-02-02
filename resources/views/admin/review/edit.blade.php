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
                                <label for="regular-form-1" class="form-label">URL</label>
                                {{-- <input id="regular-form-1" type="text" class="form-control" placeholder="/home/www/yamada/hello.php"> --}}
                                <a href="{{ $review->url }}" class="text-theme-25 block font-bold"
                                    target="_blank">{{ $review->url }}</a>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Full Path of File</label>
                                <div class="overflow-y-auto mt-3 rounded-md">
                                    <pre id="copy-image-zoom" class="source-preview">
                                        <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10">
                                            HTMLOpenTagdiv class=&quot;leading-relaxed&quot;HTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Trust fund seitan chia, wolf lomo letterpress Bushwick before they sold out. Carles kogi fixie, squid twee Tonx readymade cred typewriter scenester locavore kale chips vegan organic. Meggings pug wolf Shoreditch typewriter skateboard. McSweeney&#039;s iPhone chillwave, food truck direct trade disrupt flannel irony tousled Cosby sweater single-origin coffee. Organic disrupt bicycle rights, tattooed messenger bag flannel craft beer fashion axe bitters. Readymade sartorial craft beer, quinoa sustainable butcher Marfa Echo Park Terry Richardson gluten-free flannel retro cred mlkshk banjo. Salvia 90&#039;s art party Blue Bottle, PBR&amp;B cardigan 8-bit. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Meggings irony fashion axe, tattooed master cleanse Blue Bottle stumptown bitters authentic flannel freegan paleo letterpress ugh sriracha. Wolf PBR&amp;B art party aesthetic meh cliche. Sartorial before they sold out deep v, aesthetic PBR&amp;B craft beer post-ironic synth keytar pork belly skateboard pour-over. Tonx cray pug Etsy, gastropub ennui wolf ethnic Odd Future viral master cleanse skateboard banjo. Pitchfork scenester cornhole, whatever try-hard ethnic banjo +1 gastropub American Apparel vinyl skateboard Shoreditch seitan. Blue Bottle keffiyeh Austin Helvetica art party. Portland ethnic fixie, beard retro direct trade ugh scenester Tumblr readymade authentic plaid pickled hashtag biodiesel. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagdiv class=&quot;w-full h-64 my-5 image-fit&quot;HTMLCloseTag HTMLOpenTagimg alt=&quot;Tinker Tailwind HTML Admin Template&quot; src=&quot;dist/images/preview-15.jpg&quot; data-action=&quot;zoom&quot; class=&quot;w-full rounded-md&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Thundercats freegan Truffaut, four loko twee Austin scenester lo-fi seitan High Life paleo quinoa cray. Schlitz butcher ethical Tumblr, pop-up DIY keytar ethnic iPhone PBR sriracha. Tonx direct trade bicycle rights gluten-free flexitarian asymmetrical. Whatever drinking vinegar PBR XOXO Bushwick gentrify. Cliche semiotics banjo retro squid Wes Anderson. Fashion axe dreamcatcher you probably haven&#039;t heard of them bicycle rights. Tote bag organic four loko ethical selfies gastropub, PBR fingerstache tattooed bicycle rights. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Ugh Portland Austin, distillery tattooed typewriter polaroid pug Banksy Neutra keffiyeh. Shoreditch mixtape wolf PBR&amp;B, tote bag dreamcatcher literally bespoke Odd Future selfies 90&#039;s master cleanse vegan. Flannel tofu deep v next level pickled, authentic Etsy Shoreditch literally swag photo booth iPhone pug semiotics banjo. Bicycle rights butcher Blue Bottle, actually DIY semiotics Banksy banjo mixtape Austin pork belly post-ironic. American Apparel gastropub hashtag, McSweeney&#039;s master cleanse occupy High Life bitters wayfarers next level bicycle rights. Wolf chia Terry Richardson, pop-up plaid kitsch ugh. Butcher +1 Carles, swag selfies Blue Bottle viral. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Keffiyeh food truck organic letterpress leggings iPhone four loko hella pour-over occupy, Wes Anderson cray post-ironic. Neutra retro fixie gastropub +1, High Life semiotics. Vinyl distillery Etsy freegan flexitarian cliche jean shorts, Schlitz wayfarers skateboard tousled irony locavore XOXO meh. Ethnic Wes Anderson McSweeney&#039;s messenger bag, mixtape XOXO slow-carb cornhole aesthetic Marfa banjo Thundercats bitters. Raw denim banjo typewriter cray Tumblr, High Life single-origin coffee. 90&#039;s Tumblr cred, Terry Richardson occupy raw denim tofu fashion axe photo booth banh mi. Trust fund locavore Helvetica, fashion axe selvage authentic Shoreditch swag selfies stumptown +1. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagdiv class=&quot;w-3/5 h-64 mr-6 float-left image-fit&quot;HTMLCloseTag HTMLOpenTagimg alt=&quot;Tinker Tailwind HTML Admin Template&quot; src=&quot;dist/images/preview-6.jpg&quot; data-action=&quot;zoom&quot; class=&quot;w-full rounded-md&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Scenester chambray slow-carb, trust fund biodiesel ugh bicycle rights cornhole. Gentrify messenger bag Truffaut tousled roof party pork belly leggings, photo booth jean shorts. Austin readymade PBR plaid chambray. Squid Echo Park pour-over, wayfarers forage whatever locavore typewriter artisan deep v four loko. Locavore occupy Neutra Pitchfork McSweeney&#039;s, wayfarers fingerstache. Actually asymmetrical drinking vinegar yr brunch biodiesel. Before they sold out sustainable readymade craft beer Portland gastropub squid Austin, roof party Thundercats chambray narwhal Bushwick pug. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagp class=&quot;mb-5&quot;HTMLCloseTag Literally typewriter chillwave, bicycle rights Carles flannel wayfarers. Biodiesel farm-to-table actually, locavore keffiyeh hella shabby chic pour-over try-hard Bushwick. Sriracha American Apparel Brooklyn, synth cray stumptown blog Bushwick +1 VHS hashtag. Wolf umami Carles Marfa, 90&#039;s food truck Cosby sweater. Fanny pack try-hard keytar pop-up readymade, master cleanse four loko trust fund polaroid salvia. Photo booth kitsch forage chambray, Carles scenester slow-carb lomo cardigan dreamcatcher. Swag asymmetrical leggings, biodiesel Tonx shabby chic ethnic master cleanse freegan. HTMLOpenTag/pHTMLCloseTag HTMLOpenTagpHTMLCloseTag Raw denim Banksy shabby chic, 8-bit salvia narwhal fashion axe. Ethical Williamsburg four loko, chia kale chips distillery Shoreditch messenger bag swag iPhone Pitchfork. Viral PBR&amp;B single-origin coffee quinoa readymade, ethical chillwave drinking vinegar gluten-free Wes Anderson kitsch Tumblr synth actually bitters. Butcher McSweeney&#039;s forage mlkshk kogi fingerstache. Selvage scenester butcher Shoreditch, Carles beard plaid disrupt DIY. Pug readymade selvage retro, Austin salvia vinyl master cleanse flexitarian deep v bicycle rights plaid Terry Richardson mlkshk pour-over. Trust fund try-hard banh mi Brooklyn, 90&#039;s Etsy kogi YOLO salvia. HTMLOpenTag/pHTMLCloseTag HTMLOpenTag/divHTMLCloseTag
                                        </code>
                                    </pre>
                                    {{-- <pre><code class="language-php">{{ $review->file_first }}</code></pre> --}}
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Full Path of File</label>
                                <pre class="line-numbers">
                                    <code class="language-php">
                                        {{ $review->file_second }}
                                    </code>
                                </pre>
                            </div>
                            <div class="mt-3">
                                <label for="regular-form-3" class="form-label">Full Path of File</label>
                                <pre class="line-numbers">
                                    <code class="language-php">
                                        {{ $review->file_third }}
                                    </code>
                                </pre>
                            </div>
                            <form action="{{ route('admin.review.update', $review->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="border-t border-gray-200 dark:border-dark-5 mt-4 pt-4">
                                    <label for="regular-form-3" class="form-label">Review</label>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <select class="form-select mb-2 sm:mr-2" name="review_status">
                                            @foreach (ReviewStatusConsts::REVIEW_STATUS_LIST as $key => $value)
                                                @if ($review->status == $key)
                                                    <option value="{{ $key }}" selected>{{ $value['title'] }}</option>
                                                @else
                                                    <option value="{{ $key }}">{{ $value['title'] }}</option>
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
