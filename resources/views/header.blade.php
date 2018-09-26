@extends('layout')

@section('header')
    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!--main menu starts-->

                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="" class="navbar-brand"><span class="logo">Event_Hub</span></a>
                                <!--edit site name here-->
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a data-toggle="modal" data-target="#myModal">authorization</a></li>
                                        <li><a data-toggle="modal" data-target="#myModal2">registration</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!--main menu ends-->
            </div>
        </div>
    </header>

    {{--@endsection--}}

    {{--@section('authorization')--}}
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Login form</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <input type="password" class="form-control" id="pws" placeholder="Password">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Log in</button>
                </div>
            </div>
        </div>
    </div>
    {{--@endsection--}}

    {{--@section('registration')--}}

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Registration form</h4>
                </div>
                <div class="modal-body">
                    <form class="pb-modalreglog-form-reg">
                        <div class="form-group">
                            <div id="pb-modalreglog-progressbar"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-earphone"></span></span>
                                <input type="text" class="form-control" id="inputTelephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span
                                            class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" id="inputPws" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm password</label>
                            <div class="input-group pb-modalreglog-input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" id="inputConfirmPws"
                                       placeholder="Confirm Password">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Sign up</button>
                </div>
            </div>
        </div>
    </div>

    {{--<script>--}}
    {{--$(function () {--}}
    {{--var progress = $("#pb-modalreglog-progressbar").shieldProgressBar({--}}
    {{--value: 0--}}
    {{--}).swidget();--}}

    {{--$('#inputEmail').change(function () {--}}
    {{--if ($('#inputEmail').val().length > 1) {--}}
    {{--progress.value(progress.value() + 15);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 15);--}}
    {{--}--}}
    {{--});--}}

    {{--$('#inputPws').change(function () {--}}
    {{--if ($('#inputPws').val().length > 1) {--}}
    {{--progress.value(progress.value() + 15);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 15);--}}
    {{--}--}}
    {{--});--}}

    {{--$('#inputConfirmPws').change(function () {--}}
    {{--if ($('#inputConfirmPws').val().length > 1) {--}}
    {{--progress.value(progress.value() + 15);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 15);--}}
    {{--}--}}
    {{--});--}}

    {{--$('#countries').change(function () {--}}
    {{--if ($('#countries').val().length > 1) {--}}
    {{--progress.value(progress.value() + 15);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 15);--}}
    {{--}--}}
    {{--});--}}

    {{--$('#age').change(function () {--}}
    {{--if ($('#age').val().length > 1) {--}}
    {{--progress.value(progress.value() + 15);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 15);--}}
    {{--}--}}
    {{--});--}}

    {{--$('#ch').change(function () {--}}
    {{--if ($('input[name="chs"]:checked').length > 0) {--}}
    {{--progress.value(progress.value() + 25);--}}
    {{--} else {--}}
    {{--progress.value(progress.value() - 25);--}}
    {{--}--}}
    {{--});--}}

    {{--$("#age").shieldMaskedTextBox({--}}
    {{--enabled: true,--}}
    {{--mask: "00/00/0000",--}}
    {{--value: "19/03/1032"--}}
    {{--});--}}
    {{--})--}}
    {{--</script>--}}
@endsection