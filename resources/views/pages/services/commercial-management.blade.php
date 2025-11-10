@php($title = 'Commercial Management — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Commercial Management</h1>
                <p>Successful projects demand strong commercial leadership, robust controls, strategic procurement, and sound contracting strategies. Applying these principles from the earliest stages ensures projects are delivered profitably, efficiently, and with long-term value for all stakeholders.</p>
            </div>
            <div>
                <img src="{{ url('/images/Cover.jpg') }}" alt="Commercial Management" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Commercial Management Overview</h2>
            <p>At Mush QS Consulting, we help organisations strengthen their commercial foundations — enabling them to seize opportunities, achieve consistent growth, and meet regulatory and governance requirements with confidence.</p>
            <p>Our experienced team acts as an extension of your organisation, providing reliable advice and hands-on commercial expertise. We focus on proactive management, early intervention, and collaborative problem-solving to prevent disputes, reduce legal exposure, and drive successful outcomes from inception to completion.</p>

            <h3>Our Expertise</h3>
            <p>We bring together cost precision, contractual strength, and strategic insight across the full project lifecycle, including:</p>
            <ul>
                <li>Commercial Management & Contract Administration – Managing project finances, payments, variations, EOTs, and claims to ensure compliance and transparency.</li>
                <li>Procurement Advisory & Management – Developing and implementing procurement strategies that balance value and risk.</li>
                <li>Cost Engineering & Forecasting – Delivering accurate budgets, cost plans, and cashflow forecasts for informed decision-making.</li>
                <li>Contracts Advisory & Risk Management – Providing guidance on contract drafting, negotiation, and back-to-back alignment to protect client interests.</li>
                <li>Project Controls & Reporting – Implementing systems for progress tracking, cost analysis, and earned value performance.</li>
                <li>Consultation & Advisory – Supporting feasibility studies, business case development, and compliance with statutory and regulatory frameworks.</li>
                <li>Documentation & Methodology – Preparing project briefs, tender documentation, and contractual frameworks to support clear, defensible procurement and delivery outcomes.</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Discuss your project</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
