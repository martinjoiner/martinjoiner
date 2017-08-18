
<h1>Visual Portfolio</h1>

<p class="portfolioIntro">Projects with notable visual appeal. <br>Everything on this page has leveraged my visual design skills as well as my programming abilities.</p> 

<?php

$arrSlies[] = [	'header' 	=> 'BookFetch branding',
                'blurb' 	=> 'Logo design, colour scheme and typography style guide to fit in with the book industry.',
                'url' 		=> 'bookfetch.co.uk',
                'image' 	=> '/portfolio/images/BookFetch.jpg'
];

$arrSlies[] = [ 'header' 	=> 'Compare Contract Hire branding',
                'blurb' 	=> 'Logo design, visual branding, responsive site design.',
				'url' 		=> 'www.comparecontracthire.com',
				'image' 	=> '/portfolio/images/CCH-Screenshot.png'
];

$arrSlies[] = [ 'header' 	=> 'Open Mic Finder branding',
                'blurb' 	=> 'Logo design, colour scheme and typography, responsive site design.',
				'url' 		=> 'openmicfinder.co.uk',
				'image' 	=> '/portfolio/images/OpenMicFinder.jpg'
];

$arrSlies[] = [ 'header' 	=> 'The Shout app',
                'blurb' 	=> 'Open source single page app. Built with OO JavaScript, Gulp.',
				'url' 		=> 'shout.butterscotchworld.co.uk',
				'reponame' 	=> 'shout-web-app',
				'image' 	=> '/portfolio/images/ShoutApp.jpg'
];

$arrSlies[] = [ 'header' 	=> 'Storywalks branding',
                'blurb' 	=> 'Logo design, typography, project showcase mini-site and responsive web-app ',
				'url' 		=> 'storywalks.info',
				'image' 	=> '/portfolio/images/Storywalks.jpg'
];

$arrSlies[] = [	'header' 	=> 'Circa Maps Project',
                'blurb' 	=> 'Generative design project. Algorithmically grows maps of fictional cities. Visualises coordinate geometry and generates SVG markup.',
				'url' 		=> 'circa.butterscotchworld.co.uk',
				'reponame' 	=> 'circa-maps',
				'image'		=> '/portfolio/images/Circa-Maps.jpg'
];

$arrSlies[] = [	'header' 	=> 'Mackay Design Studio',
                'blurb' 	=> 'Stylish minimalist design brief from client with design background. Responsive site with CSS animations.',
				'url' 		=> 'www.mackaydesignstudio.co.uk',
				'image'		=> '/portfolio/images/Mackay-Screenshot.png'
];

$arrSlies[] = [	'header' 	=> 'SSS branding',
                'blurb' 	=> 'Logo design with multiple variations and brand style guide',
                'image'		=> '/portfolio/images/SSS-Style-Guide.jpg'
];

$arrSlies[] = [	'header' 	=> 'Word Matrix',
                'blurb' 	=> 'An in-browser mock-up of an idea for a physical interactive art installation. Built with OO JavaScript, PHP, Twitter API, Composer, Microajax.',
				'url' 		=> 'matrix.butterscotchworld.co.uk',
				'reponame' 	=> 'word-matrix',
				'image'		=> '/portfolio/images/Word-Matrix.jpg'
];

$arrSlies[] = [	'header' 	=> 'Image-to-web-page Converter',
                'blurb' 	=> 'PHP application that takes an image file and produces styled markup (a web page) that appears as an abstracted form of the image.
								PHP, Composer, JavaScript, jQuery, Gulp.',
				'url' 		=> 'pixels.butterscotchworld.co.uk',
				'reponame' 	=> 'image-to-web-page',
				'image'		=> '/portfolio/images/image-to-web-page.jpg'
];

$arrSlies[] = [	'header' 	=> 'Bristol Open',
                'blurb' 	=> 'Budget logo and tournament entry system for a formal fencing competition.',
				'url' 		=> 'bristolopen.info',
				'image' 	=> '/portfolio/images/BristolOpen.jpg'
];


foreach ($arrSlies as $i => $thisSlide) {
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

