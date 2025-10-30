@php($title = 'Commercial Management — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Commercial Management</h1>
                <p>COMMERCIAL MANAGEMENT IS THE ART OF IDENTIFYING AND DEVELOPING BUSINESS OPPORTUNITIES AND ESTABLISHING RELEVANT FRAMEWORKS TO MANAGE THE PROJECT AND CONTRACT IN A COLLABORATIVE MANNER.</p>
            </div>
            <div>
                <img src="{{ url('/images/Cover.jpg') }}" alt="Commercial Management" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Commercial Management Overview</h2>
            <p>Successful projects demand strong commercial management and leadership, robust commercial controls, strategic procurement advice and a sound contracting strategy. Applying these to the early stages of a project, ensures the profitable management of projects and contracts from inception to completion and further ensures the identification and development of business opportunities.</p>
            <p>Through its services, Peer Advisory Group helps businesses to seize up the opportunities and maintain a consistent growth while fulfilling the regulatory requirements for its clients and stakeholders. We provide consistent support and assistance to create long term desirable outcomes for the organisations we provide services to.</p>
            <p>With years of experience and a commitment to setting and upholding the highest standards of excellence and integrity, Peer Advisory Group implements well-established and effective processes to reduce project delays and legal costs arising from contractual issues. Disputes may result in unforeseeable harms to businesses and their relationships, which may further result in exceedingly long delays to resolve disputes through arbitration or litigation. We therefore encourage our clients to foster collaboration and use of early intervention techniques to resolve disputes and prevent the need for formal dispute resolution procedures.</p>
            <p>Our team acts as an extension to your organisation and provides expertise and reliable advice. We collaborate effectively to improve project outcomes through:</p>

            <h3>Services included:</h3>
            <ul>
                <li>Commercial Management</li>
                <li>Contracts Advisory</li>
                <li>Contracts Administration</li>
                <li>Cost Engineering</li>
                <li>Cost Estimating</li>
                <li>Project Controls Services</li>
                <li>Procurement Advisory and Management</li>
                <li>Commercial Risk Management</li>
                <li>Cost Analysis and Forecasting</li>
            </ul>

            <h3>Consultation and Advisory:</h3>
            <ul>
                <li>Feasibility Studies</li>
                <li>Compliance with relevant legislations and/or statutory guidelines</li>
                <li>Business Case Developments</li>
            </ul>

            <h3>Preparation of relevant documentation:</h3>
            <ul>
                <li>Design and Project Briefs</li>
                <li>Tender Documentation</li>
                <li>Contractual Documentation</li>
            </ul>

            <ul>
                <li>Creating and advising on contracting methodologies</li>
                <li>Developing and implementing risk management frameworks</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Discuss your project</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
