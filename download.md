---
title: Download Aleph One
layout: default
redirect_from: /download.php
---
{% capture dummy %}{% include version_info.md %}{% endcapture %}

# <a name="download"></a> Download Aleph One

### Version <span style="font-size: larger">{{ vlatest.display }}</span> &#8212; released {{ vlatest.date }} &#8212; <a href="{{ vlatest_notes }}" target="_blank">release notes</a>

The Aleph One game engine brings Bungie's Marathon trilogy to modern computers, and also powers dozens of community-made games. To play, you will need a set of game data files (known as a [scenario](/scenarios.html)), and the engine itself. Download the engine here:

<div class="gamesec">
<a href="{{ link_alephmac }}"><img src="/images/mac.jpg" width="240" height="120" alt="Mac OS X"></a>
<a href="{{ link_alephmac }}" class="downloadonly"><img src="/images/download_mac.png" width="131" height="37" alt="Download Aleph One for Mac OS X" class="noborder"></a>
        <ul style="margin-top: 40px">
          <li><a href="{{ link_alephmac }}">Download for Mac OS X</a></li>
          <li>The disk image should automatically mount</li>
          <li>Copy <b>AlephOne</b> into your scenario folder</li>
          <li>Launch the <b>AlephOne</b> application</li>
        </ul>
</div>

<div class="gamesec">
<a href="{{ link_alephwin }}"><img src="/images/win.jpg" width="240" height="120" alt="Windows"></a>
<a href="{{ link_alephwin }}" class="downloadonly"><img src="/images/download_win.png" width="131" height="37" alt="Download Aleph One for Windows" class="noborder"></a>
        <ul style="margin-top: 40px">
          <li><a href="{{ link_alephwin }}">Download for Windows</a></li>
          <li>Open the zip archive</li>
          <li>Copy <b>AlephOne.exe</b> into your scenario folder</li>
          <li>Launch <b>AlephOne.exe</b></li>
        </ul>
</div>

<div class="gamesec">
<a href="{{ link_source }}"><img src="/images/linux.jpg" width="240" height="120" alt="Linux"></a>
<a href="{{ link_source }}" class="downloadonly"><img src="/images/download_linux.png" width="131" height="37" alt="Download Aleph One Source for Linux" class="noborder"></a>
        <ul style="margin-top: 40px">
          <li><a href="{{ link_source }}">Download for Linux</a></li>
          <li>Unpack the tar.bz2 file</li>
          <li><a href="https://github.com/Aleph-One-Marathon/alephone/wiki/Linux%20Install%20Instructions">Install prerequisites</a></li>
          <li>Run <code>./configure && make && make install</code></li>
          <li><a href="/scenarios.html">Download a scenario</a></li>
          <li>Unpack the scenario</li>
          <li>Run <code>alephone <em>&lt;path to scenario directory&gt;</em></code></li>
        </ul>
</div>

***

Now that you've got the engine, try out some of the [popular scenarios](/scenarios.html) you can play with Aleph One.

Download the [GPL-licensed source code]({{ link_source }}).

