  <div  class="slideshow" style="float:left;">
        <li style="background-color:white" class="show">
<script type="text/javascript">
var slideShowSpeed = 3000;
var crossFadeDuration = 3;
var Pic = new Array();
Pic[0] = 'image/ber.JPG'
Pic[1] = 'image/fan1.JPG'
Pic[2] = 'image/elect1.JPG'
Pic[3] = 'image/elect2.JPG'
Pic[4] = 'image/fan2.JPG'
Pic[5] = 'image/rec7.JPEG'
Pic[6] = 'image/i.JPG'
Pic[7] = 'image/door.JPG'
Pic[8] = 'image/office.JPG'

// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}
function runSlideShow() {
if (document.all) {
document.image.SlideShow.style.filter="blendTrans(duration=3)";
document.image.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.image.SlideShow.filters.blendTrans.Apply();
}
document.images.SlideShow.src = preLoad[j].src;
if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}
j = j + 1;
if (j > (p - 1)) j = 0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}
window.onload=runSlideShow;
//  End -->
</script>
<img src="1.jpg" name='SlideShow' width=360 height=400></td></li>
        
      </div>