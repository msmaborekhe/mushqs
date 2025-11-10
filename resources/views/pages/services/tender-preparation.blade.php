@php($title = 'Tender Preparation — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Tender Preparation and Evaluation Services</h1>
                <p>Bidding for projects can be complex and time-consuming. The quality, structure, and clarity of your tender submission often determine your competitive edge.</p>
            </div>
            <div>
                <img src="{{ url('/images/About us.jpg') }}" alt="Tender Preparation" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Tender Preparation and Evaluation Services</h2>
            <p>At Mush QS Consulting, we support clients through every stage of the tender process — from opportunity identification to submission — ensuring proposals are compliant, persuasive, and positioned for success.</p>

            <h3>Our Expertise</h3>
            <ul>
                <li>In-depth knowledge of government and private sector procurement processes</li>
                <li>Proven experience in preparing high-scoring tenders and bids across multiple industries</li>
                <li>Tailored strategies to enhance competitiveness and compliance</li>
                <li>Support from initial registration to final submission</li>
            </ul>

            <h3>Our Services</h3>
            <ul>
                <li>Guidance through tender and procurement portals</li>
                <li>Review and interpretation of tender documents and critical requirements</li>
                <li>Advice on suitable tenders aligned with your business capability</li>
                <li>Preparation and submission of tender proposals and expressions of interest</li>
                <li>Development of tender strategies and tracking systems</li>
                <li>Creation of compelling capability statements and bid narratives</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Start your tender</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
