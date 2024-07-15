<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Meals on Wheels</title>

    <!-- CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @section('title')
        Welcome
    @endsection

    @extends('layouts.app')

    @section('content')
        <main>

            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">               
                    <img src="{{ asset('images/img1.jpg') }}">
                    <div class="text">Provide <span style="color: var(--secondary-color);">Healthy</span> Meals</div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('images/img2.jpg') }}">
                    <div class="text">Meals <span style="color: var(--accent-color);">Packed</span> with <span
                            style="color: var(--accent-color);">Care</span></div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('images/img3.jpg') }}">
                    <div class="text"><span style="color: #FF7F7F;">Volunteer</span> to <span
                            style="color: #FF7F7F;">Make</span> a <span style="color: #FF7F7F;">Difference</span></div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('images/img4.jpg') }}">
                    <div class="text">Deliver Meals with <span style="color: var(--primary-color);">Dedication</span>
                    </div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)"></a>
                <a class="next" onclick="plusSlides(1)"></a>
            </div>

            <!-- The dots/circles -->
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>


            <div class="home-content">
                <div class="column">
                    <h2>Join Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                    </p>
                </div>
                <div class="column">
                    <h2>Our Mission</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                    </p>
                </div>
            </div>

            <div class="home-image">
                <img src="{{ asset('images/img5.jpg') }}" alt="Descriptive alt text">
                <a href="{{ route('donate') }}" class="donate-link">Donate Now!</a>
            </div>

            <div class="volunteer-section">
                <h2 class="volunteer-title">Our Volunteers</h2>
                <p class="volunteer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quam nulla porttitor massa id neque aliquam vestibulum.
                </p>
                <div class="volunteer-testimonials">
                    <div class="volunteer-testimonial">
                        <img src="{{ asset('images/img6.jpg') }}" alt="Volunteer 1">
                        <blockquote>“meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow 
                            meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow ”</blockquote>
                        <p class="volunteer-name">Luna Moon, CAT Co.</p>
                    </div>
                    <div class="volunteer-testimonial">
                        <img src="{{ asset('images/img7.jpg') }}" alt="Volunteer 2">
                        <blockquote>“meow meow meow”</blockquote>
                        <p class="volunteer-name">Noodle Soup, CAT Co.</p>
                    </div>
                    <div class="volunteer-testimonial">
                        <img src="{{ asset('images/img8.jpg') }}" alt="Volunteer 3">
                        <blockquote>“bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw 
                            bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw bawaw ”</blockquote>
                        <p class="volunteer-name">Cara Girl, DOG Co.</p>
                    </div>
                </div>
            </div>

        </main>

        <script src="{{ asset('js/home.js') }}"></script>

    @endsection

</body>

</html>
