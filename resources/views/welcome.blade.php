@extends('layouts.app')

@section('styles')
    <style>
        #particles-js{
            width: 100%;
            height: 250px;
            opacity: 0.8;
        }
        .background{
            position: absolute;
            z-index: -1;
            width: 100%;
        }
        img{
            height: 250px;
            width: inherit;
            opacity: 0.2;
        }
        .section{
            position: absolute;
            width: 100%;
        }
        .jumbotron{
            background: rgba(240, 240, 240, 0.4);
            width: 100%;
            height: 250px;
            text-align: center;
            padding-top: 30px;
            z-index: 1;
        }
        .display-4{
            font-family: Corbel;
        }
        hr.line{
            border-top: 1px solid black;
        }
        a{
            display: block;
            position: relative;
            z-index: 9999;
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid p-0">
        <section>
            <div class="section">
                <div class="jumbotron">
                    <div class="content">
                        <h4 class="display-4">SikkhaDeekkha</h4>
                        <h6 class="text-dark"><i>World Class Online Education Platform First Ever In Bangladesh!</i></h6>
                        <hr class="line">
                        <a href="{{ route('register') }}" class="btn btn-success btn-lg" style="opacity: 1; z-index: 9999">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                    </div>
                </div>
            </div>
            <div class="background">
                <img src="{{ asset('images/blackhole_spacetime_curve.png') }}" alt="">
            </div>
            <div id="particles-js"></div>
        </section>
        <section style="background-color: azure">
            <div class="pt-5">
                <ul class="list-group-horizontal d-flex justify-content-center list-unstyled">
                    <li class="list-inline-item p-3">
                        <div>
                            <h5><strong>LEARN FROM EXPERTS</strong></h5>
                        </div>
                        <div class="img-container">
                            <iframe id="learn" src="{{ asset('icons/noun_experts_3201786.svg') }}" width="200px" height="225px" frameborder="0" style="filter: invert(20%)"></iframe>
                        </div>
                    </li>
                    <li class="list-inline-item p-3">
                        <div>
                            <h5><strong>FIND QUALITY CONTENTS</strong></h5>
                        </div>
                        <div class="img-container">
                            <iframe id="content" src="{{ asset('icons/noun_High Quality Content_1563734.svg') }}" width="200px" height="225px" frameborder="0" style="filter: invert(20%)"></iframe>
                        </div>
                    </li>
                    <li class="list-inline-item p-3">
                        <div>
                            <h5><strong>SHARPEN YOUR SKILLS</strong></h5>
                        </div>
                        <div class="img-container">
                            <iframe id="skill" src="{{ asset('icons/noun_skill_2170300.svg') }}" width="200px" height="225px" frameborder="0" style="filter: invert(20%)"></iframe>
                        </div>
                    </li>
                    <li class="list-inline-item p-3">
                        <div>
                            <h5><strong>BE INDUSTRY READY</strong></h5>
                        </div>
                        <div class="img-container">
                            <iframe id="ready" src="{{ asset('icons/noun_technical expert_2439432.svg') }}" width="200px" height="225px" frameborder="0" style="filter: invert(20%)"></iframe>
                        </div>
                    </li>
                    <li class="list-inline-item p-3">
                        <div>
                            <h5><strong>COMPETE WITH WORLD</strong></h5>
                        </div>
                        <div class="img-container">
                            <iframe id="world" src="{{ asset('icons/noun_Globe_1412361.svg') }}" width="200px" height="225px" frameborder="0" style="filter: invert(20%)" class="pl-3"></iframe>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        particlesJS();
    </script>
@endsection
