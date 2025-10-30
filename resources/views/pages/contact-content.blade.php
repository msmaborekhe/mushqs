<main>
    <section class="hero">
        <div class="container hero-wrap">
            <div>
                <h1>Contact Us</h1>
                <p>Let's discuss your project requirements and how we can help.</p>
            </div>
            <div>
                <img src="{{ url('/images/Conclusion.jpg') }}" alt="Contact" onerror="this.style.display='none'">
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container contact">
            <div class="panel">
                <h2 class="section-title">Send us a message</h2>
                <form method="post" action="/contact">
                    @csrf
                    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
                        <div>
                            <label for="name">Name</label>
                            <input id="name" name="name" type="text" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px">
                        </div>
                    </div>
                    <div style="margin-top:12px">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="4" required style="width:100%;padding:10px;border:1px solid #e5e7eb;border-radius:8px"></textarea>
                    </div>
                    <button class="btn" type="submit" style="margin-top:12px">Send Message</button>
                </form>
            </div>
            <div class="panel">
                <h3>Contact Details</h3>
                <p>Email: <a href="mailto:arthur@mushqs.com.au">arthur@mushqs.com.au</a></p>
                <p>Phone: <a href="tel:+000000000">+00 000 000</a></p>
                <p>Address: Your business address here</p>
            </div>
        </div>
    </section>
</main>
