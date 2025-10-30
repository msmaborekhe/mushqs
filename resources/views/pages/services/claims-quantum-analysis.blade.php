@php($title = 'Claims & Quantum Analysis — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Claims & Quantum Analysis</h1>
                <p>CLAIMS: THE REPRESENTATION OF EVIDENCE TO WHAT IS RIGHTFULLY DEEMED APPROPRIATE IN ORDER TO RESTORE NORMALCY AND DETERMINE LEGITIMACY OF ARGUMENTATION.</p>
            </div>
            <div>
                <img src="{{ url('/images/Conclusion.jpg') }}" alt="Claims and Quantum Analysis" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Claims and Quantum Analysis</h2>
            <p>Claims analysis is the technique of analysing and quantifying statements of possible positive and/or negative consequences for past, current and future scenarios.</p>
            <p>Peer Advisory Group is committed to provide its clients sophisticated advice and warrants the provision of objective and trustworthy analysis based on actual industry experience. Our area of expertise lies within both fields: (i) the preparation of quantum and claims defence and (ii) the assessment of those - depending on our client's requirements, our team members will be able to facilitate either way.</p>
            <p>We warrant a proactive approach by early intervention and consultancy of individual scenarios. Our team's high-calibre skillset is supplemented by technical excellence, which enables a detailed dive into the lifespan of a claim. Having been involved in providing seamless claims management services across various cases, Peer Advisory Group's approach will assist in achieving the desired outcome for our clients.</p>

            <h3>Services included:</h3>
            <ul>
                <li>Claims Management and Advisory</li>
                <li>Quantum Analysis</li>
                <li>Claims Assessment</li>
                <li>Interpretation of Claims</li>
                <li>Development of a Claims Strategy</li>
                <li>Review and interpretation of quantum claims</li>
                <li>Quantum and Claims Defence</li>
                <li>Commercial Management</li>
                <li>Contracts Advisory</li>
                <li>Contracts Administration</li>
                <li>Cost Engineering</li>
                <li>Cost Estimating</li>
                <li>Project Controls Services</li>
                <li>Commercial Risk Management</li>
                <li>Cost Analysis and Forecasting</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Get expert input</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
