@extends('layouts.app')


@section('banner')
    <!--Banner area starts-->
    <style>
        .navbar {
            background: none !important;
        }
    </style>
    <div class="banner-area" id="home">
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="intro animate-scale">
                                    <h1>Welcome to Event_Hub</h1>

                                    <h1 class="ah-headline">

                                        <span class="ah-words-wrapper">
                                            {{--<b class="is-visible">сыграем в футбол</b>--}}
                                            <!--edit the designation if you are in different profession-->
                                        {{--<b>гоу тусить</b> --}}
                                        {{--<b>пойдем бухать?</b>--}}
                                        <!--edit the designation if you are in different profession-->
                                        </span>
                                    </h1>
                                    <div class="banner-btn">
                                        <a href="{{route('events.index')}}">show events</a>
                                    </div>

                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Banner area ends-->
    <!--about area starts-->

    <div class="about-area section-padding" id="about">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>About us</h2>
                        <p class="line-one"></p>

                    </div>
                </div>
                <p style="font-size: 15px; text-indent: 20px; ">Этот сайт предоставляет возможность участвовать в мероприятиях, которые происходят в твоем городе.
                С нашей помощью вы не пропустите ни одного важного события и сможете посетить их узнав все необходимые
                данные о событие благодаря нашему сайту. На нашем сайте вы найдете информацию о месте проведения, время
                проведения, название, описание, участниках нужного вам мероприятия. Вы так же можете присоединиться к
                событию используя для этого логически понятный интерфейс нашего сайта. Все мероприятия отмечены на карте
                    для лучшего понимания где происходит это мероприятие.</p>
                <p style="font-size: 15px; margin-bottom: 30px; text-indent: 20px; ">Так же вы сами можете стать организатором любого мероприятия создав его с помощью нашего приложения.
                Все что вам понадобится для этого – это пройти простую регистрацию и нажать на кнопку «добавить мероприятие».
                Вы можете указать все необходимые данные, которые считаете нужными в описание к вашему мероприятию.</p>


            </div>

        </div>
    </div>

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p>&copy; EVENT_HUB</p> <!--edit here-->
                </div>
            </div>
        </div>
    </div>

@endsection
