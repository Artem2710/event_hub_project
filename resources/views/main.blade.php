@extends('layouts.app')


@section('banner')
    <!--Banner area starts-->

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
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto consequuntur cum deleniti est
                ex laborum magni molestias nesciunt, nobis provident quasi quia ratione rem, sapiente ullam ut. At atque
                autem corporis, deserunt dolores dolorum eos error ex explicabo harum laudantium magni maxime minus
                molestias nam natus nobis odio praesentium quasi quia quidem quo quod reprehenderit sed similique soluta
                veritatis. Asperiores corporis dignissimos doloremque harum minima placeat porro rem, repudiandae sed
                vitae. Alias aliquam amet atque aut culpa cumque dolores ea eligendi enim eos est exercitationem
                expedita in iure nam omnis, praesentium quas quia quo rem sapiente sit soluta, tempore totam ullam
                veritatis voluptate! Atque consequuntur deleniti distinctio ducimus ipsa minus optio pariatur
                praesentium quaerat quia sed, sint. Architecto, consequatur dicta dolor dolorum eius exercitationem,
                expedita hic illum impedit iure maxime natus nemo, nisi numquam odit officia officiis quo quod
                reiciendis sapiente sequi temporibus voluptatum? Blanditiis in iure molestias nostrum obcaecati quisquam
                unde. Animi at atque dolorum eveniet provident sint tempora. Ad adipisci aliquam cupiditate dignissimos
                dolor, eius eligendi enim est eveniet expedita fugiat hic incidunt iste iure magnam magni, nam
                perspiciatis porro quo recusandae reiciendis reprehenderit similique soluta unde vero. Ab adipisci
                asperiores eos et eum, expedita fugiat illum iste iure libero minima neque provident quaerat quisquam
                sequi tenetur voluptatem. Accusantium ad blanditiis culpa, distinctio dolor est fugiat illum incidunt
                iusto nostrum, perspiciatis quis sequi ullam vero voluptatem. Adipisci animi possimus qui quis
                reiciendis. A, animi aperiam asperiores, cum doloremque eos excepturi harum iste magnam obcaecati
                possimus rerum saepe?

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
