<?php
header('Content-type:word');
header("Content-Disposition:attachment;filename = \"".basename('sism-2023_abstract_template.rtf')."\"");
readfile('sism-2023_abstract_template.rtf');

?>