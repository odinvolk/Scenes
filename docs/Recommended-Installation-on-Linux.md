<svg id="kuhnyaLamp" class="p" viewBox="0 0 80 80" version="1.1" style="position:absolute;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <circle id="kuhnyaLed1" opacity="0.8" style="paint-order:normal" fill-rule="evenodd" cx="50%" cy="50%" r="38"
          fill="#feb414" stroke="#feb414" stroke-width="0"
          onmouseout="this.style.stroke = '#00000'; this.style['stroke-width'] = 0;" 
          onmouseover="this.style.stroke = '#d9000'; this.style['stroke-width'] = 3;">
   <title>Свет кухня</title>
  </circle>
  <use id="use5991" transform="translate(28 20)" width="100%" height="100%" xlink:href="#symbolLampa"/>
</svg>
<script>
$(document).ready(function(){
    $("#kuhnyaLed1").click(function(){
        $("#kuhnyaModals").show();
    });
    $("#kuhnyaLed2").click(function(){
        $("#kuhnyaModals").hide();
    });
});
$(document).ready(function(){
    $("#kuhnyaLed1").click(function(){
        $("#kuhnyaModals").animate({
            left: '-45',
            top: '-45',
            opacity: '0.9',
            height: '120px',
            width: '120px'
        });
    });
});
</script>

<svg id="kuhnyaModals" viewBox="0 0 170 170" width="140" height="140" version="1.1" display="none"
 style="position:absolute;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- transform="translate(-55, -85)"  -->
<g id="1111">
 <circle id="path817" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="85" fill-opacity=".4" cy="85" r="85" fill="#262626">
   <title>7</title>
  </circle>
 <circle id="path819-3" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="128.5" cy="43" r="20" fill="#1987ff">
   <title>1</title>
  </circle>
 <circle id="path819-3-3" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="28" cy="86" r="20" fill="#feb414"
         onclick="callMethod('Dimmer04.switch');return false;">
   <title>5</title>
  </circle>
 <circle id="path819-3-56" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="41" cy="43" r="21" fill="#505078">
   <title>6</title>
  </circle>
 <path id="path933-9-7" fill-rule="evenodd" fill="#fffffc" d="m26.614 29.95 1.6509 1.207c-6.3578 7.8624-6.4709 16.204.0606 24.519-.57389.38769-1.1427.78253-1.7198 1.1649-7.2472-7.9098-6.5929-19.709.008-26.891z"/>
 <path id="path933-9-7-0" fill-rule="evenodd" fill="#fffffc" d="m56.21 29.95-1.6509 1.207c6.3578 7.8624 6.4709 16.204-.0606 24.519.5739.38769 1.1427.78253 1.7198 1.1649 7.2472-7.9098 6.5929-19.709-.008-26.891z"/>
 <text id="text2" style="text-anchor:middle;text-align:center"
       font-size="21px" y="42" x="50%" font-family="Ubuntu" fill="#fff">4440</text>
 <circle id="path819-3-6" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="142" fill-opacity=".8" cy="86" r="20" 
         fill="#464545">
   <title>2</title>
  </circle>
 <circle id="path819-3-7" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="128" fill-opacity=".8" cy="128" r="20" 
         fill="#464545">
   <title>3</title>
  </circle>
 <circle id="myBtnh" opacity="1" style="paint-order:normal" fill-rule="evenodd" cx="41" fill-opacity=".8" cy="128" r="20" 
         fill="#464646">
   <title>4</title>
  </circle>
</g>
<g id="kuhnyaLed2">
 <circle id="path819" opacity="0.9" style="paint-order:normal" fill-rule="evenodd" cx="85" cy="85" r="25" 
         fill="#feb414" stroke="#feb414" stroke-width="0"
         onmouseout="this.style.stroke = '#00000'; this.style['stroke-width'] = 0;" 
         onmouseover="this.style.stroke = '#d9000'; this.style['stroke-width'] = 3;"/>
 
 <path id="path933" stroke-linejoin="round" d="m67.79 70.27 1.735 1.347c-6.2412 8.9936-8.0059 17.95 0 26.826l-.35858.26567-1.3764 1.0198c-8.4383-10.166-6.9044-19.603 0-29.458z" 
       fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-width=".1" fill="#fff"/>
 <path id="path933-2" stroke-linejoin="round" d="m102.2 70.28-1.735 1.347c6.2412 8.9936 8.0059 17.95 0 26.826l.35857.26567 1.3765 1.0198c8.4383-10.166 6.9044-19.603 0-29.458z" 
       fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-width=".1" fill="#fff"/>
 <path id="symbolLampa" d="m81.026 89.431c2.7691.0164 5.5383.0329 8.3074.0493-.0138 1.3284-.0277 2.6568-.0415 3.9851-2.764.002-5.528.003-8.292.005.009-1.3465.0174-2.693.0261-4.0394zm1.5564 8.0214c.0532.56773.1065 1.1354.15975 1.7032 1.491.012 2.9821.0239 4.4731.0359.0597-.56014.11941-1.1203.17911-1.6804-1.604-.0195-3.208-.0391-4.812-.0587zm-1.666-.020c.0438-3.2001.0876-6.4001.13139-9.6002-2.6667-2.5461-4.914-4.6498-4.8869-8.4438-.009-2.6678 1.6482-6.2319 4.0438-7.3173 3.3362-1.5725 7.4339-1.923 10.39.39975 2.0434 1.5856 3.0085 3.6558 3.2449 6.9576-.38328 3.7344-.74573 4.251-4.4893 8.4194-.0336 3.2287-.0673 6.4575-.10091 9.6862-2.7777-.0339-5.5553-.0677-8.333-.10161z" 
 stroke="#fff"  stroke-linejoin="round"stroke-width="1px" fill="none"/>
 </g>
</svg>
