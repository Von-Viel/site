<?php include 'header.php'; ?>

<h1><a href="https://tilderadio.org"><img style="width:75px;" src="./logos/tilderadio-green.png">tilderadio.org</a></h1>
	<h4>
		<?php
			$file = "slogans.txt";
			// Convert the text fle into array and get text of each line in each array index
			$file_arr = file($file);
			// Total number of linesin file
			$num_lines = count($file_arr);
			// Getting the last array index number by subtracting 1 as the array index starts from 0
			$last_arr_index = $num_lines - 1;
			// Random index number
			$rand_index = rand(0, $last_arr_index);
			// random text from a line. The line will be a random number within the indexes of the array
			$rand_text = $file_arr[$rand_index];
			echo $rand_text;
		?>
	</h4>

<br>
<br>
<p>
TildeRadio is Internet radio streamed by / for users of the tildeverse.
<a href="https://tildeverse.org/">tildeverse.org</a>
</p>
<p>TildeRadio has a dedicated irc channel, #tilderadio on <a href="https://tilde.chat">tilde.chat</a></p>
<p>Join the conversation <a href="https://web.tilde.chat/?join=tilderadio" target="_blank">Here</a></p>
<br>
<br>

<hr>
<p>
<iframe src="https://radio.tildeverse.org/public/tilderadio/embed" frameborder="0" allowtransparency="true" style="width: 100%; min-height: 160px; border: 0;"></iframe>
</p>

<hr>

<?php include 'footer.php'; ?>
