@extends('layouts.clientLayout')

@section('content')

<main>

    <!-- Navigation Bar -->
    <section class="navigation-bar">
        <div class="navigation-bar__container">
            <div class="navigation-bar__category">
                <ul class="navigation-bar__category-list clearfix">
                    <li class="navigation-bar__category-list-item"><a href="/information">Information</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/intermezzo">Intermezzo</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tips-and-trick">Tips & Trick</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/hardware">Hardware</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/software">Software</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Tutorials</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Event</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">UKM</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Announcement</a></li>
                    <li class="navigation-bar__category-list-item"><a href="/tutorials">Akademik</a></li>
                </ul>
            </div>
            <div class="navigation-bar__category-collapse-button-container">
                <a href="javascript:void(0)" class="navigation-bar__category-collapse-button">
                    <span class="navigation-bar__collapse-button-icon">
                        <div class="navigation-bar__collapse-button-icon__middle"></div>
                    </span>
                    <span class="navigation-bar__collapse-button-text">Pilih Kategori</span>
                </a>
            </div>
            <div class="navigation-bar__search">
                <form action="">
                    <div class="navigation-bar__search-content">
                        <input type="text" name="search" placeholder="Search" class="navigation-bar__search-input">
                    </div>
                </form>
            </div>
        </div>
    </section>


    <!-- Breadcrumbs -->


    <!-- Post List Item -->


    <!-- Pagination -->

</main>

@endsection

@section('additional-scripts')

<script src="{{ mix('js/navigation-bar.js') }}"></script>

@endsection
