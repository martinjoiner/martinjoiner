
<h1>Portfolio</h1>

<p class="portfolioIntro">All the projects below leverage my design, development and UX skills. Additional skills are listed individually.</p> 

<?php

$arrSlies[] = [ 'header' 	=> 'Compare Contract Hire',
				'blurb' 	=> 'Responsive automotive contract comparison site. Via job at Carmen Data. ColdFusion, custom API, JavaScript, CSS.',
				'url' 		=> 'www.comparecontracthire.com',
				'image' 	=> '/portfolio/images/CCH-Screenshot.png'
];

$arrSlies[] = [ 'header' 	=> 'Open Mic Finder',
				'blurb' 	=> 'Responsive user-generated content site with custom CMS now attracting over 20,000 unique users monthly. Self-initiated. Built in PHP, 
								JavaScript, jQuery, several APIs: Twitter, <a target="_blank" href="http://www.meetup.com/meetup_api/" class="invisible" title="Meetup API">Meetup</a>, Google Maps, <a target="_blank" href="http://www.transportapi.com/" class="invisible" title="Transport API">Transport</a>.',
				'url' 		=> 'openmicfinder.co.uk',
				'image' 	=> '/portfolio/images/OpenMicFinder.jpg'
];

$arrSlies[] = [ 'header' 	=> 'The Shout app',
				'blurb' 	=> 'Open source single page app. Built with OO JavaScript, Gulp.',
				'url' 		=> 'shout.butterscotchworld.co.uk',
				'reponame' 	=> 'shout-web-app',
				'image' 	=> '/portfolio/images/ShoutApp.jpg'
];

$arrSlies[] = [ 'header' 	=> 'Storywalks',
				'blurb' 	=> 'Responsive mobile web-app using GPS location to trigger chapters of a story. PHP, OO JavaScript, Grunt.',
				'url' 		=> 'storywalks.info',
				'image' 	=> '/portfolio/images/Storywalks.jpg'
];

$arrSlies[] = [	'header' 	=> 'Circa Maps Project',
				'blurb' 	=> 'Self-initiated generative design project. Uses web technologies to algorithmically grow artworks that simulate city maps. 
								JavaScript interface to visualise coordinate geometry logic written with OO PHP that generates SVG markup.',
				'url' 		=> 'circa.butterscotchworld.co.uk',
				'reponame' 	=> 'circa-maps',
				'image'		=> '/portfolio/images/Circa-Maps.jpg'
];

$arrSlies[] = [	'header' 	=> 'Mackay Design Studio',
				'blurb' 	=> 'Stylish minimalist design brief from client with design background. Freelance. 
								PHP custom CMS, CSS animation.',
				'url' 		=> 'www.mackaydesignstudio.co.uk',
				'image'		=> '/portfolio/images/Mackay-Screenshot.png'
];

$arrSlies[] = [	'header' 	=> 'Word Matrix',
				'blurb' 	=> 'An in-browser mock-up of an idea for a physical interactive art installation. Built with OO JavaScript, PHP, Twitter API, Composer, Microajax.',
				'url' 		=> 'matrix.butterscotchworld.co.uk',
				'reponame' 	=> 'word-matrix',
				'image'		=> '/portfolio/images/Word-Matrix.jpg'
];

$arrSlies[] = [	'header' 	=> 'Bristol Cycling Manifesto',
				'blurb' 	=> 'Small basic responsive site delivered for free as a gift because I believe in the cause. 
								PHP, CSS animation.',
				'url' 		=> 'bristolcyclingmanifesto.org.uk',
				'image'		=> '/portfolio/images/BCM-Screenshot.png'
];

$arrSlies[] = [	'header' 	=> 'Image-to-web-page Converter',
				'blurb' 	=> 'PHP application that takes an image file and produces styled markup (a web page) that appears as an abstracted form of the image.
								PHP, Composer, JavaScript, jQuery, Gulp.',
				'url' 		=> 'pixels.butterscotchworld.co.uk',
				'reponame' 	=> 'image-to-web-page',
				'image'		=> '/portfolio/images/image-to-web-page.jpg'
];

$arrSlies[] = [	'header' 	=> 'Timeline',
				'blurb' 	=> 'A visual meditation aid for recalling the overlapping timespans of your life. An old open source project due to be rewritten in Laravel soon.',
				'url' 		=> 'timeline.butterscotchworld.co.uk',
				'reponame' 	=> 'timeline',
				'image'		=> '/portfolio/images/Timeline.jpg'
];

$arrSlies[] = [	'header' 	=> 'Bristol Open',
				'blurb' 	=> 'Tournament entry and results system with fencer login and admin <abbr title="Content Management System">CMS</abbr>. 
								Via job at Carmen Data. ColdFusion.',
				'url' 		=> 'bristolopen.info',
				'image' 	=> '/portfolio/images/BristolOpen.jpg'
];

$arrSlies[] = [	'header' 	=> 'Wild West Fitness',
				'blurb' 	=> 'Responsive information site and custom tournament entry system for annual fitness challenge. Freelance client. PHP.',
				'url' 		=> 'wildwestfitness.martinjoiner.co.uk',
				'image' 	=> '/portfolio/images/WildWestFitness.jpg'
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
		<div class="innerStage">
			<img class="slideImage" src="<?=$thisSlide['image']?>" alt="Screenshot of <?=$thisSlide['header']?>">
		</div>
	</div>
	<?php
}

?>

<div class="bottomSpace">&nbsp;</div>

