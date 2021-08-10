---
---
<?php

{% capture dummy %}{% include version_info.md %}{% endcapture %}

$link = '{{ link_alephwin }}';

if (isset($_GET['game'])) {
  $game = $_GET['game'];
  if ($game == 'marathon') {
    $link = '{{ link_m1win }}';
  } else if ($game == 'marathon2') {
    $link = '{{ link_m2win }}';
  } else if ($game == 'infinity') {
    $link = '{{ link_m3win }}';
  }
}

if (isset($_GET['type'])) {
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
}

header('Location: ' . $link);
exit; ?>
