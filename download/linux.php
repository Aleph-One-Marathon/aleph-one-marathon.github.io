---
---
<?php 

{% capture dummy %}{% include version_info.md %}{% endcapture %}

$link = '{{ link_source }}';

header('Location: ' . $link);
exit; ?>
