@php($title = 'Procurement — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Procurement</h1>
                <p>PROCUREMENT: THE ACT TO OBTAIN GOODS AND SERVICES FOR A SOLICITED COMPANY IN THE URGE OF SUPPORT TO FULFIL ITS OPERATIONS AND/OR OBLIGATIONS.</p>
            </div>
            <div>
                <img src="{{ url('/images/Cost.jpg') }}" alt="Procurement" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Procurement Services</h2>
            <p>Peer Advisory efficiently collaborates with its clients in the procurement process to assess, develop, and implement expedient procurement and purchasing models, as well as supporting organisations through the most beneficial contemporary practice policies, procedures and toolkits to ensure both cost-efficiency and compliance.</p>
            <p>Peer Advisory's approach brings the most valuable outcomes through reviewing relevant existing policies, procedures, systems, and current spend and purchasing behaviours and practices by key business areas. Our consultants are highly acclaimed for having the ability to align with current organisation objectives, best practices and latest changes in legislation.</p>
            <p>Peer Advisory Group ensures that multiple stakeholders are engaged in the procurement and transaction processes via workshops or interviews in order to attain high-level analysis of opportunities.</p>
            <p>Our consultants have gained a holistic approach to identify key points and realize the best outcomes. They have an in-depth and proven expertise in delivering.</p>

            <h3>Services include:</h3>
            <ul>
                <li>Leading Procurement Activities, ranging from strategic sourcing to contract execution</li>
                <li>Leading Tender evaluation processes, including:
                    <ul>
                        <li>the initial review of Tender responses</li>
                        <li>the evaluation of non-price and commercial price schedule criteria</li>
                        <li>establishment of the tender evaluation committee</li>
                        <li>calculation of the tender assessment scoring</li>
                        <li>preparation of TAC reports, which outlines the assessment methodology and overall recommendations for the Tender Review Panel</li>
                    </ul>
                </li>
                <li>Leading the Tender Assessment meetings</li>
                <li>Current state analysis including identification of key gaps</li>
                <li>Opportunity identification</li>
                <li>Prioritisation considering indicative effort and dependencies</li>
                <li>Achieving the best value for money throughout the process</li>
                <li>Drafting or revising agreed documents in line with proposed changes</li>
                <li>Providing recommendations for governance, process, systems and functional scope</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Plan your procurement</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
