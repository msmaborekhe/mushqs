@php($title = 'Tender Preparation — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Tender Preparation</h1>
                <p>TENDERING: THE CHALLENGING PROCESS OF CREATING A PROPOSAL FOR ACCEPTANCE IN SATISFACTION TO MEET A SOLICITED BUSINESS' REQUIREMENTS AND NEEDS.</p>
            </div>
            <div>
                <img src="{{ url('/images/About us.jpg') }}" alt="Tender Preparation" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Tender Preparation and Evaluation Services</h2>
            <p>Bidding can be a complex and demanding process, which can require tailored submissions due to its dynamic challenges. Despite other factors, the quality of the tender submissions can determine the winning bidder.</p>
            <p>Our expert team will assist you in tender writing and bid management in order to prepare outstanding tender documents to put your business ahead of the competition.</p>

            <h3>Services include:</h3>
            <ul>
                <li>Guidance throughout the tender and/or procurement portals</li>
                <li>Access and review tender documents and identify critical requirements</li>
                <li>Guidance throughout the tender process, from expression of interest to obtaining invitations to tender and tender submissions</li>
                <li>Review and advice on applicable tenders for your business</li>
                <li>Registration of your business</li>
                <li>Preparation of tender proposals and/or submissions</li>
                <li>Developing tender strategies and tailored tender tracking services</li>
                <li>Developing of capability statements</li>
                <li>Customised, compelling and persuasive narrative, ensuring to showcase the business' highlights and key differentiators</li>
                <li>Market analysis and SME advice on new market entry opportunities</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Start your tender</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
