<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));

$bodyclasses = array();
if ($showsidepost) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has-custom-menu';
}

if (!empty($PAGE->theme->settings->tagline)) {
    $tagline = '<p>'.$PAGE->theme->settings->tagline.'</p>';
} else {
    $tagline = '<!-- There was no custom tagline set -->';
}
if (!empty($PAGE->theme->settings->logo)) {
    $logourl = $PAGE->theme->settings->logo;
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" />
    <meta name="description" content="<?php p(strip_tags(format_text($SITE->summary, FORMAT_HTML))) ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<?php if ($hascustommenu) { ?>
<div id="custommenu"><?php echo $custommenu; ?></div>
<?php } ?>

<div id="page">

    <div id="wrapper" class="clearfix">

<!-- START OF HEADER -->

<div align="center">
			<a href="http://www.fonduri-ue.ro/" target="_blank"><img src="/pix/logo-ue.png" alt=""/></a>
		</div>
        <!-- Title -->
        <div class="row" align="center">			
			<div>
				<p>Programul Operational Sectorial "Cresterea Competitivitatii Economice" - <i><b>Investitii pentru viitorul dumneavoastra</b></i></p>
				<p><b>Sistem Alternativ de Licitatii Electronice SALE - SMIS 46690</b> - Proiect cofinantat prin Fondul European de Dezvoltare Regionala</p>
			</div>
			<br>
			
        </div>

        <div id="page-header">
            <div id="page-header-wrapper" class="wrapper clearfix">

                <div id="header-left">
                    <?php if (!empty($PAGE->theme->settings->logo)) { ?>
                        <a href="<?php echo $CFG->wwwroot; ?>" title="Home"><img id="logo" src="<?php echo $logourl; ?>" alt="Logo" /></a>
                    <?php } else { ?>
                        <h1 class="headermain"><a href="<?php echo $CFG->wwwroot; ?>" title="Home"><?php echo $PAGE->heading ?></a></h1>
                        <div class="tagline"><?php echo $tagline; ?></div>
                    <?php } ?>
                </div>
                <div class="headermenu">
                    <?php
                        echo $OUTPUT->login_info();
                        echo $OUTPUT->lang_menu();
                        echo $PAGE->headingmenu;
                    ?>
                </div>
            </div>
        </div>

<!-- END OF HEADER -->

<!-- START OF CONTENT -->

        <div id="page-content-wrapper" class="wrapper clearfix">
            <div id="page-content">
                <div id="region-main-box">
                    <div id="region-post-box">

                        <div id="region-main-wrap">
                            <div id="region-main">
                                <div class="region-content">
                                    <?php echo $OUTPUT->main_content() ?>
                                </div>
                            </div>
                        </div>

                        <?php if ($hassidepost) { ?>
                        <div id="region-post" class="block-region">
                            <div class="region-content">
                                <?php echo $OUTPUT->blocks_for_region('side-post') ?>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

<!-- END OF CONTENT -->

    </div> <!-- END #wrapper -->

 <div class="row" align="center">
                <div class="col-lg-12">
                    Pentru informaţii detaliate despre celelalte programe operaţionale cofinanţate de Uniunea Europeană vă invităm să vizitaţi <a href='www.fonduri-ue.ro'>www.fonduri-ue.ro</a>
					<br>
					Conţinutul acestui material nu reprezintă în mod obligatoriu poziţia oficială a Uniunii Europene sau a Guvernului României.</p>
                </div>
            </div>


<!-- START OF FOOTER -->
    <div id="page-footer" class="wrapper clearfix">
           <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
        <?php
               echo $OUTPUT->login_info();
               echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
           ?>
       </div>

<!-- END OF FOOTER -->

</div> <!-- END #page -->

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>