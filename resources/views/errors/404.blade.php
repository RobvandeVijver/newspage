@extends('common.master')

@section('content')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-16 col-md-16 col-sm-16">
                <div class="left_content">
                    <div class="single_post_content">
                        <h2>Error 404</h2>
                        <p>De pagina waarup u zich momenteel bevind is niet beschikbaar en kan niet gevonden worden.</p>
                        <br>
                        <p>Dit zijn de mogelijke oorzaken:</p><br>
                        <li>Deze pagina is verwijderd.</li>
                        <li>De naam is gewijzigd.</li>
                        <li>Of deze pagina is tijdelijk niet beschikbaar door onderhoud.</li>
                        <br>
                        <br>
                        <p>We raden u aan te letten op eventuele spellingsfouten als u het addres heeft ingetypt.</p>
                        <p>Anders raden we u aan terug te gaan naar de home pagina en vanuit daar de knoppen te gebruiken.</p>
                        <div>
                            <p>Klik op deze knop om terug te gaan naar de home pagina:</p>
                            <form action="/">
                                <button type="submit" class="button">Home</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
