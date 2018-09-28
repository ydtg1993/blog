@extends('../layouts/common')

@section('title', 'jinono')

@section('content')

    <div id="head">
        <div class="center">
            <div id="logo_box">
                <a href="http://www.jinono.com">
                    <img src="{{URL::asset('img/jinono.png')}}">
                </a>
            </div>

            <ul id="login">
                <li><a href="#"><img src="{{URL::asset('img/github.png')}}"></a></li>
            </ul>
            <div class="clear_both"></div>
        </div>
    </div>

    <div id="nav">
        <div class="center">
            <ul class="nav_title">
                <li><a href="javascript:void(0);">分享资源</a></li>
                <li><a href="javascript:void(0);">技术帖子</a></li>
                <li><a href="javascript:void(0);">关于网站</a></li>
            </ul>
            <ul class="nav_list">
                <div class="center">
                    <li><a href="javascript:void(0);">前端</a></li>
                    <li><a href="javascript:void(0);">PHP</a></li>
                    <li><a href="javascript:void(0);">JAVA</a></li>
                    <li><a href="javascript:void(0);">IOS</a></li>
                </div>
            </ul>
        </div>
    </div>

    <div class="center">

        <div id="content" class="table_cell">
            <section>
                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">最新更新</h2>
                        <ul class="forum_data">
                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="theme_chunk chunk">
                                    <a href="#" class="a_title">Java设计模式精讲</a>
                                    <p>细说java 12种设计模式</p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="p_large">3,11</p>
                                    <p class="p_default">帖子</p>
                                </div>
                                <div class="author_chunk chunk">
                                    <div class="chunk">
                                        <a href=""><img class="avatar" src="{{URL::asset('img/S.png')}}"></a>
                                    </div>
                                    <ol>
                                        <li><a href="" class="name">name</a></li>
                                        <li><span>2 分钟前</span></li>
                                    </ol>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="description_chunk chunk"></div>
                                <div class="num_chunk chunk"></div>
                                <div class="author_chunk chunk"></div>
                                <div class="clear_both"></div>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">最新更新</h2>
                        <ul class="forum_data">
                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="theme_chunk chunk">
                                    <a href="#" class="a_title">Java设计模式精讲</a>
                                    <p>细说java 12种设计模式</p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="p_large">3,11</p>
                                    <p class="p_default">帖子</p>
                                </div>
                                <div class="author_chunk chunk">
                                    <div class="chunk">
                                        <a href=""><img class="avatar" src="{{URL::asset('img/S.png')}}"></a>
                                    </div>
                                    <ol>
                                        <li><a href="">name</a></li>
                                        <li><span>2 分钟前</span></li>
                                    </ol>
                                </div>
                                <div class="clear_both"></div>
                            </li>

                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="description_chunk chunk"></div>
                                <div class="num_chunk chunk"></div>
                                <div class="author_chunk chunk"></div>
                                <div class="clear_both"></div>
                            </li>
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
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}" class="avatar"></a></div>
                                <div class="text_chunk chunk">
                                    <ol>
                                        <li><a href="" class="a_title_small">最新laravel分享</a></li>
                                        <li><a href="" class="name">name</a></li>
                                        <li><span>2 分钟前</span></li>
                                    </ol>
                                </div>
                                <div class="tip_chunk chunk"><p class="tip">5</p></div>
                                <div class="clear_both"></div>
                            </li>

                            <li class="forum_data_item">
                                <div class="category_chunk chunk"><a href=""><img src="{{URL::asset('img/S.png')}}" class="avatar"></a></div>
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
    <script>

    </script>
@stop