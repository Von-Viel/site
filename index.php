<?php include 'header.php'; ?>

<h1><a href="https://tilderadio.org"><img style="width:75px;" src="./logos/tilderadio-green.png">tilderadio.org</a></h1>
	<h4>
		<?=file_get_contents("https://radiobot.tilde.chat/slogan.php")?>
	</h4>

<br>
<br>
<p>
TildeRadio is Internet radio streamed by / for users of the tildeverse.
<a href="https://tildeverse.org/">tildeverse.org</a>
</p>
<p>TildeRadio has a dedicated irc channel, #tilderadio on <a href="https://tilde.chat">tilde.chat</a></p>
<p>Join the conversation <a href="https://kiwi.tilde.chat/#tilderadio" target="_blank">Here</a></p>
<br>
<br>

<hr>
<p>
<iframe src="https://radio.tildeverse.org/public/tilderadio/embed" frameborder="0" allowtransparency="true" style="width: 100%; min-height: 160px; border: 0;"></iframe>
</p>

<hr>

<?php include 'footer.php'; ?>
