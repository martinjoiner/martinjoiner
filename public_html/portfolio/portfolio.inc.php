
<h1>Visual Portfolio</h1>

<p class="portfolioIntro">Projects with notable visual appeal. <br>Everything on this page has leveraged my visual design skills as well as my programming abilities.</p> 

<?php

$arrSlides[] = [	'header' 	=> 'BookFetch branding',
                'blurb' 	=> 'Logo design, colour scheme and typography style guide to fit in with the book industry.',
                'url' 		=> 'https://bookfetch.co.uk',
                'image' 	=> '/portfolio/images/BookFetch.jpg'
];

$arrSlides[] = [ 'header' 	=> 'Compare Contract Hire branding',
                'blurb' 	=> 'Logo design, visual branding, responsive site design.',
				'url' 		=> 'https://www.comparecontracthire.com',
				'image' 	=> '/portfolio/images/CCH-Screenshot.png'
];

$arrSlides[] = [ 'header' 	=> 'Open Mic Finder branding',
                'blurb' 	=> 'Logo design, colour scheme and typography, responsive site design.',
				'url' 		=> 'https://openmicfinder.com/UK',
				'image' 	=> '/portfolio/images/OpenMicFinder.jpg'
];

$arrSlides[] = [ 'header' 	=> 'The Shout app',
                'blurb' 	=> 'Open source single page app. Built with OO JavaScript, Gulp.',
				'url' 		=> 'http://shout.butterscotchworld.co.uk',
				'reponame' 	=> 'shout-web-app',
				'image' 	=> '/portfolio/images/ShoutApp.jpg'
];

$arrSlides[] = [ 'header' 	=> 'Storywalks branding',
                'blurb' 	=> 'Logo design, typography, project showcase mini-site and responsive web-app ',
				'url' 		=> 'https://storywalks.info',
				'image' 	=> '/portfolio/images/Storywalks.jpg'
];

$arrSlides[] = [	'header' 	=> 'Circa Maps Project',
                'blurb' 	=> 'Generative design project. Algorithmically grows maps of fictional cities. Visualises coordinate geometry and generates SVG markup.',
				'url' 		=> 'https://circa.butterscotchworld.co.uk',
				'reponame' 	=> 'circa-maps',
				'image'		=> '/portfolio/images/Circa-Maps.jpg'
];

$arrSlides[] = [	'header' 	=> 'Mackay Design Studio',
                'blurb' 	=> 'Stylish minimalist design brief from client with design background. Responsive site with CSS animations.',
				'url' 		=> 'https://www.mackaydesignstudio.co.uk',
				'image'		=> '/portfolio/images/Mackay-Screenshot.png'
];

$arrSlides[] = [	'header' 	=> 'SSS branding',
                'blurb' 	=> 'Logo design with multiple variations and brand style guide',
                'image'		=> '/portfolio/images/SSS-Style-Guide.jpg'
];

$arrSlides[] = [	'header' 	=> 'Word Matrix',
                'blurb' 	=> 'An in-browser mock-up of an idea for a physical interactive art installation. Built with OO JavaScript, PHP, Twitter API, Composer, Microajax.',
				'url' 		=> 'https://matrix.butterscotchworld.co.uk',
				'reponame' 	=> 'word-matrix',
				'image'		=> '/portfolio/images/Word-Matrix.jpg'
];

$arrSlides[] = [	'header' 	=> 'Image-to-web-page Converter',
                'blurb' 	=> 'PHP application that takes an image file and produces styled markup (a web page) that appears as an abstracted form of the image.
								PHP, Composer, JavaScript, jQuery, Gulp.',
				'url' 		=> 'https://pixels.butterscotchworld.co.uk',
				'reponame' 	=> 'image-to-web-page',
				'image'		=> '/portfolio/images/image-to-web-page.jpg'
];

$arrSlides[] = [	'header' 	=> 'Bristol Open',
                'blurb' 	=> 'Budget logo and tournament entry system for a formal fencing competition.',
				'image' 	=> '/portfolio/images/BristolOpen.jpg'
];


foreach ($arrSlides as $i => $thisSlide) {
	?>
	<div class="slide active" id="slide<?=$i?>">
		<div class="notes">
			<h2><?=$thisSlide['header']?></h2>
			<p><?=$thisSlide['blurb']?></p>
			<p><a target="_blank" href="http://<?=$thisSlide['url']?>"><?=$thisSlide['url']?></a></p>
			<?php if( isSet( $thisSlide['reponame'] ) ){
				?>
				<p>[ <a target="_blank" href="https://github.com/martinjoiner/<?=$thisSlide['reponame']?>">See the code</a> ]</p>
				<?php
			} ?>
		</div>
        <div class=innerStage>
            <img class=slideImage src="<?=$thisSlide['image']?>" alt="Screenshot of <?=$thisSlide['header']?>">
		</div>
	</div>
	<?php
}

?>

<div class="bottomSpace">&nbsp;</div>

