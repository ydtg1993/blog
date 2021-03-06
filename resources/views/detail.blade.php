@extends('../layouts/common')

@section('title', 'jinono')

@section('content')
    <div class="center">
        <div id="detail_content" class="table_cell">
            <div class="theme">
                {{$info['title']}}
            </div>

            <section>
                <ul class="forum_table">
                    <li>
                        <ul class="forum_data">
                            <li>
                                <div class="author_chunk chunk">
                                    <ol>
                                        <li><p class="p_large">管理员</p></li>
                                        <li>
                                            <span class="level_tag"></span>
                                            <span class="level_tag"></span>
                                            <span class="level_tag"></span>
                                        </li>
                                        <li><a href=""><img class="avatar_x_large"
                                                            src="{{URL::asset('img/S.png')}}"></a></li>
                                        <li><a href="" class="strong_name">{{$author['name']}}</a></li>
                                        <li>
                                            <a href="" title="关注">
                                                <i class="fa fa-gratipay"></i><strong> 121</strong>
                                            </a>
                                        </li>
                                        <li><span>帖子 22</span></li>
                                        <li><p>性别 : 男</p></li>
                                    </ol>
                                </div>
                                <div class="release_content_chunk chunk">
                                    <div class="release_content">
                                        fdsfdsfdsfdsfdsfdsfd
                                    </div>
                                    <div class="release_content_bottom">
                                        <ul class="smooth_list">
                                            <li><i class="fa fa-thumbs-o-up"></i></li>
                                            <li><i class="fa fa-thumbs-o-down"></i></li>
                                            <li><i class="fa fa-gratipay"></i></li>
                                            <li><i class="fa fa-share-alt"></i></li>
                                            <li class="right"><span>2018-10-17 11:35:46</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear_both"></div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div id="comment_content">
                    <ul class="stream_list">
                        <li class="top_tag">评论区</li>
                        <li class="relay">
                            <div class="user_chunk chunk">
                                <span class="relay_tag"><i class="fa fa-comment"></i></span>
                                <a href=""><img class="avatar" src="http://www.blog.com/img/S.png"></a>
                            </div>
                            <div class="content_chunk chunk">
                                <div class="release_content">
                                    sssssssssssssssss
                                </div>
                                <div class="release_content_bottom">
                                    <ul class="smooth_list">
                                        <li><i class="fa fa-thumbs-o-up"></i></li>
                                        <li><i class="fa fa-thumbs-o-down"></i></li>
                                        <li class="right"><span>2018-10-17 11:35:46</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear_both"></div>
                        </li>
                        <li class="behavior">
                            <div class="user_chunk chunk">
                                <a href=""><img class="avatar" src="http://www.blog.com/img/S.png"></a>
                            </div>
                            <div class="content_chunk chunk">
                                <div class="message">
                                    hhhhhhhhhh
                                </div>
                            </div>
                            <div class="clear_both"></div>
                        </li>
                    </ul>
                </div>

            </section>
        </div>

        <div id="menu" class="table_cell">
            <section>
                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">类似内容</h2>
                        <ul class="forum_data">
                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}"
                                                                                  class="avatar"></a></div>
                                <div class="text_chunk chunk">
                                    <ol>
                                        <li><a href="" class="a_title_small">最新laravel分享</a></li>
                                        <li><a href="" class="name">name</a></li>
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
                        <h2 class="column_title">帖子统计</h2>
                        <ul class="forum_data">
                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>回复</strong></div>
                                <div class="statistics_chunk chunk">
                                    <p class="p_large">11</p>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><strong>点赞</strong></div>
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
    </div>
    {{--<div>
        <div id="js-animation" style="opacity: 1;background-color: #171515">
            <div>
                <canvas style="display: block; background-color: rgb(22, 22, 22);"></canvas>
            </div>
        </div>
    </div>--}}
    <script>

    </script>
@stop