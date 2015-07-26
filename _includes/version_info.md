{% assign vstable = site.data.version.stable %}
{% assign vbeta = site.data.version.beta %}
{% if vbeta and page.usebeta %}
  {% assign vlatest = vbeta %}
{% else %}
  {% assign vlatest = vstable %}
{% endif %}

{% capture link_source %}{{ vlatest.filedir }}AlephOne-{{ vlatest.shortdate }}.tar.bz2/download{% endcapture %}

{% capture link_alephmac %}{{ vlatest.filedir }}AlephOne-{{ vlatest.shortdate }}-Mac.dmg/download{% endcapture %}

{% capture link_alephwin %}{{ vlatest.filedir }}AlephOne-{{ vlatest.shortdate }}-Win.zip/download{% endcapture %}

{% capture link_m1mac %}{{ vlatest.filedir }}Marathon-{{ vlatest.shortdate }}-Mac.dmg/download{% endcapture %}

{% capture link_m1win %}{{ vlatest.filedir }}Marathon-{{ vlatest.shortdate }}-Win.zip/download{% endcapture %}

{% capture link_m1exe %}{{ vlatest.filedir }}Marathon-{{ vlatest.shortdate }}-Exe-Win.zip/download{% endcapture %}

{% capture link_m1data %}{{ vlatest.filedir }}Marathon-{{ vlatest.shortdate }}-Data.zip/download{% endcapture %}

{% capture link_m2mac %}{{ vlatest.filedir }}Marathon2-{{ vlatest.shortdate }}-Mac.dmg/download{% endcapture %}

{% capture link_m2win %}{{ vlatest.filedir }}Marathon2-{{ vlatest.shortdate }}-Win.zip/download{% endcapture %}

{% capture link_m2exe %}{{ vlatest.filedir }}Marathon2-{{ vlatest.shortdate }}-Exe-Win.zip/download{% endcapture %}

{% capture link_m2data %}{{ vlatest.filedir }}Marathon2-{{ vlatest.shortdate }}-Data.zip/download{% endcapture %}

{% capture link_m3mac %}{{ vlatest.filedir }}MarathonInfinity-{{ vlatest.shortdate }}-Mac.dmg/download{% endcapture %}

{% capture link_m3win %}{{ vlatest.filedir }}MarathonInfinity-{{ vlatest.shortdate }}-Win.zip/download{% endcapture %}

{% capture link_m3exe %}{{ vlatest.filedir }}MarathonInfinity-{{ vlatest.shortdate }}-Exe-Win.zip/download{% endcapture %}

{% capture link_m3data %}{{ vlatest.filedir }}MarathonInfinity-{{ vlatest.shortdate }}-Data.zip/download{% endcapture %}
