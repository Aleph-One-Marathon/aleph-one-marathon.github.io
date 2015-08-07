---
---
<?php 

{% capture dummy %}{% include version_info.md %}{% endcapture %}

$game = $_GET['game'];
$link = '{{ link_alephmac }}';
if ($game == 'marathon') {
  $link = '{{ link_m1win }}';
} else if ($game == 'marathon2') {
  $link = '{{ link_m2win }}';
} else if ($game == 'infinity') {
  $link = '{{ link_m3win }}';
}

$type = $_GET['type'];
if ($type == 'source') {
  $link = '{{ link_source }}';
} else if ($type == 'upgrade') {
  if ($game == 'marathon') {
    $link = '{{ link_m1exe }}';
  } else if ($game == 'marathon2') {
    $link = '{{ link_m2exe }}';
  } else if ($game == 'infinity') {
    $link = '{{ link_m3exe }}';
  }
}

header('Location: ' . $link);
exit; ?>
