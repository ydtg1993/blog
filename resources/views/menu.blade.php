@extends('../layouts/common')

@section('title', 'jinono')

@section('content')
    <div class="center">
        <div id="menu_content">
            <h1>
                jinono
            </h1>
            <span>
                论坛
            </span>
            <section>
                <ul class="forum_table">
                    <li>
                        <div class="page_bar">
                            <ul class="page_list">
                                <li class="page_button tag_hover_color">1</li>
                                <li class="page_button">2</li>
                                <li class="page_button">3</li>
                                <li class="page_button">4</li>
                                <li class="page_button">5</li>
                            </ul>
                        </div>
                        <ul class="forum_data">
                            <li>
                                <div class="category_chunk chunk"><span><i class="fa fa-comments"></i></span></div>
                                <div class="theme_chunk chunk">
                                    <a href="{{url('detail')}}" class="a_title letter_color_skip">Java设计模式精讲</a>
                                    <p class="letter_color_default chunk">细说java 12种设计模式
                                    <ul class="ips_tag_bar">
                                        <li class="chunk"><a href="" class="ips_tag"><span>java</span></a></li>
                                        <li class="chunk"><a href="" class="ips_tag"><span>基础</span></a></li>
                                    </ul>
                                    </p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="letter_color_black">13 回帖</p>
                                    <p class="letter_color_default">12 观看</p>
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
                                <div class="theme_chunk chunk">
                                    <a href="{{url('detail')}}" class="a_title letter_color_skip">Java设计模式精讲</a>
                                    <p class="letter_color_default">细说java 12种设计模式</p>
                                </div>
                                <div class="num_chunk chunk">
                                    <p class="letter_color_black">13 回帖</p>
                                    <p class="letter_color_default">12 观看</p>
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
                        </ul>
                    </li>
                </ul>
            </section>

            <div id="menu"></div>
        </div>

    </div>
    <script>

    </script>
@stop