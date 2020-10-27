<div class="container">
    <div class="card">
        <img class="card-img-top" src="<?= base_url($headImage); ?>" alt="<?=$headImageAlt;?>" />
        <div class="card-header text-center bg-primary text-light">
            <h4><?= $pageHeadline; ?></h4>
            <span>bis <?=$maxPlayerCount;?> Personen</span>
        </div>
        <div class="card-body">
            <div class="card-text">
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe class="embed-responsive-item wrapper" name="PRIMEBOOKING_ONLINE_RESERVIERUNG" id="PRIMEBOOKING_ONLINE_RESERVIERUNG" src="<?=$bookingurl;?>"></iframe>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p>&nbsp;</p>
        </div>
    </div>
</div>