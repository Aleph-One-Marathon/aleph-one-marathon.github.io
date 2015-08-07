---
---
<?php 

{% capture dummy %}{% include version_info.md %}{% endcapture %}

$game = $_GET['game'];
$link = '{{ link_alephmac }}';
if ($game == 'marathon') {
  $link = '{{ link_m1mac }}';
} else if ($game == 'marathon2') {
  $link = '{{ link_m2mac }}';
} else if ($game == 'infinity') {
  $link = '{{ link_m3mac }}';
}

$type = $_GET['type'];
if ($type == 'source') {
  $link = '{{ link_source }}';
}

header('Location: ' . $link);
exit; ?>
