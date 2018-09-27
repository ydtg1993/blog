@extends('../layouts/common')

@section('title', 'jinono')

@section('content')
    <style>
        #head {
            padding: 0 0 40px 0;
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
            margin-top: 15px;
            float: right;
        }

        .clear_both {
            clear: both;
        }

        #nav {
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
            padding: 12px 18px 8px;
            float: left;
            color: rgba(53, 60, 65, 0.6);
        }

        .nav_list li > a:hover {
            color: #353c41
        }

        #content section {
            width: 70%;
        }

        #content .forum_table {
            width: 100%;
            display: table;
            table-layout: auto;
            position: relative;
            border-collapse: separate;
            border-spacing: 0;
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
            background: #ffffff;
            border: 1px solid #e0e0e0;
            box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.1);
            border-radius: 3px;
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
            padding: 15px 10px 15px 20px;
            min-width: 55px;
        }

        .theme_chunk{
            min-width: 380px;
        }

        .theme_chunk a{
            color: #33649b;
            font-size: 18px;
            line-height: 20px;
            word-wrap: break-word;
            font-weight: 400;
            margin-top: 10px;
            display: block;
        }

        .chunk{
            float: left;
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

        .p_large{
            color: #353c41;
            font-size: 22px;
            font-weight: 300;
            line-height: 1.3;
        }

        .p_default{
            text-align: center;
            color: #8d9aa6;
        }

        .cut_text{
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .center {
            max-width: 1210px;
            min-width: 650px;
            margin: 0 auto;
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

    <div id="content">
        <div class="center">
            <section>
                <ul class="forum_table">
                    <li>
                        <h2 class="column_title">最新更新</h2>
                        <ul class="forum_data">
                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="theme_chunk chunk">
                                    <a href="#" class="cut_text">Java设计模式精讲</a>
                                    <p class="cut_text">细说java 12种设计模式</p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="p_large">3,11</p>
                                    <p class="p_default">帖子</p>
                                </div>
                                <div class="author_chunk chunk"></div>
                                <div class="clear_both"></div>
                            </li>

                            <li>
                                <div class="category_chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="description_chunk"></div>
                                <div class="num_chunk"></div>
                                <div class="author_chunk"></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>

            <div id="menu"></div>
        </div>
    </div>

    <div id="boot"></div>
    <script>

    </script>
@stop