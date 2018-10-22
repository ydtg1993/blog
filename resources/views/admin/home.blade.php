@extends('../layouts/common')

@section('title', 'jinono')

@section('content')

    <div class="center">
        <div id="content" class="table_cell">
            <h1>
                jinono
            </h1>
            <span>
                论坛
            </span>
            <section>
                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">推荐分享</h2>
                        <ul class="forum_data">
                            @foreach ($course_list as $data)
                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="theme_chunk chunk">
                                    <a href="{{url('detail/'.$data['secret_key'])}}" class="a_title letter_color_skip">{{$data['title']}}</a>
                                    <p class="letter_color_default">{{$data['description']}}</p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="p_large">{{$data['relay']}}</p>
                                    <p class="letter_color_default">回帖</p>
                                </div>
                                <div class="author_chunk chunk">
                                    <div class="chunk">
                                        <a href=""><img class="avatar" src="{{URL::asset('img/S.png')}}"></a>
                                    </div>
                                    <ol>
                                        <li><a href="" class="letter_color_skip">{{$data['name']}}</a></li>
                                        <li><span>{{\App\Libs\Helper\Func::hourglassTime($data['create_at'])}}</span></li>
                                    </ol>
                                </div>
                                <div class="clear_both"></div>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </section>

            <div id="menu"></div>
        </div>

        <div id="menu" class="table_cell">
            <section>
                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">最新更新</h2>
                        <ul class="forum_data">
                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}"
                                                                                  class="avatar"></a></div>
                                <div class="text_chunk chunk">
                                    <ol>
                                        <li><a href="" class="a_title_small letter_color_skip">最新laravel分享</a></li>
                                        <li><a href="" class="letter_color_skip">name</a></li>
                                        <li><span>2 分钟前</span></li>
                                    </ol>
                                </div>
                                <div class="tip_chunk chunk"><p class="tip">15</p></div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}"
                                                                                  class="avatar"></a></div>
                                <div class="clear_both"></div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">会员统计</h2>
                        <ul class="forum_data">
                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>会员总数</strong></div>
                                <div class="statistics_chunk chunk">
                                    <p class="p_large">122</p>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>活动中&nbsp;&nbsp;&nbsp;&nbsp;</strong></div>
                                <div class="statistics_chunk chunk">
                                    <p class="p_large">12</p>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}"
                                                                                  class="avatar_large"></a></div>
                                <div class="member_text_chunk chunk">
                                    <ol>
                                        <li>最新成员<a href="" class="name">name</a>加入</li>
                                        <li><span>2 分钟前</span></li>
                                    </ol>
                                </div>
                                <div class="clear_both"></div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">论坛统计</h2>
                        <ul class="forum_data">
                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>分享资源</strong></div>
                                <div class="statistics_chunk chunk">
                                    <p class="p_large">658</p>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>总帖子数</strong></div>
                                <div class="statistics_chunk chunk">
                                    <p class="p_large">45</p>
                                </div>
                                <div class="clear_both"></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>

            <div id="menu"></div>
        </div>

        <div id="boot"></div>
    </div>

@stop