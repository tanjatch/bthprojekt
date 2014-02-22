<?php
/**
* Helpers for the template file.
*/
$ol->data['header'] = '<h1>Header: Olga</h1>';
$ol->data['main']   = '<p>Main: Now with a theme engine, Not much more to report for now.</p>';
$ol->data['footer'] =<<<EOD
<p>Footer: &copy; Olga by Tanja insp. by Mikael Roos </p>
<p>Tools: 
<a href="http://validator.w3.org/check/referer">html5</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">css3</a>
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css21">css21</a>
<a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">unicorn</a>
<a href="http://validator.w3.org/checklink?uri={$ol->request->current_url}">links</a>
<a href="http://qa-dev.w3.org/i18n-checker/index?async=false&amp;docAddr={$ol->request->current_url}">i18n</a>
<!-- <a href="link?">http-header</a> -->
<a href="http://csslint.net/">css-lint</a>
<a href="http://jslint.com/">js-lint</a>
<a href="http://jsperf.com/">js-perf</a>
<a href="http://www.workwithcolor.com/hsl-color-schemer-01.htm">colors</a>
<a href="http://dbwebb.se/style">style</a>
</p>

<p>Docs:
<a href="http://www.w3.org/2009/cheatsheet">cheatsheet</a>
<a href="http://dev.w3.org/html5/spec/spec.html">html5</a>
<a href="http://www.w3.org/TR/CSS2">css2</a>
<a href="http://www.w3.org/Style/CSS/current-work#CSS3">css3</a>
<a href="http://php.net/manual/en/index.php">php</a>
<a href="http://www.sqlite.org/lang.html">sqlite</a>
<a href="http://www.blueprintcss.org/">blueprint</a>
</p>
EOD;


/**
* Print debuginformation from the framework.
*/
function get_debug() {
  $ol = COlga::Instance();
  $html = "<h2>Debuginformation</h2><hr><p>The content of the config array:</p><pre>" . htmlentities(print_r($ol->config, true)) . "</pre>";
  $html .= "<hr><p>The content of the data array:</p><pre>" . htmlentities(print_r($ol->data, true)) . "</pre>";
  $html .= "<hr><p>The content of the request array:</p><pre>" . htmlentities(print_r($ol->request, true)) . "</pre>";
  return $html;
}
/**
* Create a url by prepending the base_url.
*/
function base_url($url) {
  return COlga::Instance()->request->base_url . trim($url, '/');
}

/**
* Return the current url.
*/
function current_url() {
  return COlga::Instance()->request->current_url;
}
