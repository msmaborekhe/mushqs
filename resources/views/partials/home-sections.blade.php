<main>
    <!-- HERO SLIDER -->
    <section class="hero hero-slider">
        <div class="slider" id="homeHeroSlider">
            <div class="slide active">
                <img src="{{ url('/images/Cover.jpg') }}" alt="Mush QS Hero 1" onerror="this.style.display='none'">
            </div>
            <div class="slide">
                <img src="{{ url('/images/About us.jpg') }}" alt="Mush QS Hero 2" onerror="this.style.display='none'">
            </div>
            <div class="slide">
                <img src="{{ url('/images/Values.jpg') }}" alt="Mush QS Hero 3" onerror="this.style.display='none'">
            </div>
            <div class="slide">
                <img src="{{ url('/images/Cost.jpg') }}" alt="Mush QS Hero 4" onerror="this.style.display='none'">
            </div>
            <div class="overlay"></div>
            <div class="content">
                <div class="container">
                    <h1 id="heroTitle"></h1>
                    <p id="heroText"></p>
                    <div>
                        <a class="btn" href="/services">Explore Services</a>
                        <a class="btn btn-outline" href="/projects" style="margin-left:10px">View Projects</a>
                    </div>
                    <div class="badges" id="heroBadges" aria-live="polite">
                        <span class="badge">Cost Planning</span>
                        <span class="badge">Contracts</span>
                        <span class="badge">Claims</span>
                        <span class="badge">Procurement</span>
                    </div>
                </div>
            </div>
            <div class="controls" aria-hidden="true">
                <span class="dot active" data-index="0"></span>
                <span class="dot" data-index="1"></span>
                <span class="dot" data-index="2"></span>
                <span class="dot" data-index="3"></span>
            </div>
        </div>
    </section>

    <!-- ABOUT SNAPSHOT -->
    <section>
        <div class="container values">
            <div>
                <h2 class="section-title">About Mush QS</h2>
                <p class="section-sub">Specialist Quantity Surveying and Cost Management in Australia and beyond.</p>
                <p>Mush QS combines Tier 1 experience with boutique agility to provide actionable cost advice,
                    commercial clarity and dependable delivery support.</p>
                <p><a href="/about">Learn more about us →</a></p>
            </div>
            <div>
                <img src="{{ url('/images/About us.jpg') }}" alt="About Mush QS" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <!-- SERVICES SNAPSHOT -->
    <section>
        <div class="container">
            <h2 class="section-title">What we do</h2>
            <p class="section-sub">A concise set of services covering pre‑contract and post‑contract needs.</p>
            <div class="grid-3">
                <a class="card" href="/services/commercial-management" style="display:block">
                    <h3>Commercial Management</h3>
                    <p>End‑to‑end commercial leadership and controls.</p>
                </a>
                <a class="card" href="/services/contracts-advisory" style="display:block">
                    <h3>Contracts Advisory</h3>
                    <p>Drafting, negotiation and strategic guidance.</p>
                </a>
                <a class="card" href="/services/tender-preparation" style="display:block">
                    <h3>Tender Preparation</h3>
                    <p>Bid strategy, documents and submissions.</p>
                </a>
                <a class="card" href="/services/claims-quantum-analysis" style="display:block">
                    <h3>Claims & Quantum</h3>
                    <p>Preparation, assessment and defence.</p>
                </a>
                <a class="card" href="/services/procurement" style="display:block">
                    <h3>Procurement</h3>
                    <p>Sourcing, evaluation and award support.</p>
                </a>
                <a class="card" href="/services/engineering-management" style="display:block">
                    <h3>Engineering Management</h3>
                    <p>Project and engineering delivery support.</p>
                </a>
            </div>
            <div class="service-cta">
                <a class="btn btn-outline" href="/services">See all services</a>
            </div>
        </div>
    </section>

    <!-- PROJECTS SNAPSHOT -->
    <section>
        <div class="container values">
            <div>
                <img src="{{ url('/images/aus_experience.png') }}" alt="Projects" onerror="this.style.display='none'">
            </div>
            <div>
                <h2 class="section-title">Projects</h2>
                <p class="section-sub">Experience across oil & gas, transport, health, commercial and more.</p>
                <p>From the AUD$31bn Inland Rail to complex commercial fit‑outs, we bring precision and transparency to
                    delivery.</p>
                <p><a href="/projects">Explore project experience →</a></p>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section>
        <div class="container" style="text-align:center">
            <h2 class="section-title" style="margin-bottom:6px">Have a project in mind?</h2>
            <p class="section-sub" style="margin-bottom:16px">Get clear, defensible numbers and proactive commercial
                support.</p>
            <a class="btn" href="/contact">Contact us</a>
        </div>
    </section>
    <script>
        (function () {
            const slider = document.getElementById('homeHeroSlider');
            if (!slider) return;
            const slides = slider.querySelectorAll('.slide');
            const dots = slider.querySelectorAll('.dot');
            const titleEl = document.getElementById('heroTitle');
            const textEl = document.getElementById('heroText');
            const badgesEl = document.getElementById('heroBadges');

            // Distinct content for each slide
            const slideContents = [
                {
                    title: 'Clarity in Cost. Confidence in Delivery.',
                    text: 'Brisbane-based quantity surveying and commercial advisory. We plan, control and protect value across every stage of your project.',
                    badges: ['Cost Planning', 'Contracts', 'Claims', 'Procurement']
                },
                {
                    title: 'Tier 1 Experience. Boutique Focus.',
                    text: 'From oil & gas to transport and health, we bring big-project discipline with small-team agility.',
                    badges: ['Oil & Gas', 'Road & Rail', 'Health & Education', 'Commercial']
                },
                {
                    title: 'End-to-End Commercial Support.',
                    text: 'Pre- and post-contract services: tendering, commercial management, claims and dispute resolution.',
                    badges: ['Commercial Mgmt', 'Contracts Advisory', 'Tender Prep', 'Claims & Quantum']
                },
                {
                    title: 'Outcomes You Can Measure.',
                    text: 'Transparent reporting, defensible numbers and proactive risk management across delivery.',
                    badges: ['Cost Control', 'Forecasting', 'Risk & Opportunity', 'Reporting']
                }
            ];

            let index = 0;
            let timer;

            function renderContent(i) {
                const c = slideContents[i % slideContents.length];
                if (titleEl) titleEl.textContent = c.title;
                if (textEl) textEl.textContent = c.text;
                if (badgesEl) {
                    badgesEl.innerHTML = c.badges.map(b => `<span class="badge">${b}</span>`).join('');
                }
            }

            function show(i) {
                slides.forEach((s, n) => s.classList.toggle('active', n === i));
                dots.forEach((d, n) => d.classList.toggle('active', n === i));
                renderContent(i);
                index = i;
            }

            function next() {
                show((index + 1) % slides.length);
            }

            function start() {
                stop();
                timer = setInterval(next, 3000);
            }

            function stop() {
                if (timer) clearInterval(timer);
            }

            // Dot navigation
            dots.forEach(d => d.addEventListener('click', () => {
                const i = parseInt(d.getAttribute('data-index') || '0', 10);
                show(i);
                start();
            }));

            // Pause on hover for accessibility
            slider.addEventListener('mouseenter', stop);
            slider.addEventListener('mouseleave', start);

            // Initialize content and start autoplay
            show(0);
            start();
        })();
    </script>
</main>
