@extends('layouts.layout')

@section('header')
    <div class="home-header__ham">
        <div class="hamburger-menu" id="nav">
            <svg class="ham hamRotate ham" id="navIcon" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                <path
                    class="line top"
                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path
                    class="line middle"
                    d="m 30,50 h 40" />
                <path
                    class="line bottom"
                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </div>
    </div>
    <header class="home-header">
        <h1 class="home-header__title">Portfolio website</h1>
        <div class="home-header__rectangle"></div>
        <figure class="home-header__image-container">
            <div class="image-container__left-text">
                <p class="left-text__p">
                    young professional developer<br>
                    amateur skateboarder
                </p>
            </div>
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Profiel foto Jochem" class="image-container__img">
            <div class="image-container__img-gradient">
                <h2 class="img-gradient__name">Jochem de Wit</h2>
                <p class="img-gradient__title">
                    Backend developer<br>
                    & graphic designer
                </p>
            </div>
        </figure>
    </header>
@endsection

@section('main')
    <main class="home-main">
        <div class="home-main__intro-container">
            <p class="intro-container__text">
            <span>Enthousiasme en motivatie zorgen ervoor dat ik elke dag nieuwe vaardigheden onder de knie krijg op het
                gebied van backend development.</span>
                <br><br>
                Na het afronden van de mbo 4: Media & Applicatie ontwikkelaar en het behalen van mijn propedeuse voor hbo
                Informatica streef ik ernaar om zelfstandiger software te kunnen ontwikkelen en ben ik op zoek naar een
                nieuwe uitdaging.
            </p>
            <p class="intro-container__read-more" onclick="location.href='{{ url('/over-mij') }}'">Lees meer...</p>
            <p class="intro-container__portfolio button orange" onclick="location.href='{{ url('/mijn-werk') }}'">Bekijk mijn werk</p>
            <div class="intro-container__rectangle"></div>
        </div>
    </main>
@endsection