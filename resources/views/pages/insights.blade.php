@php($title = 'Insights — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Insights</h1>
                <p>Articles and updates on cost management, procurement, and project delivery.</p>
            </div>
            <div>
                <img src="{{ url('/images/Values.jpg') }}" alt="Insights" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="card">
                <h3>Coming soon</h3>
                <p>We are preparing articles that share practical tips and lessons learned from our projects.</p>
            </div>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
