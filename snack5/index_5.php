<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


<?php

$paragraph = "Anakin Skywalker: I have brought peace, freedom, justice, and security to my new empire. Obi-Wan: Your new empire? Anakin Skywalker: Don't make me kill you. Obi-Wan: Anakin, my allegiance is to the Republic, to Democracy! Anakin Skywalker: If you're not with me, then you're my enemy. Obi-Wan: Only a Sith deals in absolutes. I will do what I must. Anakin Skywalker: You will try.";

$modifiedParagraph = str_replace(".", ".<br>", $paragraph);
$modifiedParagraph = str_replace("!", "!<br>", $modifiedParagraph);
$modifiedParagraph = str_replace("?", "?<br>", $modifiedParagraph);


echo $modifiedParagraph;
?>