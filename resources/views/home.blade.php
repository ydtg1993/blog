@extends('../layouts/common')

@section('title', 'jinono')

@section('content')
    <style>
        #head {
            padding: 15px 0 40px 0;
            margin: 0 auto;
            background-color: #353c41;
        }

        #logo_box {
            display: block;
            float: left;
        }

        #login {
            display: block;
            width: 240px;
            margin-top: 0;
            float: right;
        }

        #nav {
            font-family: Helvetica, Arial, sans-serif;
            top: -45px;
            position: relative;
        }

        .nav_title {
            padding-bottom: 64px;
        }

        .nav_title > li {
            display: inline-block;
        }

        .nav_title > li > a {
            background: rgba(255, 255, 255, 0.04);
            color: rgba(255, 255, 255, 0.7);
            padding: 9px 25px;
            border-radius: 2px 2px 0px 0px;
        }

        .nav_title > li > a:hover {
            background: #ffffff;
            color: #353c41
        }

        .nav_list {
            position: absolute;
            line-height: 15px;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            z-index: 1000;
            background: #ffffff;
            border-color: #ffffff;
        }

        .nav_list li > a {
            font-size: 13px;
            padding: 12px 18px 12px;
            float: left;
            color: rgba(53, 60, 65, 0.6);
        }

        .nav_list li > a:hover {
            color: #353c41
        }

        #content .forum_table {
            display: table;
            table-layout: auto;
            position: relative;
            border-collapse: separate;
            border-spacing: 0;
            list-style: none;
            padding: 0;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
            margin: 0 0 15px 0;
        }

        #content .forum_data > li {
            width: 100%;
            position: relative;
            border-width: 0 0 1px 0;
            border-color: #ebebeb;
        }

        #content .forum_data > li:nth-child(even) {
            background: #fafafa;
        }

        .column_title {
            margin: 0;
            font-size: 13px;
            font-weight: 500;
            text-transform: uppercase;
            padding: 12px 15px;
            background: #33649b;
            color: #ffffff;
            border-radius: 2px 2px 0px 0px;
        }

        .category_chunk {
            padding: 15px 10px 15px 15px;
            min-width: 55px;
        }

        .num_chunk {
            padding: 5px 0 0 0;
            min-width: 130px;
            text-align: center;
        }

        .theme_chunk {
            width: 450px;
            padding: 15px 10px 5px 20px;
        }

        .author_chunk {
            padding: 15px 15px 0 15px;
        }

        .author_chunk > ol {
            float: left;
            margin-left: 15px;
            width: 100px;
            line-height: 15px;
        }

        .category_chunk > span {
            color: #fff;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            display: inline-block;
            text-align: center;
            font-size: 18px;
            background: #dbdbdb
        }

        #menu{
            padding-left: 20px;
        }

        #menu section {
            background-color: #ffffff;
            width: 319px;
        }

        #menu .forum_data{
            padding: 10px;
        }

        .text_chunk{
            width: 180px;
        }

        .forum_data_item{
            border-width: 0 0 1px 0;
            border-style: solid;
            border-color: #ebebeb;
        }

        .forum_data_item:last-child{
            border-bottom: 0;
        }

        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            [class*="center"] {
                display: none;
                width: 100%;
            }
        }
    </style>

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
                                <p class="tip">5</p>
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