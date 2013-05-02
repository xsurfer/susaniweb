
<div id="loading"></div>
<div id="slideshow"></div>

<div id="thumbs">
	<ul class="thumbs noscript">
		<li>
			<a class="thumb" href="/images/studio/img01.jpg" title=""> 
				<img height="50" src="/images/studio/img01.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img02.jpg" title="">
				<img height="50" src="/images/studio/img02.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img03.jpg" title="">
				<img height="50" src="/images/studio/img03.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img05.jpg" title="">
				<img height="50" src="/images/studio/img05.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img06.jpg" title="">
				<img height="50" src="/images/studio/img06.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img07.jpg" title="">
				<img height="50" src="/images/studio/img07.jpg" alt="" />
			</a>
		</li>
		<li>
			<a class="thumb" href="/images/studio/img08.jpg" title="">
				<img height="50" src="/images/studio/img08.jpg" alt="" />
			</a>
		</li>
	</ul>
</div>


<script type="text/javascript">

var onMouseOutOpacity = 0.67;
$('#thumbs ul.thumbs li').opacityrollover({
	mouseOutOpacity:   onMouseOutOpacity,
	mouseOverOpacity:  1.0,
	fadeSpeed:         'fast',
	exemptionSelector: '.selected'
});

jQuery(document).ready(function($) {
	var gallery = $('#thumbs').galleriffic({
		delay:                     2500,
		numThumbs:                 15,
		preloadAhead:              10,
		enableTopPager:            true,
		enableBottomPager:         true,
		maxPagesToShow:            7,
		imageContainerSel:         '#slideshow',
		controlsContainerSel:      '#controls',
		captionContainerSel:       '#caption',
		loadingContainerSel:       '#loading',
		renderSSControls:          true,
		renderNavControls:         true,
		playLinkText:              'Play Slideshow',
		pauseLinkText:             'Pause Slideshow',
		prevLinkText:              '&lsaquo; Previous Photo',
		nextLinkText:              'Next Photo &rsaquo;',
		nextPageLinkText:          'Next &rsaquo;',
		prevPageLinkText:          '&lsaquo; Prev',
		enableHistory:             false,
		autoStart:                 false,
		syncTransitions:           true,
		defaultTransitionDuration: 900,
		onSlideChange:             function(prevIndex, nextIndex) {
			// 'this' refers to the gallery, which is an extension of $('#thumbs')
			this.find('ul.thumbs').children()
				.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
				.eq(nextIndex).fadeTo('fast', 1.0);
		},
		onPageTransitionOut:       function(callback) {
			this.fadeTo('fast', 0.0, callback);
		},
		onPageTransitionIn:        function() {
			this.fadeTo('fast', 1.0);
		}
	});
});

</script>