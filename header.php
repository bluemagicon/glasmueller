<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-title" content="<?= bloginfo('name') ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php /*
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-regular.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-700.woff2" as="font" crossorigin="anonymous" />
	*/ ?>

	<?php wp_head(); ?>

</head>


<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_header 		= get_field('opt_header', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_header	= get_field('override_header') ? get_field('instance_header')['opt_header'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_header	= $override_header ?: $global_header;

// ----------------------------------------------------------------------
?>


<body <?php body_class('w-body'); ?>>

	<?php if($page_header['show_socialmedia'] && $global_social) { ?>
		<div class="header-meta">
			<div class="header-meta-inner">
				<div class="header-meta-item">
					<?php $social_profiles = $global_social;
					include 'tpl/partials/social.php'; ?>
				</div>
			</div>
		</div>
	<?php } ?>
	<header class="header header--sticky" id="header" role="banner">
		<div class="header-inner">
			<div class="header-container">
				<div class="header-col">
				    <div class="header-item header-item--logo">
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
					</div>
				</div>
				<div class="header-col">
					<?php include 'tpl/partials/header-nav.php'; ?>
                    <div class="header-contact-own uk-visible@m">
                        <span>Kontakt & 24h Hotline</span>
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
					<?php include 'tpl/partials/calltoaction.php'; ?>
					<?php include 'tpl/partials/header-contact.php'; ?>
					<?php include 'tpl/partials/header-lang.php'; ?>
					<?php include 'tpl/partials/header-nav-mobile.php'; ?>
				</div>
			</div>
		</div>
	</header>
