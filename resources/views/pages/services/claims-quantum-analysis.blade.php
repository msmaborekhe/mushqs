@php($title = 'Claims & Quantum Analysis — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Claims and Quantum Analysis</h1>
                <p>Disputes and variations are an inevitable part of project delivery — but with the right expertise, their impact can be effectively managed and resolved.</p>
            </div>
            <div>
                <img src="{{ url('/images/Conclusion.jpg') }}" alt="Claims and Quantum Analysis" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Claims and Quantum Analysis</h2>
            <p>At Mush QS Consulting, we provide independent, objective, and technically sound analysis of construction and commercial claims. Our specialists combine deep industry experience with analytical precision to support clients in both the preparation and defence of claims, ensuring fairness, compliance, and strategic advantage.</p>

            <h3>Our Expertise</h3>
            <ul>
                <li>Early intervention and proactive claims management to reduce exposure</li>
                <li>In-depth analysis of entitlement, causation, and quantum</li>
                <li>Balanced advice for both claim preparation and claims defence</li>
                <li>Detailed review of cost, time, and commercial impacts</li>
                <li>Clear, evidence-based recommendations to support negotiations and settlements</li>
            </ul>

            <h3>Our Services</h3>
            <ul>
                <li>Claims Management and Advisory</li>
                <li>Quantum Analysis and Assessment</li>
                <li>Interpretation and Review of Claims</li>
                <li>Claims Defence and Strategy Development</li>
                <li>Contractual and Commercial Risk Analysis</li>
                <li>Cost Estimating, Forecasting, and Cost Engineering Support</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Get expert input</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
