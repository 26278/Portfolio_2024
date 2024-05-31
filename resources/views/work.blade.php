@extends('layouts.layout')
@section('main')
    <main class="work-main">
        <article class="work-main__article">
            <h3 class="article__header">
                Tijdens mijn MBO opleiding Media- en applicatie ontwikkelaar heb ik twee keer stage gelopen.
            </h3>
            <p class="article__body">
                Het eerste half jaar was gericht op front-end en grafisch ontwerpen en de tweede half jaar was gericht
                op back-end development, met name webshops en web administratiesystemen.<br><br>
                Na de opleiding heb ik nog een half jaar part-time gewerkt voor het bedrijf van mijn eerste stage en
                naast mijn studie en part-time job heb ik een hoop klusjes gedaan voor de lokale skatewinkel. Hiervoor
                heb ik de webshop bijgehouden en projecten gedaan in vormgeving zoals het maken van flyers.
            </p>
            <p class="article__cta button orange" onclick="location.href='#workexperience'">
                Bekijk mijn werkervaringen
            </p>
        </article>
        <article class="work-main__article">
            <h3 class="article__header">
                Naast de stages heb ik ook veel projecten gedaan op het MBO en het HBO.
            </h3>
            <p class="article__body">
                Toen ik de basis van programmeren onder de knie kreeg werd ik erg enthousiast en bouwde ik verschillende
                websites, webshops, commandline-applicaties en apps voor de smartphone.<br><br>

                Hierdoor bouwde ik kennis op van HTML, CSS, Javascript, PHP, SQL, Java, Python en Dart. Hierbij leerde ik
                ook gebruik maken van frameworks zoals Laravel, React, JavaFX, Flutter en JQuery.
            </p>
            <p class="article__cta button orange" onclick="location.href='#projects'">Bekijk mijn projecten</p>
        </article>

        <h2 class="work-main__header">Mijn werkervaringen</h2>

        <section class="work-main__work-experiences" id="workexperience">
            @foreach($ooWorkExperiences as $oWorkExperience)
                <article class="work-experiences__work-experience">
                    <div class="work-experience__we-header">
                        <h4 class="we-header__title">{{$oWorkExperience->title}}@if($oWorkExperience->employee) bij @else voor @endif {{ $oWorkExperience->company }}</h4>
                        <img src="/assets/images/{{$oWorkExperience->image}}" alt="" class="we-header__img">
                    </div>
                    <p class="work-experience__we-text">
                        {{ $oWorkExperience->header_text }}
                    </p>
                </article>
            @endforeach
        </section>

        <h2 class="work-main__header">Mijn projecten</h2>

        <section class="work-main__projects" id="projects">
            @foreach($ooProjects as $oProject)
                <article class="projects__project">
                    <figure class="project__p-figure">
                        <img src="/assets/images/{{ $oProject->image }}" alt="{{$oProject->title}}" class="p-figure__p-img">
                    </figure>
                    <h4 class="project__p-title">{{ $oProject->title }}</h4>
                    <h5 class="project__p-subtitle">
                        {{ $oProject->subtitle }}
                    </h5>
                    {{--                    <p>--}}
                    {{--                        @foreach($oProject->programmingLanguages as $oProgrammingLanguage)--}}
                    {{--                            {{$oProgrammingLanguage->language}}--}}
                    {{--                        @endforeach--}}
                    {{--                    </p>--}}
                    <p class="project__p-button button dark-green openModalButton">Zie details</p>
                </article>
            @endforeach
        </section>
        <div class="modal-back" id="modalBackground">
            @foreach($ooProjects as $oProject)
                <article class="modal-back__modal-box">
                    <svg class="modal-box__close-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                        <path d="M 7 4 C 6.744125 4 6.4879687 4.0974687 6.2929688 4.2929688 L 4.2929688 6.2929688 C 3.9019687 6.6839688 3.9019687 7.3170313 4.2929688 7.7070312 L 11.585938 15 L 4.2929688 22.292969 C 3.9019687 22.683969 3.9019687 23.317031 4.2929688 23.707031 L 6.2929688 25.707031 C 6.6839688 26.098031 7.3170313 26.098031 7.7070312 25.707031 L 15 18.414062 L 22.292969 25.707031 C 22.682969 26.098031 23.317031 26.098031 23.707031 25.707031 L 25.707031 23.707031 C 26.098031 23.316031 26.098031 22.682969 25.707031 22.292969 L 18.414062 15 L 25.707031 7.7070312 C 26.098031 7.3170312 26.098031 6.6829688 25.707031 6.2929688 L 23.707031 4.2929688 C 23.316031 3.9019687 22.682969 3.9019687 22.292969 4.2929688 L 15 11.585938 L 7.7070312 4.2929688 C 7.5115312 4.0974687 7.255875 4 7 4 z" />
                    </svg>
                    <h2 class="modal-box__project-title">{{ $oProject->title }}</h2>
                    <p class="modal-box__project-subtitle">{{ $oProject->subtitle }}</p>
                    <p class="modal-box__project-type">{{ $oProject->type }}</p>
                    <img src="/assets/images/{{ $oProject->image }}" alt="{{$oProject->title}}" class="modal-box__project-img">
                    <p class="modal-box__project-desc">{{ $oProject->main_text }}</p>
                    @if($oProject->github)
                        <a href="{{ $oProject->github }}" target="_blank" class="modal-box__github-link button orange">Bekijk op GitHub</a>
                    @endif
                    @if($oProject->extra_link)
                        <a href="{{ $oProject->extra_link }}" target="_blank" class="modal-box__github-link button orange">Bekijk meer</a>
                    @endif
                </article>
            @endforeach
        </div>
    </main>
@endsection

@section('js')
    <script src="{{ asset('js/work.js') }}"></script>
@endsection