<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sweet moments, freshly baked with love. Discover cakes and treats made fresh every day at HB Cakes.">
    <meta name="theme-color" content="#fff8fb">
    <title>HB Cakes — Sweet moments, freshly baked</title>
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="#home" aria-label="HB Cakes home">
                <span class="brand-mark" aria-hidden="true">HB</span>
                <span>HB Cakes<span class="brand-period">.</span></span>
            </a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Toggle navigation">
                <span></span><span></span><span></span>
            </button>
            <nav class="primary-nav" id="primary-nav" aria-label="Main navigation">
                <a class="nav-link active" href="#home">Home</a>
                <a class="nav-link" href="#best-sellers">Shop</a>
                <a class="nav-link" href="#our-story">About</a>
                <a class="nav-link" href="#articles">Journal</a>
                <a class="nav-link" href="#contact">Contact</a>
            </nav>
            <div class="header-actions">
                <a class="cart-link" href="#best-sellers" aria-label="Shopping bag, 0 items">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 8h14l1 13H4L5 8Z"></path><path d="M9 9V6a3 3 0 0 1 6 0v3"></path></svg>
                    <span class="cart-count" aria-live="polite">0</span>
                </a>
                <a class="button button-small" href="#best-sellers">Order now <span aria-hidden="true">↗</span></a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-inner page-width">
                <div class="hero-copy">
                    <span class="eyebrow"><span class="eyebrow-dot"></span>Baked fresh, every day</span>
                    <h1>Sweet moments,<br>freshly baked <em>with love.</em></h1>
                    <p>Life is sweeter with something delicious. Discover handmade cakes, pastries, and little treats made to make your day.</p>
                    <div class="hero-actions">
                        <a class="button" href="#best-sellers">Explore our treats <span aria-hidden="true">↗</span></a>
                        <a class="text-link" href="#our-story"><span class="play-icon" aria-hidden="true">▶</span>Our story</a>
                    </div>
                    <div class="hero-social">
                        <span>Follow along</span>
                        <a href="#contact" aria-label="Instagram">ig</a>
                        <a href="#contact" aria-label="Pinterest">p</a>
                        <a href="#contact" aria-label="Facebook">f</a>
                    </div>
                </div>
                <div class="hero-art" aria-label="A selection of freshly baked cakes and pastries">
                    <div class="hero-photo hero-photo-main">
                        <img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Chocolate layer cake decorated with cream" fetchpriority="high">
                    </div>
                    <div class="hero-photo hero-photo-small">
                        <img src="https://images.unsplash.com/photo-1486427944299-d1955d23e34d?auto=format&amp;fit=crop&amp;w=500&amp;q=85" alt="Freshly iced cupcakes" loading="lazy">
                    </div>
                    <span class="hero-sparkle sparkle-one" aria-hidden="true">✳</span>
                    <span class="hero-sparkle sparkle-two" aria-hidden="true">✳</span>
                    <div class="hero-note"><span class="note-heart" aria-hidden="true">♡</span><span>Made with<br><strong>a little extra love</strong></span></div>
                </div>
                <div class="hero-stamp" aria-hidden="true"><span>BAKED WITH LOVE</span><strong>✳</strong><span>EST. 2014</span></div>
            </div>
        </section>

        <section class="story-strip page-width" id="our-story" aria-label="Our promise">
            <div class="story-intro">
                <span class="eyebrow">A little bit of magic</span>
                <h2>Good things<br>come from the oven.</h2>
                <p>Simple ingredients, a whole lot of heart, and a sprinkle of joy in every bite.</p>
            </div>
            <article class="promise-card">
                <span class="promise-number">01</span>
                <div class="promise-image"><img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&amp;fit=crop&amp;w=360&amp;q=80" alt="Golden fresh-baked pastries" loading="lazy"></div>
                <h3>Freshly baked</h3><p>Made from scratch in our kitchen each and every morning.</p>
            </article>
            <article class="promise-card">
                <span class="promise-number">02</span>
                <div class="promise-image"><img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?auto=format&amp;fit=crop&amp;w=360&amp;q=80" alt="Fresh fruit cake finished by hand" loading="lazy"></div>
                <h3>Made with love</h3><p>Thoughtful little details make every treat feel special.</p>
            </article>
            <article class="promise-card">
                <span class="promise-number">03</span>
                <div class="promise-image"><img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&amp;fit=crop&amp;w=360&amp;q=80" alt="Artisan bakery goods" loading="lazy"></div>
                <h3>Only the good stuff</h3><p>Quality ingredients, chosen with care and baked to perfection.</p>
            </article>
        </section>

        <section class="products-section section-pad" id="best-sellers">
            <div class="page-width">
                <div class="section-heading">
                    <div><span class="eyebrow">A few customer favorites</span><h2>Our best sellers</h2></div>
                    <a class="text-link view-all" href="#best-sellers">View all treats <span aria-hidden="true">↗</span></a>
                </div>
                <div class="product-grid">
                    <article class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1586788680434-30d324b2d46f?auto=format&amp;fit=crop&amp;w=720&amp;q=85" alt="Red velvet layer cake with cream cheese frosting" loading="lazy">
                            <button class="favorite-button" type="button" aria-label="Add Red velvet cake to favorites" aria-pressed="false">♡</button>
                            <span class="product-tag">Bestseller</span>
                        </div>
                        <div class="product-info">
                            <div class="product-title-row"><h3>Red velvet cake</h3><span class="rating">★ 4.9</span></div>
                            <p>Soft, velvety layers with our dreamy cream cheese frosting.</p>
                            <div class="product-bottom"><span class="price">€45.90</span><button class="add-button" type="button" data-product="Red velvet cake">Add to cart <span aria-hidden="true">+</span></button></div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1571115177098-24ec42ed204d?auto=format&amp;fit=crop&amp;w=720&amp;q=85" alt="Layered cream cake with fresh berries" loading="lazy">
                            <button class="favorite-button" type="button" aria-label="Add Berry cloud cake to favorites" aria-pressed="false">♡</button>
                        </div>
                        <div class="product-info">
                            <div class="product-title-row"><h3>Berry cloud cake</h3><span class="rating">★ 5.0</span></div>
                            <p>Light vanilla sponge, silky cream, and a handful of berries.</p>
                            <div class="product-bottom"><span class="price">€42.50</span><button class="add-button" type="button" data-product="Berry cloud cake">Add to cart <span aria-hidden="true">+</span></button></div>
                        </div>
                    </article>
                    <article class="product-card">
                        <div class="product-image">
                            <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?auto=format&amp;fit=crop&amp;w=720&amp;q=85" alt="Colorful decorated cupcakes" loading="lazy">
                            <button class="favorite-button" type="button" aria-label="Add Sweet little cupcakes to favorites" aria-pressed="false">♡</button>
                            <span class="product-tag product-tag-pink">Made for sharing</span>
                        </div>
                        <div class="product-info">
                            <div class="product-title-row"><h3>Sweet little cupcakes</h3><span class="rating">★ 4.8</span></div>
                            <p>A box of six tiny celebrations, topped with buttercream.</p>
                            <div class="product-bottom"><span class="price">€18.00</span><button class="add-button" type="button" data-product="Sweet little cupcakes">Add to cart <span aria-hidden="true">+</span></button></div>
                        </div>
                    </article>
                </div>
                <div class="slider-dots" aria-hidden="true"><span class="selected"></span><span></span><span></span></div>
            </div>
        </section>

        <section class="articles-section section-pad" id="articles">
            <div class="page-width">
                <div class="section-heading">
                    <div><span class="eyebrow">Stories from our kitchen</span><h2>Our latest little reads</h2></div>
                    <a class="text-link view-all" href="#articles">More stories <span aria-hidden="true">↗</span></a>
                </div>
                <div class="article-grid">
                    <a class="article-card" href="#contact">
                        <div class="article-image"><img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?auto=format&amp;fit=crop&amp;w=740&amp;q=85" alt="Fresh batch of cookies cooling on a tray" loading="lazy"><span class="article-category">From the kitchen</span></div>
                        <div class="article-meta"><span>May 18, 2024</span><span>5 min read</span></div>
                        <h3>The secret to the softest, chewiest cookies</h3><span class="article-more">Read the story <span aria-hidden="true">↗</span></span>
                    </a>
                    <a class="article-card" href="#contact">
                        <div class="article-image"><img src="https://images.unsplash.com/photo-1488477181946-6428a0291777?auto=format&amp;fit=crop&amp;w=740&amp;q=85" alt="Homemade dessert topped with fresh berries" loading="lazy"><span class="article-category">Little celebrations</span></div>
                        <div class="article-meta"><span>May 04, 2024</span><span>4 min read</span></div>
                        <h3>Make every day feel like a celebration</h3><span class="article-more">Read the story <span aria-hidden="true">↗</span></span>
                    </a>
                    <a class="article-card" href="#contact">
                        <div class="article-image"><img src="https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&amp;fit=crop&amp;w=740&amp;q=85" alt="Chocolate cake made for a special occasion" loading="lazy"><span class="article-category">Baking notes</span></div>
                        <div class="article-meta"><span>April 22, 2024</span><span>6 min read</span></div>
                        <h3>A little love goes a long way (and so does cake)</h3><span class="article-more">Read the story <span aria-hidden="true">↗</span></span>
                    </a>
                </div>
            </div>
        </section>

        <section class="testimonials-section section-pad">
            <div class="page-width">
                <div class="testimonial-title"><span class="eyebrow">The sweetest thing is hearing from you</span><h2>Our customers <em>love us.</em></h2></div>
                <div class="testimonial-grid">
                    <figure class="testimonial-card">
                        <div class="testimonial-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote>“The cake was absolutely beautiful and tasted even better. It made our little celebration feel so special!”</blockquote>
                        <figcaption><span class="avatar">S</span><span><strong>Sarah M.</strong><small>Happy customer · 2 weeks ago</small></span><span class="quote-mark" aria-hidden="true">“</span></figcaption>
                    </figure>
                    <figure class="testimonial-card">
                        <div class="testimonial-stars" aria-label="5 out of 5 stars">★★★★★</div>
                        <blockquote>“I stopped in for one pastry and left with a whole box. Everything is so fresh, thoughtful, and delicious.”</blockquote>
                        <figcaption><span class="avatar avatar-two">J</span><span><strong>James L.</strong><small>Happy customer · 1 month ago</small></span><span class="quote-mark" aria-hidden="true">“</span></figcaption>
                    </figure>
                </div>
                <div class="testimonial-dots" aria-hidden="true"><span class="selected"></span><span></span><span></span><span></span></div>
            </div>
        </section>

        <section class="newsletter">
            <div class="newsletter-inner page-width">
                <div><span class="eyebrow">A little sweetness in your inbox</span><h2>Good things are baking.</h2><p>Get first dibs on fresh treats, seasonal specials, and a little kitchen inspiration.</p></div>
                <form class="newsletter-form">
                    <label class="sr-only" for="email">Your email address</label>
                    <input id="email" name="email" type="email" placeholder="Your email address" required>
                    <button class="button" type="submit">Count me in <span aria-hidden="true">↗</span></button>
                    <span class="form-message" aria-live="polite"></span>
                </form>
                <span class="newsletter-flower" aria-hidden="true">✿</span>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contact">
        <div class="footer-main page-width">
            <div class="footer-brand">
                <a class="brand" href="#home"><span class="brand-mark" aria-hidden="true">HB</span><span>HB Cakes<span class="brand-period">.</span></span></a>
                <p>Handmade with a little extra love.<br>Baked fresh for your sweetest moments.</p>
                <div class="footer-social"><a href="#contact" aria-label="Instagram">ig</a><a href="#contact" aria-label="Pinterest">p</a><a href="#contact" aria-label="Facebook">f</a></div>
            </div>
            <div class="footer-column"><h3>Explore</h3><a href="#home">Home</a><a href="#best-sellers">Our treats</a><a href="#our-story">Our story</a><a href="#articles">The journal</a></div>
            <div class="footer-column"><h3>Come say hi</h3><a href="mailto:hello@bakery.example">hello@bakery.example</a><a href="tel:+15550142628">+1 (555) 014-2628</a><span>12 Sweet Street, New York</span></div>
            <div class="footer-hours"><h3>Fresh from the oven</h3><span>Mon – Fri <strong>8am – 6pm</strong></span><span>Saturday <strong>9am – 4pm</strong></span><span>Sunday <strong>Taking a little rest</strong></span></div>
        </div>
        <div class="footer-bottom page-width"><span>© {{ date('Y') }} HB Cakes. Baked with love.</span><div><a href="#contact">Privacy policy</a><a href="#contact">Terms &amp; conditions</a></div><a class="back-to-top" href="#home">Back to top ↑</a></div>
    </footer>
    <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>
