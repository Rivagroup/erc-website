<!doctype html>
<html lang="de" class="bg-light">

<head>
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title><?= $title; ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="robots" content="<?= $robots ?>" />
    <meta name="description" content="<?= $description ?>" />
    <meta name="keywords" content="<?= $keywords_private.','.$keywords_alldomains; ?>" />
    <meta name="author" content="<?= $author ?>" />
    <meta name="co-author" content="<?= $co_author ?>" />
    <meta name="pragma" content="<?= $cache ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/erc.bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.1/css/all.css" crossorigin="anonymous">
    <link href="<?= base_url('assets/favicon.png'); ?>" rel="icon" type="image/png" />
	<?= $meta_postal ?>
    <?= $meta_og ?>
    <?= $meta_itemprop ?>
    <?= $meta_links ?>
    <link href="<?= base_url('assets/favicon.png'); ?>" rel="icon" type="image/png" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="<?= base_url(); ?>">
            <img src="<?= base_url('assets/favicon.png'); ?>" width="auto" height="32" class="d-inline-block align-bottom" alt="">
            Escaperoom Chemnitz
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('oeffnungszeiten'); ?>">Öffnungszeiten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('preise'); ?>">Preise</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Angebote</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item disabled" href="<?= base_url('angebote'); ?>">Übersicht</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('kindergeburtstag'); ?>">Kindergeburtstag</a>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/schuelerpakete'); ?>">Schülerpakete</a>
                        <a class="dropdown-item disabled" href="<?= base_url('angebote/partyraeume'); ?>">Partyräume</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Escaperooms</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url('escaperooms'); ?>">Übersicht</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('escaperooms/viruslabor'); ?>">Viruslabor</a>
                        <a class="dropdown-item" href="<?= base_url('escaperooms/gefaengnis'); ?>">Gefängis</a>
                        <a class="dropdown-item" href="<?= base_url('escaperooms/psychiatrie'); ?>">Psychiatrie</a>
                        <a class="dropdown-item" href="<?= base_url('escaperooms/jigsaw'); ?>">Jigsaw</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Jetzt Buchen</a>
                    <div class="dropdown-menu mb-3">
                        <a class="dropdown-item" href="<?= base_url('buchung/viruslabor'); ?>">Viruslabor buchen</a>
                        <a class="dropdown-item" href="<?= base_url('buchung/gefaengnis'); ?>">Gefängis buchen</a>
                        <a class="dropdown-item" href="<?= base_url('buchung/psychiatrie'); ?>">Psychiatrie buchen</a>
                        <a class="dropdown-item" href="<?= base_url('buchung/jigsaw'); ?>">Jigsaw buchen</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://shop.spielcenter-chemnitz.de/index.php?id_category=10&controller=category" target="_blank">Gutscheine</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('hygienekonzept'); ?>">Hygienekonzept</a>
                </li>
            </ul>
        </div>
    </nav>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
<div class="container">
    <? $this->load->view($main_content) ?>
</div>

    <footer class="bg-light">
        <hr />
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="tel:+4937133423340">
                            <i class="fas fa-phone"></i> Jetzt anrufen.
                        </a>
                    </p>
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="mailto:kontakt@spielcenter-chemnitz.de">
                            <i class="fas fa-envelope"></i> E-Mail schreiben.
                        </a>
                    </p>
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="http://maps.google.com/maps?saddr=&daddr=Wladimir%20Sagorski%20Str.%2020,%2009122%20Chemnitz&sensor=true" target="_blank">
                            <i class="fas fa-route"></i> Anfahrt
                        </a>
                    </p>
                </div>
                <div class="col-md-8 col-sm-12">
                <div class="row text-center">
                    <div class="col"><a href="https://spielcenter-chemnitz.de" target="_blank"><img class="img-fluid" src="<?= base_url('assets/x_promo/spielcenter_chemnitz_logo.svg') ?>" alt="Spielcenter Chemnitz"></a></div>
                    <div class="col"><a href="https://bowling-chemnitz.de" target="_blank"><img class="img-fluid" src="<?= base_url('assets/x_promo/bowling_chemnitz_logo.svg') ?>" alt="Bowling Center Chemnitz"></a></div>
                    <div class="col"><a href="https://minigolf-chemnitz.de" target="_blank"><img class="img-fluid" src="<?= base_url('assets/x_promo/minigolf_chemnitz_logo.svg') ?>" alt="Schwarzlicht Adventure Minigolf Chemnitz"></a></div>
                    <div class="col"><a href="https://lasergame-chemnitz.de" target="_blank"><img class="img-fluid" src="<?= base_url('assets/x_promo/lasergame_chemnitz_logo.svg') ?>" alt="Lasertag / Lasergame Chemnitz"></a></div>
                </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="<?= base_url('agb'); ?>">
                            <i class="fas fa-file-contract"></i> AGB
                        </a>
                    </p>
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="<?= base_url('datenschutz'); ?>">
                            <i class="fas fa-balance-scale"></i> Datenschutz
                        </a>
                    </p>
                    <p>
                        <a class="btn btn-sm btn-block btn-primary" href="<?= base_url('impressum'); ?>">
                            <i class="fas fa-sign"></i> Impressum
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>