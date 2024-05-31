@extends('layouts.layout')
@section('main')
    <main class="contact-main">
        <div class="contact-main__title-box">
            <h2>Mijn visitekaartje</h2>
            <p>
                Neem gerust contact op voor vragen of voor mijn CV.
            </p>
        </div>
        <section class="contact-main__business-card">
            <div class="business-card__center-box">
                <h2 class="center-box__title">Jochem de Wit</h2>
                <p class="center-box__subtitle">
                    Back-end developer<br>
                    Graphic designer
                </p>
                <a class="center-box__mail" target="_blank" href="mailto:info@jochemdewit.nl">info@jochemdewit.nl</a>
                <p class="center-box__subtitle">Den Haag, Nederland</p>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script src="{{ asset('js/contact.js') }}"></script>
@endsection