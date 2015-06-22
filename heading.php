<?php

// This puts a multiline string into the variable contained
// It then returns that variable when it is included somewhere

$contained = <<<EOD

<title>Hi there title!</title>
<nav>hellloooooooooooooooooooo</nav>
<p>Once upon a persona</p>
EOD;

return $contained;

?>