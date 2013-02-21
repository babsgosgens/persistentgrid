<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>The Persistent Grid</title>
		<link href="./stylesheets/screen.css" media="screen" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="./js/modernizr.2.6.2.js"></script>
	</head>
	<body class="root">
		<a href="https://github.com/babsgosgens/persistent-grid"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
		<header role="header" class="site-header">
			<div class="full">
				<h1>The Persistent Grid</h1>
				<p>A responsive and (very) lightweight grid <small>still in alpha version</small>.</p>
			</div>
		</header>
		<article>
			<div id="captive" class="persistent collection-of-halfs">
				<section>
					<h1>Features:</h1>
					<ul>
						<li>Responsive</li>
						<li>Fluid</li>
						<li>Nestable</li>
						<li>Fixed gutter widths</li>
						<li>Fixable root</li>
						<li>SASS</li>
					</ul>
				</section
				><section>
					<h1>Browser Compatibility</h1>
					<ul>
						<li>Internet Explorer 8</li>
						<li>Chrome 22.0.1229.94</li>
						<li>Firefox 15.0.1</li>
						<li>Safari 5.1.7</li>
					</ul>
				</section>
			</div>
			<section id="elaborate">
				<h1 class="full">About The Persistent Grid</h1>
				<h2 class="full">How it started</h2>
				<div class="half">
				<p>
					The Persistent Grid started out as a little experiment on how to evenly distribute containers across devices when it evolved into a very lightweight and simple, responsive grid. The idea was to have containers side-by-side with a width and number depending on the viewport size. Like most other responsive grids the columns will resize relative to their viewport. The difference is that the number of columns per row would also vary per viewport. The first version used some common breakpoints that were configurable in the SASS files.
				</p>
				</div
				><div class="half">
				<p>
					By default, all columns would have a preset width that depended on the viewport. For example - a column would be full width on mobile screens, half width on tablets, and third or smaller on desktop and larger screens. Adding classes that linked to rules specifying a width would make a column keep its (relative) size across all viewports except the smallest (mobile) views. Adding a class of persistent would force that relative size on mobile as well - hence the grid's name.
				</p>
				</div>
				<h2 class="full">Where we are now</h2>
				<div class="half">
				<p>
					The current version still implements the persistent class, but the fixed distribution of columns has been taken out. Instead, a number of SASS mixins give you the possibility of configuring your grid in any way that you need. What's interesting, it that you can achieve complex layouts by nesting and combining different column widths.
				</p>
				</div
				><div class="half">
				<p>
					For example, consider a 12-column layout, pretty common around the web these days. Say you want to push your content one column in - resulting in an 11-column wide content area.

					If you now want to split that area into two 5 and 6-column fields, you would assign a width of 5/11 and 6/11 to these tags by instructing the grid to create these column classes of 'five-eleventh' and 'six-eleventh'. You can also use the SASS mixin '@include column-width(5/11);' and '@include column-width(6/11);' on any class or tag in your markup.

					That way, you keep your markup clean.
				</p>
				</div>
					

				<h2 class="full">About The Persistent Grid</h2>
				<p class="third">
					The columns have box-sizing: border-box; applied to them. That way, adding consistent gutter width is a piece of cake. To avoid double gutters in nested columns, apply a class of 'parent' to the containing column. Adding support for older browsers wouldn't be that difficult. By removing the padding and wrapping the column's content inside a div with padding you can also provide a decent experience for those users. The maximum width of the content is set by the root element. This can be any element by applying a class of 'root'.
				</p
				><p class="third">
					None of the columns are floated, so bye-bye clearfix. Instead, they are inline-blocks. There is a catch though: browsers will add a gap between elements the size of a space. This will cause the layout to break as the columns will not fit the parent container. However, this is easily solved by removing any whitespace between adjacent columns or by minifying your html. You can checkout the source of this page to get an idea. 
				</p
				><p class="third">
					If you don't have full control over your markup, a negative right margin will fix the gap between elements. It's a clean hack (if such a thing exists) as the negative margin is subtracted from the block's width without affecting the width of the parent container. Known issue: you must adapt the value of the negative margin as it depends on your font and type size as well as on your configured padding. Also, this may cause small alignment issues in some designs. However, in most use cases the negative margin performs fine.
				</p>
			</section>
			<section>
				<h1 class="full">The Extended Grid</h1>
				<div class="half">
					The Pesistent Grid is being used on various projects which need more then just page layout. I have decided to add my commonly used typography and UI elements to an extended version of The Persistent Grid. It completes the grid with numerous helpers, form styling, buttons, and vertical grid. I will also add JS to this library to aid progressive enhancement. I will provide more detailed information about The Extended Grid soon.
				</div>
			</section>
		</article>
		<footer class="full">
			<p><small>&copy;Copyright 2012-2013 <a href="http://crossinghippos.nl">Babs G&ouml;sgens - Crossing Hippos</a></small></p>
		</footer>
		<script type="text/javascript">
		  WebFontConfig = {
    		google: { families: [ 'Open+Sans:300,400,700:latin' ] }
		  };
		  (function() {
		    var wf = document.createElement('script');
		    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
		      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		    wf.type = 'text/javascript';
		    wf.async = 'true';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(wf, s);
		  })();

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-35733640-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

		</script>
	</body>
<html>