@php($title = 'Privacy Policy — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container">
            <h1>Privacy Policy</h1>
            <p>How we collect, use and protect your information.</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="card">
                <p>This website collects minimal personal data required to respond to your enquiries. We do not sell your data. For any questions regarding privacy, please contact <a href="mailto:info@mushqs.com">info@mushqs.com</a>.</p>
            </div>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
