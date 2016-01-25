<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="author" content="Tania Rascia">
	<meta name="description" content="<?php if(!is_front_page()) { ?><?php wp_title();?> - Tutorials by <?php bloginfo('name');?><?php } else { ?><?php bloginfo('description'); }?> ">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

		<?php wp_head(); ?>

		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-42068444-1', 'auto');
			ga('send', 'pageview');

		</script>

</head>

<body>
	<header>
		<div class="flex vertical">
			<div class="box one-fourth">
				<a href="<?php bloginfo('wpurl');?>"><img src="<?php bloginfo('template_directory');?>/images/tr.png" class="logo-image" alt="Tania Rascia"></a>
			</div>
			<div class="box three-fourths social">
				<a href="https://taniarascia.github.io/new-moon"><img src="<?php bloginfo('template_directory');?>/images/newmoon.png" class="darken" alt="New Moon Syntax Theme"></a>&nbsp;
				<a href="https://twitter.com/taniarascia"><img src="<?php bloginfo('template_directory');?>/images/twitter.png" class="darken" alt="Twitter"></a>&nbsp;
				<a href="https://github.com/taniarascia"><img src="<?php bloginfo('template_directory');?>/images/github-dark.png" class="darken" alt="GitHub"></a>&nbsp;
				<a href="<?php bloginfo('wpurl');?>/feed"><img src="<?php bloginfo('template_directory');?>/images/rss.png" class="darken" alt="RSS Feed"></a>
			</div>
		</div>
	</header>
