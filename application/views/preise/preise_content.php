<div class="container">
    <div class="jumbotron jumbotron-fluid bg-dark text-light rounded">
        <div class="container">
            <h1 class="display-4">Speisekarte</h1>
            <p class="lead">
                Unsere aktuelle Speise- und Getränkekarte steht Ihnen hier zum download bereit.
                <a class="btn btn-block btn-primary" href="<?= base_url('assets/speisekarte.pdf'); ?>">
                    <i class="fas fa-file-download"></i> Speisekarte herunterladen
                </a>
            </p>
        </div>
    </div>
    <section>
        <article>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fas fa-coins"></i> Preise</h4>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <div class="table-responsive">
                            <table class="table table-striped table-inverse">
                                <tr>
                                    <td>Vollzahler <small>pro Person</small></td>
                                    <td>11,00 €</td>
                                </tr>
                                <tr>
                                    <td>Ermäßigt* <small>pro Person</small></td>
                                    <td>9,00 €</td>
                                </tr>
                                <tr class="bg-primary text-white">
                                    <td>Raummiete**</td>
                                    <td>siehe Anmerkung</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer small">
                    <p class="text-muted">
                        *Der ermäßigte Tarif darf nur von Schülern, Studenten und Auszubildenden, sowie jenen, die das
                        18. Lebensjahr noch nicht vollendet haben, in Anspruch genommen werden.
                    </p>
                    <p class="text-muted">
                        **Die Raummiete von 60,00€ wird durch die Anzahl der spielenden Personen geteilt und mit dem regulären Preis addiert. Die Summe ergibt den kompletten Eintrittspreis je Person.
                    </p>
                </div>
            </div>
        </article>
    </section>
</div>