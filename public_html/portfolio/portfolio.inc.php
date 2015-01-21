
<h1>Portfolio</h1>

<?php

$arrSlies[0]['header'] = 'Compare Contract Hire';
$arrSlies[0]['blurb'] = 'A project through employment at Carmen Data. Responsive desktop/tablet version and mobile version. ';
$arrSlies[0]['url'] = 'www.comparecontracthire.com';

$arrSlies[1]['header'] = 'Storywalks';
$arrSlies[1]['blurb'] = 'Responsive mobile web-app using GPS location to trigger chapters of a story. ';
$arrSlies[1]['url'] = 'storywalks.info';

$arrSlies[2]['header'] = 'Open Mic Finder';
$arrSlies[2]['blurb'] = 'Responsive user-generated content site built in HTML5 and JQuery. 
				Leverages several APIs including Twitter\'s and Google Maps.';
$arrSlies[2]['url'] = 'openmicfinder.co.uk';

$arrSlies[3]['header'] = 'Bristol Cycling Manifesto';
$arrSlies[3]['blurb'] = 'Small basic site delivered for free as a gift because I believe in the cause. 
				CSS3 animation, responsive right down to smart phone level.';
$arrSlies[3]['url'] = 'bristolcyclingmanifesto.org.uk';

$arrSlies[4]['header'] = 'Timeline';
$arrSlies[4]['blurb'] = 'Small project open sourced through Github. ';
$arrSlies[4]['url'] = 'timeline.butterscotchworld.co.uk';

$arrSlies[5]['header'] = 'Mackay Design Studio';
$arrSlies[5]['blurb'] = 'Stylish minimalist design for freelance client. 
				Strict brief from client with design background. Very HTML5. ';
$arrSlies[5]['url'] = 'www.mackaydesignstudio.co.uk';

$arrSlies[6]['header'] = 'Bristol Open';
$arrSlies[6]['blurb'] = 'Tournament entry and results system with fencer login and admin <abbr title="Content Management System">CMS</abbr>. 
				A project through employment at Carmen Data. ';
$arrSlies[6]['url'] = 'bristolopen.info';

$arrSlies[7]['header'] = 'Wild West Fitness';
$arrSlies[7]['blurb'] = 'Responsive information and tournament entry system website for annual fitness challenge. ';
$arrSlies[7]['url'] = 'wildwestfitness.co.uk';

?>


<?php

foreach ($arrSlies as $i => $thisSlide) {
	?>
	<div class="slide active" id="slide<?=$i?>">
		<div class="notes">
			<h2><?=$thisSlide['header']?></h2>
			<p><?=$thisSlide['blurb']?></p>
			<a target="_blank" href="http://<?=$thisSlide['url']?>"><?=$thisSlide['url']?></a>
		</div>
		<div class="innerStage">
			<div class="slideInner"></div>
		</div>
	</div>
	<?php
}

?>

<div class="bottomSpace">&nbsp;</div>

