@php($title = 'Engineering Management — Services — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Engineering Management</h1>
                <p>Engineering management combines technical problem-solving with organisational, administrative, legal, and planning capabilities to achieve excellence in operational performance for complex, engineering-driven projects.</p>
            </div>
            <div>
                <img src="{{ url('/images/Cover.jpg') }}" alt="Engineering Management" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <h2 class="section-title">Engineering Management Services</h2>
            <p>Mush QS draws on the multi-disciplinary skills of our its team members to achieve the optimal technical outcome for its clients. Our longstanding specialists provide integrated engineering solutions required by every industry's challenges.
            Our expertise portfolio ranges from mining, food and agriculture, defence, oil and gas, transport infrastructure, renewables, civil and construction and more.</p>
            <p>With agile project management approaches to a wide variety of industry sectors, Mush QS assists companies to improve their performance in developing strategies to increase overall benefit to its project presence.</p>
            <p>Mush QS provides expertise services in the area of project management and engineering. Its team of Project Managers and Project Engineers can provide in-depth know-how and a wealth of experience to technically complicated matters. Our team is committed to deliver excellent project outcomes.</p>

            <h3>Services include:</h3>
            <ul>
                <li>Project Management</li>
                <li>Engineering Consultancy Services, including following disciplines:
                    <ul>
                        <li>Mechanical Engineering</li>
                        <li>Civil Engineering</li>
                        <li>Electrical Engineering</li>
                    </ul>
                </li>
                <li>Project Engineering</li>
            </ul>
        </div>
    </section>

    <section>
        <div class="container"><a class="btn" href="/contact">Talk to our team</a></div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
