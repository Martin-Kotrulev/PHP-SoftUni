<?php
$text= <<<EOD
    <p>Come and visit <a href="http://softuni.bg">the Software University</a> to master the art of programming. You can always check our <a href="www.softuni.bg/forum">forum</a> if you have any questions.</p>
EOD;
$pattern= '/(<a.*? href)=(\'|\"|)(.*?)\2>([^<]+)(<\/a>)/';
$replacement='[URL=\3]\4[/URL]';
echo preg_replace($pattern,$replacement,$text);
