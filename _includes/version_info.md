{% assign fileroot = site.data.version.fileroot %}
{% assign noteroot = site.data.version.noteroot %}
{% assign vstable = site.data.version.stable %}
{% capture vstable_notes %}{{ noteroot }}{{ vstable.shortdate }}{% endcapture %}
{% capture vstable_dl %}{{ fileroot }}{{ vstable.shortdate }}/{% endcapture %}

{% assign vbeta = site.data.version.beta %}
{% capture vbeta_notes %}{{ noteroot }}{{ vbeta.shortdate }}{% endcapture %}
{% capture vbeta_dl %}{{ fileroot }}{{ vbeta.shortdate }}/{% endcapture %}

{% if vbeta and page.usebeta %}
  {% assign vlatest = vbeta %}
  {% assign vlatest_notes = vbeta_notes %}
  {% assign vlatest_dl = vbeta_dl %}
{% else %}
  {% assign vlatest = vstable %}
  {% assign vlatest_notes = vstable_notes %}
  {% assign vlatest_dl = vstable_dl %}
{% endif %}

{% capture link_source %}{{ vlatest_dl }}AlephOne-{{ vlatest.shortdate }}.tar.bz2{% endcapture %}

{% capture link_alephmac %}{{ vlatest_dl }}AlephOne-{{ vlatest.shortdate }}-Mac.dmg{% endcapture %}

{% capture link_alephwin %}{{ vlatest_dl }}AlephOne-{{ vlatest.shortdate }}-Win.zip{% endcapture %}

{% capture link_alephflatpak %}{{ vlatest_dl }}AlephOne-{{ vlatest.shortdate }}.flatpak{% endcapture %}

{% capture link_m1mac %}{{ vlatest_dl }}Marathon-{{ vlatest.shortdate }}-Mac.dmg{% endcapture %}

{% capture link_m1win %}{{ vlatest_dl }}Marathon-{{ vlatest.shortdate }}-Win.zip{% endcapture %}

{% capture link_m1flatpak %}{{ vlatest_dl }}Marathon-{{ vlatest.shortdate }}.flatpak{% endcapture %}

{% capture link_m1exe %}{{ vlatest_dl }}Marathon-{{ vlatest.shortdate }}-Exe-Win.zip{% endcapture %}

{% capture link_m1data %}{{ vlatest_dl }}Marathon-{{ vlatest.shortdate }}-Data.zip{% endcapture %}

{% capture link_m2mac %}{{ vlatest_dl }}Marathon2-{{ vlatest.shortdate }}-Mac.dmg{% endcapture %}

{% capture link_m2win %}{{ vlatest_dl }}Marathon2-{{ vlatest.shortdate }}-Win.zip{% endcapture %}

{% capture link_m2flatpak %}{{ vlatest_dl }}Marathon2-{{ vlatest.shortdate }}.flatpak{% endcapture %}

{% capture link_m2exe %}{{ vlatest_dl }}Marathon2-{{ vlatest.shortdate }}-Exe-Win.zip{% endcapture %}

{% capture link_m2data %}{{ vlatest_dl }}Marathon2-{{ vlatest.shortdate }}-Data.zip{% endcapture %}

{% capture link_m3mac %}{{ vlatest_dl }}MarathonInfinity-{{ vlatest.shortdate }}-Mac.dmg{% endcapture %}

{% capture link_m3win %}{{ vlatest_dl }}MarathonInfinity-{{ vlatest.shortdate }}-Win.zip{% endcapture %}

{% capture link_m3flatpak %}{{ vlatest_dl }}MarathonInfinity-{{ vlatest.shortdate }}.flatpak{% endcapture %}

{% capture link_m3exe %}{{ vlatest_dl }}MarathonInfinity-{{ vlatest.shortdate }}-Exe-Win.zip{% endcapture %}

{% capture link_m3data %}{{ vlatest_dl }}MarathonInfinity-{{ vlatest.shortdate }}-Data.zip{% endcapture %}
