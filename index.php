<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">
    <title>Luxespin Laundry - Professional Laundry Services</title>

    <!-- scroll + footer animation -->
    <style>
        html { scroll-behavior: smooth; }

        /* footer animate-on-scroll */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 600ms ease, transform 600ms ease;
            will-change: opacity, transform;
        }
        .animate-on-scroll.in-view {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="cota">
            <button>Call Now</button>
            <button onclick="window.location.href='order.php'">Book Online</button>
        </div>
        <button class="menu" id="mobile-menu-toggle">☰</button>
        <div class="mobile-nav" id="mobile-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <section class="hero" id="home">
        <div class="hero-text">
            <h1>Luxespin Laundry Services</h1>
            <p>Professional cleaning solutions for your clothes. Quality care for every fabric, every time. Ready to simplify your life.</p>
            <button>Get Started Today</button>
        </div>
        <div class="hero-images">
            <div class="hero-img1" style="background-image: url('images/IMG_7106.JPG'); --delay: 0;"></div>
            <div class="hero-img2" style="background-image: url('images/IMG_7107.JPG'); --delay: 1;"></div>
            <div class="hero-img3" style="background-image: url('images/IMG_7108.JPG'); --delay: 2;"></div>
            <div class="hero-img4" style="background-image: url('images/IMG_7109.JPG'); --delay: 3;"></div>
            <div class="hero-img5" style="background-image: url('images/IMG_7110.JPG'); --delay: 4;"></div>
            <div class="hero-img6" style="background-image: url('images/IMG_7111.JPG'); --delay: 5;"></div>
            <div class="hero-img7" style="background-image: url('images/IMG_7112.JPG'); --delay: 6;"></div>
            <div class="hero-img8" style="background-image: url('images/IMG_7113.JPG'); --delay: 7;"></div>
        </div>
    </section>
    
    <section class="services" id="services">
        <h2>Our Services</h2>
        <p>We provide comprehensive laundry and dry cleaning services with state of the art equipment and eco-friendly solutions.</p>
        <div class="service-images">
            <div>
                <img src="images/IMG_7114.JPG" alt="Wash & Fold Service">
                <h3>Wash & Fold</h3>
                <p>Professional washing and folding service for your everyday clothes. We handle everything from sorting to folding with care.</p>
            </div>
            <div>
                <img src="images/IMG_7115.JPG" alt="Dry Cleaning Service">
                <h3>Dry Cleaning</h3>
                <p>Expert dry cleaning for delicate fabrics and formal wear. Our advanced techniques ensure your clothes look their best.</p>
            </div>
            <div>
                <img src="images/IMG_7116.JPG" alt="Commercial Laundry">
                <h3>Commercial Laundry</h3>
                <p>Reliable commercial laundry services for businesses, hotels, and restaurants. Large volume capacity with quick turnaround.</p>
            </div>
        </div>
    </section>
    
    <section class="why-us" id="about">
        <h2>Why Choose Us</h2>
        <p>We're committed to providing exceptional laundry services that exceed your expectations every time.</p>
        <div class="reasons">
            <div class="reason">
                <img src="images/IMG_7117.JPG" alt="Quality Service">
                <h3>Quality Service</h3>
                <p>We use premium detergents and advanced cleaning techniques to ensure your clothes receive the best care possible.</p>
            </div>
            <div class="reason">
                <img src="images/IMG_7125.JPG" alt="Expert Team">
                <h3>Expert Team</h3>
                <p>Our experienced professionals are trained in the latest laundry techniques and fabric care methods.</p>
            </div>
            <div class="reason">
                <img src="images/IMG_7126.JPG" alt="Customer Support">
                <h3>Fast Turnaround</h3>
                <p>Quick and reliable service with same-day and next-day options available for your convenience.</p>
            </div>
        </div>
    </section>
    
    <section class="testimory" id="testimonials">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <p class="section-subtitle">Real feedback from our valued customers</p>
            
            <div class="testimonials-carousel">
                <div class="testimonials-container">
                    <div class="testimonial-card active">
                        <div class="testimonial-header">
                            <div class="customer-avatar">
                                <img src="images/bobble.jpeg" alt="Sarah Johnson" />
                            </div>
                            <div class="customer-info">
                                <h4>Miss Ifeoluwa</h4>
                                <p class="customer-title">Business owner</p>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"Fresh Laundry has been a lifesaver! They handled my delicate silk dress with such care, and the results were perfect. Highly recommended!"</p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-avatar">
                                <img src="images/bobble.jpeg" alt="Michael Chen" />
                            </div>
                            <div class="customer-info">
                                <h4>Mr Segma</h4>
                                <p class="customer-title">tech guru</p>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"The dry cleaning service is outstanding. Their wash and fold service is impeccable, and my clothes always come back looking brand new. Will definitely be back!"</p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-avatar">
                                <img src="images/bobble.jpeg" alt="Maria Rodriguez" />
                            </div>
                            <div class="customer-info">
                                <h4>Mr Wizzy</h4>
                                <p class="customer-title">Business Owner</p>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"I love their attention to detail and how affordable and reliable they are!"</p>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-avatar">
                                <img src="images/bobble.jpeg" alt="Maria Rodriguez" />
                            </div>
                            <div class="customer-info">
                                <h4>Mr Deniyi</h4>
                                <p class="customer-title">student</p>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"Reliable commercial laundry service. Fresh Laundry delivers on time, every time. Excellent quality and service!"</p>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <div class="customer-avatar">
                                <img src="images/bobble.jpeg" alt="David Thompson" />
                            </div>
                            <div class="customer-info">
                                <h4>Mr Gustavo</h4>
                                <p class="customer-title">computer scientist</p>
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <p>"Fast, affordable, and professional. The staff is friendly and the turnaround time is amazing. This is my go to laundry service now!"</p>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-controls">
                    <button class="carousel-btn prev-btn" onclick="changeTestimonial(-1)">‹</button>
                    <div class="carousel-dots">
                        <span class="dot active" onclick="currentTestimonial(1)"></span>
                        <span class="dot" onclick="currentTestimonial(2)"></span>
                        <span class="dot" onclick="currentTestimonial(3)"></span>
                        <span class="dot" onclick="currentTestimonial(4)"></span>
                    </div>
                    <button class="carousel-btn next-btn" onclick="changeTestimonial(1)">›</button>
                </div>
            </div>
        </div>
    </section>
    <footer id="contact" class="animate-on-scroll">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Luxespin Laundry</h3>
                <p>Your trusted partner for all laundry and dry cleaning needs. Quality service.</p>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <p><a href="#">Wash & Fold</a></p>
                <p><a href="#">Dry Cleaning</a></p>
                <p><a href="#">Commercial Laundry</a></p>
                <p><a href="#">Pickup & Delivery</a></p>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Morayo Complex, Adewumi</p>
                <p> off Nova Road, Ado Ekiti</p>
                <p>Phone: (+234) 8147484511</p>
                <p>Email: luxespinlaundry@gmail.com</p>
            </div>
            <div class="footer-section">
                <h3>Hours</h3>
                <p>Monday - Friday: 8AM - 6PM</p>
                <p>Saturday: 8AM - 6PM</p>
                
                <p>Pickup/Delivery Available</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; Luxespin Laundry Services. All rights reserved.</p>
        </div>
    </footer>
    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileNav = document.getElementById('mobile-nav');
            
            mobileMenuToggle.addEventListener('click', function() {
                mobileNav.classList.toggle('active');
            });
            
            // Close mobile menu when clicking on a link
            const mobileNavLinks = mobileNav.querySelectorAll('a');
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileNav.classList.remove('active');
                });
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileMenuToggle.contains(event.target) && !mobileNav.contains(event.target)) {
                    mobileNav.classList.remove('active');
                }
            });
        });
        
        // Testimonials carousel functionality
        let currentTestimonialIndex = 0;
        const testimonialCards = document.querySelectorAll('.testimonial-card');
        const dots = document.querySelectorAll('.dot');
        
        function showTestimonial(index) {
            // Remove active class from all cards and dots
            testimonialCards.forEach(card => card.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Add active class to current card and dot
            if (testimonialCards[index]) {
                testimonialCards[index].classList.add('active');
            }
            if (dots[index]) {
                dots[index].classList.add('active');
            }
        }
        
        function changeTestimonial(direction) {
            currentTestimonialIndex += direction;
            
            if (currentTestimonialIndex >= testimonialCards.length) {
                currentTestimonialIndex = 0;
            } else if (currentTestimonialIndex < 0) {
                currentTestimonialIndex = testimonialCards.length - 1;
            }
            
            showTestimonial(currentTestimonialIndex);
        }
        
        function currentTestimonial(index) {
            currentTestimonialIndex = index - 1;
            showTestimonial(currentTestimonialIndex);
        }
        
        // Auto-advance testimonials every 5 seconds
        setInterval(() => {
            changeTestimonial(1);
        }, 5000);
        
        // Initialize first testimonial
        document.addEventListener('DOMContentLoaded', function() {
            showTestimonial(0);
        });

        // animate footer when it scrolls into view
        document.addEventListener('DOMContentLoaded', function() {
            const footer = document.getElementById('contact');
            if (!footer) return;

            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                        obs.unobserve(entry.target); // animate once
                    }
                });
            }, { threshold: 0.15 });

            observer.observe(footer);
        });
    </script>
</body>
</html>