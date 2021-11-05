<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>


<div class="footer-custom" id="footer">
    <div class="alignwide">
        <div class="contact-teaser uk-flex uk-flex-wrap uk-flex-between uk-flex-middle">
            <h2><strong>Wir freuen uns</strong> auf Sie.</h2>
            <div>
                <a href="tel:<?= $global_contact['telefonnummer'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20">
                        <path id="FontAwsome_phone-volume_" data-name="FontAwsome (phone-volume)" d="M3.8,19.8a12.98,12.98,0,0,1,0-18.357.672.672,0,0,1,.831-.095L7.164,2.935a.671.671,0,0,1,.268.819L6.166,6.918a.671.671,0,0,1-.69.419L3.3,7.119a10.376,10.376,0,0,0,0,7.012l2.18-.218a.671.671,0,0,1,.69.419L7.432,17.5a.671.671,0,0,1-.268.819L4.633,19.9A.671.671,0,0,1,3.8,19.8ZM9.653,3.73a2.5,2.5,0,0,1,0,2.541.471.471,0,0,1-.731.1l-.233-.224A.472.472,0,0,1,8.6,5.585a1.252,1.252,0,0,0,0-1.17.472.472,0,0,1,.088-.563l.233-.224A.471.471,0,0,1,9.653,3.73ZM13.239.168a7.511,7.511,0,0,1,0,9.665.471.471,0,0,1-.686.036l-.226-.217a.47.47,0,0,1-.036-.64,6.259,6.259,0,0,0,0-8.024.47.47,0,0,1,.036-.64l.226-.217a.471.471,0,0,1,.686.036Zm-1.8,1.756a5.007,5.007,0,0,1,0,6.154.471.471,0,0,1-.7.051l-.227-.218a.468.468,0,0,1-.05-.622,3.755,3.755,0,0,0,0-4.576.468.468,0,0,1,.05-.622l.227-.218a.471.471,0,0,1,.7.051Z" transform="translate(0 0)" fill="#e4032e"/>
                    </svg>
                    <?= $global_contact['telefonnummer'] ?>
                </a>
                <a href="mailto:<?= $global_contact['email_adresse']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.994" height="20" viewBox="0 0 19.994 20">
                        <path id="FontAwsome_paper-plane_" data-name="FontAwsome (paper-plane)" d="M18.6.1.5,10.539a.938.938,0,0,0,.086,1.687l4.152,1.742,11.22-9.889a.234.234,0,0,1,.336.324L6.883,15.866V19.01a.937.937,0,0,0,1.66.617l2.48-3.019,4.866,2.039a.94.94,0,0,0,1.289-.711L19.99,1.064A.937.937,0,0,0,18.6.1Z" transform="translate(-0.01 0.031)" fill="#e4032e"/>
                    </svg>
                    <?= $global_contact['email_adresse']; ?>
                </a>
            </div>
        </div>
        <div class="location">
            <svg xmlns="http://www.w3.org/2000/svg" width="48.75" height="65" viewBox="0 0 48.75 65">
                <path id="FontAwsome_map-marker-alt_" data-name="FontAwsome (map-marker-alt)" d="M21.87,63.689C3.424,36.947,0,34.2,0,24.375a24.375,24.375,0,0,1,48.75,0c0,9.828-3.424,12.572-21.87,39.314a3.048,3.048,0,0,1-5.01,0Zm2.505-29.157A10.156,10.156,0,1,0,14.219,24.375,10.156,10.156,0,0,0,24.375,34.531Z" fill="#e4032e"/>
            </svg>
            <strong class="has-white-color has-text-color">Glas Müller GmbH</strong>
            <p class="has-white-color has-text-color">Cloppenburger Str. 33,  26135 Oldenburg</p>
        </div>
    </div>
</div>
<footer class="footer">
	<div class="footer-inner">
		<div class="uk-grid uk-grid-large uk-flex-between">

			<?php if($page_footer['show_contact'] && $global_contact) { ?>
				<div class="uk-width-1-2@m uk-width-auto@l">
					<div class="footer-item footer-contact">
						<?php include 'tpl/partials/contact.php'; ?>
					</div>
				</div>
			<?php } ?>


			<?php if($page_footer['footer_text']) { ?>
				<div class="uk-width-1-2@m uk-width-1-3@l">
					<div class="footer-item footer-text">
						<?= $global_footer['footer_text'] ?>
					</div>
				</div>
			<?php } ?>


			<div class="uk-width-auto@l uk-text-right@l">
				<?php if($page_footer['show_logo'] && $page_logos) { ?>
					<div class="footer-item footer-logo">
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
					</div>
				<?php } ?>
				<?php if(has_nav_menu('footer')) { ?>
					<div><div class="footer-item footer-menu">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'fallback_cb' => false)); ?>
					</div></div>
				<?php } ?>
				<?php if($page_footer['show_socialmedia'] && $global_social) { ?>
					<div><div class="footer-item footer-social">
						<?php $social_profiles = $global_social;
						include 'tpl/partials/social.php'; ?>
					</div></div>
				<?php } ?>
			</div>


		</div>
	</div>
</footer>

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
