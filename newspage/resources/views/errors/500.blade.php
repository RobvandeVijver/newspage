@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2>Error 500</h2>
                        <p>Excuses voor het ongemak dit is onze fout.</p>
                        <p>De pagina waarup u zich momenteel bevind heeft een interne serverfout.</p>
                        <br>
                        <br>
                        <p>We raden u aan de pagina te verversen met de toetsencombinatie CTRL + F5.</p>
                        <p>Anders raden we u aan contact met ons op te nemen via het contact formulier.</p>
                        <br>
                        <br>
                        <div>
                            <p>Klik op deze knop om verwezen te worden naar het contact formulier:</p>
                            <form action="/contact">
                                <button type="submit" class="button">Contact</button>
                            </form>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
