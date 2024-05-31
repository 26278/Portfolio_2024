@extends('layouts/layout')
@section('main')
    <section class="so-container">
        <h2 class="so-container__title">Super Orange projecten</h2>

        <article class="so-container__project">
            <h3 class="project__p-title">Flyer shop + indoor park</h3>
            <iframe src="/assets/pdf/Flyer-proposal_comp.pdf" frameborder="0" class="p-pdf"></iframe>
        </article>

        <article class="so-container__project">
            <h3 class="project__p-title">Catalog Spring 2022</h3>
            <iframe src="/assets/pdf/Catalogue_Spring.pdf" frameborder="0" class="p-pdf"></iframe>
        </article>

        <article class="so-container__project">
            <h3 class="project__p-title">Catalog Fall / Winter 2021</h3>
            <iframe src="/assets/pdf/Superorange_Catalogus_Fall&Winter_2021.pdf" frameborder="0" class="p-pdf"></iframe>
        </article>
    </section>
@endsection