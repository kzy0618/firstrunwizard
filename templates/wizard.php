<div id="firstrunwizard">

<a id="closeWizard" class="close">
	<img class="svg" src="<?php print_unescaped(OCP\Util::imagePath('core', 'actions/close.svg')); ?>">
</a>
<h1><?php p($l->t('Welcome to VoNZ Application')); ?></h1>

<p><?php p($l->t('Here you can record some Maori & English languages but first, please read the following rules'));?></p>

<h2><?php p($l->t('Add your personnal informations :')); ?></h2>
<p><?php p($l->t('To use the database and classify the recording, researchers need some informations about users. Please enter your personnal informations in the BACKGROUND application. This informations will be keep in a secure way and only researchers could access to them.'));?></p>

<h2></h2>
<a target="_blank">
	<img src="<?php print_unescaped(OCP\Util::imagePath('firstrunwizard', 'firefoxChrome.jpg')); ?>" style="height:60px"/>
</a>

<h2><?php p($l->t('Web Browsers supported :')); ?></h2>
<p><?php p($l->t('To record your voice, you have to use Mozilla Firefox or Google Chrome. The audio format is not supported by the others web browsers for now.'));?></p>

<h2></h2>
<a target="_blank">
	<img src="<?php print_unescaped(OCP\Util::imagePath('firstrunwizard', 'allowMicrophone.png')); ?>" style="height:100px"/>
</a>

<h2><?php p($l->t('Utilisation of your microphone :')); ?></h2>
<p><?php p($l->t('Please give at the application a permanent access to your microphone. If you do not, you could have trouble with the recording duration or to save your data. For this, you can go on your web browsers preferences or click on the left icon of the URL website and change permissions.'));?></p>
<h2><?php p($l->t('Duration of recording :')); ?></h2>
<p><?php p($l->t('For each type of recording, you do not have to exceed a maximun duration or your recording will not be save. Here different maximun times for each type of recording : Word = 10 s; List of world (maximun 20) = 30 s; Short phrase = 30 s; Sentence = 1 min; Others type = 1 min'));?></p>

<h2></h2>
<a target="_blank">
	<img src="<?php print_unescaped(OCP\Util::imagePath('firstrunwizard', 'smiley.jpg')); ?>" style="height:60px"/>
</a>

<h2><?php p($l->t('Download your recording :')); ?></h2>
<p><?php p($l->t('At the end of your recording you can download the files on the server to contribute to our project, add your recording to the database and share with others users and researchers.'));?></p>

<p class="footnote">
<?php print_unescaped($l->t('There’s more information in the <a target="_blank" href="https://github.com/VoNZproject">documentation</a>')); ?><br>
<?php print_unescaped($l->t('If you like VoNZ,
	<a href="mailto:?subject=ownCloud
		&body=VoNZ is a great application to deal with maori language and differents New Zealand English accents. Join our community ! 
		You can freely get it by register from https://130.216.118.226">
		recommend it to your friends</a>!')); ?>

</p>
<a class="box">
	<input id="disablerun" type="checkbox"> Don't show me this windows again !
</a>

</div>

