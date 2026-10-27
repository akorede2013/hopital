
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AL-RAYAN HOSPITAL | hospital Management System</title>

    <link rel="stylesheet" href="css/style.css">

</head>


<body>


<!-- =========================================
     NAVIGATION
========================================= -->

<?php include("includes/header.php")?>



<!-- =========================================
     HERO SECTION
========================================= -->

<section id="home" class="hero">

    <div class="hero-content">

        <div class="hero-text">

            <span class="welcome-text">
                WELCOME TO AL-RAYAN HOSPITAL
            </span>

            <h1>
                health and care
                <span>health & care</span>
            </h1>

            <p>
                Your trusted hospital gives hou standard treatment .
            </p>


            <div class="hero-buttons">

                <a href="#services" class="primary-btn">
                    Explore Our Services
                </a>

                <a href="#contact" class="secondary-btn">
                    Contact Us
                </a>

            </div>

        </div>


        <!-- =================================
             IMAGE SLIDER
        ================================== -->

        <div class="bank-slider">

            <div class="slide active">

                <img
                    src="mag.jpg"
                    alt="the main hospital"
                >

            </div>


            <div class="slide">

                <img
                    src="ham.jpg"
                    alt="the radiologist center"
                >

            </div>


            <div class="slide">

                <img
                    src="mag.jpg"
                    alt="the checkup center"
                >

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     ABOUT SECTION
========================================= -->

<section id="about" class="about-section">

    <div class="section-container">

        <div class="section-title">

            <span>ABOUT US</span>

            <h2>a hospital You Can Trust</h2>

            <p>
                At al-rayan hospital, we are committed to providing
                good traeatmet standard attention.
            </p>

        </div>


        <div class="about-content">

            <div class="about-card">

                <h3>Our Mission</h3>

                <p>
                    To provide secure, convenient and reliable
                    education while building long-lasting
                    relationships with our students.
                </p>

            </div>


            <div class="about-card">

                <h3>Our Vision</h3>

                <p>
                    To make every one feel better.
             
                  
                </p>

            </div>


            <div class="about-card">

                <h3>Our Values</h3>

                <p>
                    health and care.
                    
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =========================================
     SERVICES SECTION
========================================= -->

<section id="services" class="services-section">

    <div class="section-container">

        <div class="section-title">

            <span>OUR SERVICES</span>

            <h2>What We Offer</h2>

            <p>
                eye surgery,pregnancy test ,malaria test etc.
            </p>

        </div>


        <div class="services-grid">


            <div class="service-card">

                <div class="service-icon">
                    💳
                </div>

                <h3>hospital facility</h3>

                <p>
                   adequate equipment,
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💰
                </div>

                <h3>health facilty</h3>

                <p>
                    proper sanitry toilets,good and clean water.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    💸
                </div>

                <h3>easy paying of hospital bills</h3>

                <p>
                    Enjoy convenient easy paying of hospital fees.
                </p>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    🔐
                </div>

                <h3>Secure hospital ground</h3>

                <p>
                    We ensure that every patient is safe.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     CONTACT SECTION
========================================= -->

<section id="contact" class="contact-section">

    <div class="section-container">

        <div class="section-title">

            <span>CONTACT US</span>

            <h2>We Are Here To Help</h2>

            <p>
                Have a question? Our team is ready to assist you.
            </p>

        </div>


        <div class="contact-grid">


            <div class="contact-card">

                <div class="contact-icon">
                    📍
                </div>

                <h3>Our Address</h3>

                <p>
                    gwarimpa, abuja fct across 13 street
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    📞
                </div>

                <h3>Phone</h3>

                <p>
                    +234 9060803881
                </p>

            </div>


            <div class="contact-card">

                <div class="contact-icon">
                    ✉️
                </div>

                <h3>Email</h3>

                <p>
                    info@al-rayan hospital.com
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================
     FOOTER
========================================= -->

<?php include("includes/footer.php")?>



<!-- =========================================
     IMAGE SLIDER JAVASCRIPT
========================================= -->

<script>

    let currentSlide = 0;

    const slides = document.querySelectorAll(".slide");


    function showSlide(index) {

        slides.forEach(function(slide) {

            slide.classList.remove("active");

        });


        slides[index].classList.add("active");

    }


    function nextSlide() {

        currentSlide++;

        if (currentSlide >= slides.length) {

            currentSlide = 0;

        }

        showSlide(currentSlide);

    }


    setInterval(nextSlide, 5000);

</script>


</body>

</html>

