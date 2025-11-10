@php($title = 'Contracts Advisory — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Contracts Advisory</h1>
                <p>Early involvement is often critical to a project’s success. Timely intervention can significantly influence outcomes — resolving issues before they escalate and strengthening a client’s position during negotiations or disputes.</p>
            </div>
            <div>
                <img src="https://source.unsplash.com/1600x900/?contract,legal,documents" alt="Contracts Advisory" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Contracts Advisory Services</h2>
            <p>At Mush QS Consulting, our Contracts team provides independent, informed, and strategic advice across every stage of the contract lifecycle. Drawing on deep commercial and industry knowledge, we help clients interpret, negotiate, and manage contracts with confidence and clarity — minimising risk and maximising value at every turn.</p>

            <h3>Our Expertise</h3>
            <p>Our consultants bring extensive experience from both public and private sectors across a wide range of industries in Australia. We advise clients before, during, and after contract execution, offering practical and commercially sound guidance that enhances decision-making and ensures contractual compliance.</p>
            <p>We translate complex contractual matters into clear, actionable strategies, enabling our clients to make confident commercial decisions and maintain strong project governance.</p>

            <h3>Our Services</h3>
            <h4>Contractual Advisory Services</h4>
            <ul>
                <li>Drafting, reviewing, and negotiation of contract documentation</li>
                <li>Drafting and interpretation of contractual terms and conditions</li>
                <li>Strategic guidance for contract negotiations and settlements</li>
                <li>Advice on contract risk allocation and mitigation</li>
                <li>Development and implementation of contract management frameworks</li>
                <li>Creation and advice on contracting methodologies</li>
            </ul>
            <h4>Claims and Dispute Management</h4>
            <ul>
                <li>Claims advisory and defence</li>
                <li>Adjudication and arbitration support</li>
                <li>Expert witness and forensic analysis</li>
                <li>Early intervention and alternative dispute resolution (ADR)</li>
            </ul>
            <h4>Procurement & Administration</h4>
            <ul>
                <li>Procurement strategy and documentation</li>
                <li>Contract administration support across all contract forms</li>
                <li>Post-award contract management and close-out assistance</li>
            </ul>

            <h3>Our Approach</h3>
            <p>Mush QS Consulting approach is grounded in experience, integrity, and collaboration. We act as an extension of our clients’ teams — bringing clarity to complex situations through practical, experience-based advice derived from managing large-scale, high-value projects.</p>
            <p>By engaging early, we help our clients establish sound contractual foundations, allocate risk fairly, and safeguard commercial outcomes — ensuring every project proceeds with confidence, transparency, and control.</p>
            <p>We don’t just interpret contracts — we create strategies that protect value and strengthen our clients’ positions from day one.</p>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Speak to an advisor</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
