
     console.log("JavaScript is amazing!");
$(document).ready(function($) {
  function animateElements() {
    $('.progressbar').each(function() {
      var elementPos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var percent = $(this).find('.circle').attr('data-percent');
      var percentage = parseInt(percent, 10) / parseInt(100, 10);
      var animate = $(this).data('animate');
      if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
        $(this).data('animate', true);
        $(this).find('.circle').circleProgress({
          startAngle: -Math.PI / 2,
          value: percent / 100,
          thickness: 10,
          fill: {
            color: '#ca5b61'
          }
        }).on('circle-animation-progress', function(event, progress, stepValue) {
          $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
        }).stop();
      }
    });
  }

  // Show animated elements
  animateElements();
  $(window).scroll(animateElements);
}); 

    var tabs = document.getElementById('icetab-container').children;
var tabcontents = document.getElementById('icetab-content').children;

var myFunction = function() {
    var tabchange = this.mynum;
    for(var int=0;int<tabcontents.length;int++){
        tabcontents[int].className = ' tabcontent';
        tabs[int].className = ' icetab';
    }
    tabcontents[tabchange].classList.add('tab-active');
    this.classList.add('current-tab');
}   


for(var index=0;index<tabs.length;index++){
    tabs[index].mynum=index;
    tabs[index].addEventListener('click', myFunction, false);
}     
