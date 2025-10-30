@php($title = 'Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Our Services</h1>
                <p>Comprehensive pre- and post-contract commercial management tailored to your project.</p>
            </div>
            <div>
                <img src="images/services/services.jpg" alt="Services" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="service-grid">
                <a class="service-tile" href="/services/commercial-management">
                    <img src="images/services/commercial.jpeg" alt="Commercial Management" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Commercial Management</span>
                </a>
                <a class="service-tile" href="/services/contracts-advisory">
                    <img src="images/services/contract.png" alt="Contracts Advisory" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Contracts Advisory</span>
                </a>
                <a class="service-tile" href="/services/tender-preparation">
                    <img src="images/services/tender.jpeg" alt="Tender Preparation" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Tender Preparation</span>
                </a>
                <a class="service-tile" href="/services/claims-quantum-analysis">
                    <img src="images/services/claims.jpeg" alt="Claims and Quantum Analysis" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Claims and Quantum Analysis</span>
                </a>
                <a class="service-tile" href="/services/procurement">
                    <img src="images/services/procurement.jpeg" alt="Procurement" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Procurement</span>
                </a>
                <a class="service-tile" href="/services/engineering-management">
                    <img src="images/services/engineering.jpeg" alt="Engineering Management" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
                    <span class="label">Engineering Management</span>
                </a>
            </div>
            <div class="service-cta">
                <a class="btn btn-outline" href="/contact">Request a Proposal</a>
            </div>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
