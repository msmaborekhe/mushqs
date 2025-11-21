@php($title = 'Projects — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Projects</h1>
                <p>Selected project experience across Australia and Zimbabwe, demonstrating our capability in complex, high‑value delivery.</p>
            </div>
            <div>
                <img src="{{ url('/images/aus_experience.png') }}" alt="Project Experience" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Project Experience (Australia)</h2>
            <p>Mush QS brings over 12 years of proven experience in quantity surveying, delivering cost and contract management on some of the nation’s most complex and high-value projects (over 31 Billion Aud). Mush QS has consistently provided strategic cost planning, claims management, and contractual clarity. Our ability to navigate intricate contractual interfaces, combined with Tier 1 contractor experience and boutique-level agility, positions us as a trusted partner for clients seeking precision, transparency, and value in every project.</p>
            <div class="grid-3" style="align-items:center;gap:24px;margin-top:10px">
                <div class="card" style="grid-column: span 3; padding:0; border:0; background:transparent">
                    <img src="{{ url('/images/aus_experience.png') }}" alt="Australia Experience" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'" style="border-radius:12px">
                </div>
            </div>
            <div class="grid-3" style="margin-top:20px">
                <div class="card"><h3>Oil & Gas</h3><p>Kurri Kurri Lateral Pipeline (AUD$200M)</p></div>
                <div class="card"><h3>Road & Rail</h3><p>Inland Rail Melbourne–Brisbane (AUD$31bn)</p></div>
                <div class="card"><h3>Health / Education</h3><p>Children’s Hospital Westmead (AUD$350M), NSW Schools Program</p></div>
                <div class="card"><h3>Commercial</h3><p>6 Parramatta Square (AUD$150M), Corporate Fitouts (Microsoft, Macquarie Bank)</p></div>
                <div class="card"><h3>Retail / Hospitality</h3><p>AMP Capital Shopping Centres, Star Entertainment Group</p></div>
                <div class="card"><h3>Residential</h3><p>Wollongong BRDB Apartments (AUD$90M), DHA Housing</p></div>
            </div>
            <br>
            <img src="/images/aus_experience.png" alt="Australia Experience" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">

        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Project Experience (Zimbabwe)</h2>
            <div class="grid-3" style="align-items:center;gap:24px">
                <div class="card" style="grid-column: span 3; padding:0; border:0; background:transparent">
                    <img src="{{ url('/images/zim_experience.png') }}" alt="Zimbabwe Experience" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'" style="border-radius:12px">
                </div>
            </div>
            <div class="grid-3" style="margin-top:20px">
                <div class="card"><h3>Commercial & Offices</h3></div>
                <div class="card"><h3>Residential</h3></div>
                <div class="card"><h3>Retail, Hospitality & Leisure</h3></div>
                <div class="card"><h3>Industrial / Local Government</h3></div>
                <div class="card"><h3>Airport</h3></div>
            </div>
            <br>
            <img src="images/zim_experience.png" alt="Zimbabwe Experience" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">

        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Specialised Skillset in PPP</h2>
            <p>Mush QS brings a unique advantage to emerging infrastructure market by combining deep cost management expertise with a strong understanding of Public-Private Partnership (PPP) principles. We know that successful PPP projects require more than engineering; they demand clear risk allocation, transparent payment structures, and contracts that attract both government and private investors. Our experience ensures that projects are structured to deliver value for money, protect public interests, and remain bankable for lenders and sponsors alike.</p>
            <p>Whether the model involves government-funded availability payments or private investment through user-pay concessions, Mush QS helps clients navigate the complexity. We develop frameworks that balance risk, secure financing, and align with international best practice while adapting to local realities. From drafting concession terms to advising on cost planning and claims management, we position projects for long-term success—making Mush QS the trusted partner for governments and private investors seeking to unlock infrastructure potential.</p>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="card" style="border:0;background:transparent;padding:0">
                <p>At Mush QS, we value the trust our clients place in us to deliver clarity, precision, and measurable value on every project. Our journey is built on strong partnerships with leading contractors, consultants, and government agencies across Australia, Zimbabwe, and beyond. We proudly showcase some of the clients and organizations we’ve worked with. We look forward to collaborating with you to turn your vision into reality.</p>
                <p><strong>Let’s build success together.</strong></p>
                <p><a class="btn" href="/contact">Discuss your project</a></p>
            </div>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
