@php($title = 'Terms & Conditions — Mush QS')
@php($content = <<<'HTML'
<main>
    <section class="hero">
        <div class="container">
            <h1>Terms & Conditions</h1>
            <p>Website terms of use.</p>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="card">
                <p>By using this website, you agree to use it lawfully and not to infringe the rights of others. Content is provided for general information and does not constitute advice. For any concerns, please contact <a href="mailto:info@mushqs.com">info@mushqs.com</a>.</p>
            </div>
        </div>
    </section>
</main>
HTML)

@include('layouts.app', ['title' => $title, 'slot' => $content])
