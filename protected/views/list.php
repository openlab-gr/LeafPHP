<?php
$html = "";

foreach ($data as $element): 

    $html .= <<<EOD
      <h2>$element->title</h2>
      <p>$element->text</p>
      <br />
    EOD;

endforeach; 

return $html;

?>