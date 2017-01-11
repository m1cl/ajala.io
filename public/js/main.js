var body = document.querySelector('lead').value;
var openTag = body.search('<?php');
var closeTag = body.search('?>');
body.slice(openTag, closeTag);

