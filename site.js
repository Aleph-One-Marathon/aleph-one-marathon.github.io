function switchPlatform(desired) {
  var plats = new Array('mac', 'win', 'linux');
  for (var pi = 0; pi < plats.length; pi++)
  {
    var plat = plats[pi];
    var visible = (plat == desired);
    
    $('.' + plat + '_block').css('display', (visible ? 'block' : 'none'));
  }
}

function detectPlatform() {
  try {
    if (navigator.platform) {
      var platform = navigator.platform;
      if (/Win/.test(platform))
        return 'win';
      else if (/Mac/.test(platform))
        return 'mac';
      else if (/Linux/.test(platform) ||
               /X11/.test(platform) ||
               /BSD/.test(platform) ||
               /Solaris/.test(platform))
        return 'linux';
      else if (navigator.userAgent &&
               (/iPhone/.test(navigator.userAgent) ||
                /iPad/.test(navigator.userAgent)))
        return 'mac';
    }
  } catch (err) {}
  return 'win';
}

$(document).ready(function () {
  switchPlatform(detectPlatform());
});
