---
---
<?php 

{% capture dummy %}{% include version_info.md %}{% endcapture %}

$game = $_GET['game'];
$link = '/';
if ($game == 'marathon') {
  $link = '{{ link_m1data }}';
} else if ($game == 'marathon2') {
  $link = '{{ link_m2data }}';
} else if ($game == 'infinity') {
  $package = '{{ link_m3data }}';
}

header('Location: ' . $link);
exit; ?>
