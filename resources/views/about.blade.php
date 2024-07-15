<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Meals on Wheels</title>
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Include Boxicons library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">
</head>
<body>
    @extends('layouts.app')

    @section('title')
    About Us
    @endsection

    @section('content')
    <main>
        <section class="about-header" style="margin-top: 82px;">
            <div class="about-text">
                <h1>About <span>Us</span></h1>
                <p>Meals on Wheels is a charitable organization committed to delivering nutritious meals to elderly and individuals in need. Our services aim to improve health and wellbeing through dedicated support and care.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/about_us.jpg') }}" alt="About Us Image">
            </div>
        </section>

        <section class="our-mission">
            <h2>Our <span>Mission</span></h2>
            <p>Our mission is to deliver nutritious meals to homebound seniors and individuals in need. We aim to enhance the health and well-being of those we serve through compassionate care and support.</p>
            <div class="mission-icons">
                <div class="icon-box">
                    <i class='bx bxs-food-menu'></i>
                    <span>Nutritious Meals</span>
                </div>
                <div class="icon-box">
                    <i class='bx bxs-group'></i>
                    <span>Community Support</span>
                </div>
                <div class="icon-box">
                    <i class='bx bxs-user'></i>
                    <span>Volunteer Work</span>
                </div>
                <div class="icon-box">
                    <i class='bx bxs-heart'></i>
                    <span>Compassionate Care</span>
                </div>
                <div class="icon-box">
                    <i class='bx bxs-home'></i>
                    <span>Safe Environment</span>
                </div>
                <div class="icon-box">
                    <i class='bx bxs-rocket'></i>
                    <span>Innovation</span>
                </div>
            </div>
        </section>

        <section class="team" style="margin-bottom: 180px;">
            <h2>Meet Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="{{ asset('images/member1.jpg') }}" alt="Team Member 1">
                    <h3>Joewen Obillo</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member2.jpg') }}" alt="Team Member 2">
                    <h3>Nichole Orador</h3>
                    <p>Operations Manager</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member3.jpg') }}" alt="Team Member 3">
                    <h3>Jerra Javier</h3>
                    <p>Head Chef</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member4.jpg') }}" alt="Team Member 4">
                    <h3>Jhet Dizon</h3>
                    <p>Volunteer Coordinator</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member5.jpg') }}" alt="Team Member 5">
                    <h3>Daniel Bobadilla</h3>
                    <p>Nutritionist</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/member6.jpg') }}" alt="Team Member 6">
                    <h3>JND Express Pet</h3>
                    <p>Community Outreach Specialist</p>
                </div>
            </div>
        </section>

    </main>

    <script src="{{ asset('js/about.js') }}"></script>
    @endsection
</body>
</html>
