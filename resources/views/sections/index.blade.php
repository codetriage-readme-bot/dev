@extends('layouts.main')

@section('content')
    <section id="about" class="item-half">
        <div class="mdl-card about-item">
            <div class="mdl-card__title about-title">
                <h2 class="mdl-card__title-text">Про мене</h2>
            </div>
            <div class="mdl-card__supporting-text">
                <div class="about-left">
                    <img class="about-image" src="/image.jpg">
                </div>
                <div class="about-right">
                    <div class="about-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="about-links">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="item-half">
        <div class="mdl-card products-item">
            <div class="mdl-card__title products-title">
                <h2 class="mdl-card__title-text">Товари</h2>
            </div>
            <div class="mdl-card__supporting-text">
                бла-бла бла
            </div>
        </div>
    </section>
    <section id="news" class="item-full">
        <div class="mdl-card news-item">
            <div class="mdl-card__title news-title">
                <h2 class="mdl-card__title-text">Новини</h2>
            </div>
            <div class="mdl-card__supporting-text">
                бла-бла бла
            </div>
        </div>
    </section>
    @section('scripts')
        @parent
        <script>

        </script>
    @stop
@endsection