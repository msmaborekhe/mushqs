@php($title = 'Contracts Advisory — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Contracts Advisory</h1>
                <p>CONTRACT: AN AGREEMENT REPRESENTING MUTUAL ASSENT EXPRESSED BY A VALID OFFER AND ACCEPTANCE BETWEEN PARTIES TO CREATE AND DEFINE MUTUAL OBLIGATIONS, THAT EACH PARTY MUST DELIVER UPON, WITH THE FUNDAMENTAL GOAL TO CREATE A BUSINESS RELATIONSHIP.</p>
            </div>
            <div>
                <img src="https://source.unsplash.com/1600x900/?contract,legal,documents" alt="Contracts Advisory" loading="lazy" referrerpolicy="no-referrer" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Contracts Advisory Services</h2>
            <p>Early involvement can be crucial for project outcomes, which is why the necessity to intervene timely can have great positive impact on influencing issues and further enhancing the opportunity to better the outcome for any settlement.</p>
            <p>Peer Advisory Group's contracts advisory team puts effort in creating the opportunity for our clients to obtain an independent advice in an efficient and effective manner, that is based upon an in-depth knowledge of commercial contracts. Our assisting approach leads to strategic guidance for contract negotiations with the outcome to strengthen our client's position.</p>
            <p>Our Team has comprehensive expertise of both public and private sectors in wide range of industries in Australia, encompassing all contract management related services. Our expertise in the fields of contracts advisory allows us to assist our clients during multiple phases of a contract's life-cycle, including matters before, during and after the contract execution and their relevant contract processes in order to minimise potential risks and maximise the outcome.</p>
            <p>In order to enhance the decision-making process for our clients, our Team of consultants come up with clarity to complex situations with experience-based approaches founded on significant contracts management background of large-scale projects.</p>

            <h3>Services include:</h3>
            <div class="grid-3">
                <div class="card">
                    <h3>Contractual Advisory Services</h3>
                    <ul style="margin:0;padding-left:18px">
                        <li>Drafting and negotiation of contractual documentations</li>
                        <li>Drafting of contractual terms and conditions</li>
                        <li>Interpretation of contractual terms and conditions</li>
                    </ul>
                </div>
                <div class="card"><h3>Strategic Advice</h3><p>Provision of strategic advice in conjunction with the contracts.</p></div>
                <div class="card"><h3>Risk Allocation</h3><p>Management of contract risk allocation.</p></div>
                <div class="card"><h3>Commercial Outcomes</h3><p>Developing advantageous commercial outcomes for clients.</p></div>
                <div class="card"><h3>Contracts Administration</h3><p>End-to-end administration and compliance support.</p></div>
                <div class="card"><h3>Procurement</h3><p>Procurement planning, documentation and negotiation support.</p></div>
                <div class="card"><h3>Claims Advisory</h3><p>Preparation, review and response to contractual claims.</p></div>
                <div class="card"><h3>Adjudication & Arbitration</h3><p>Support through adjudication and arbitration processes.</p></div>
                <div class="card"><h3>Expert Witness</h3><p>Expert witness services on contractual and commercial matters.</p></div>
                <div class="card"><h3>Dispute Resolution</h3><p>Dispute management and resolution services.</p></div>
                <div class="card"><h3>Contracting Methodologies</h3><p>Creating and advising on contracting methodologies.</p></div>
                <div class="card"><h3>Management Frameworks</h3><p>Developing and implementing contracts management frameworks.</p></div>
            </div>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Speak to an advisor</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
