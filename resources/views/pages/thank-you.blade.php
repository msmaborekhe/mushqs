@php($title = 'Thank You — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container">
            <h1>Thank you</h1>
            <p>Your message has been sent. We will get back to you shortly.</p>
            <p><a class="btn" href="/">Return to Home</a></p>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
