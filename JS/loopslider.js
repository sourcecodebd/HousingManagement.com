// Create some global vars
var slider = $('#loop-slider'),
    imgGroup = $('#img-group'),
    img = $('#img-group li'),
    imgCount = img.length,
    firstImg = img.first(),
    lastImg = img.last();

// If autoplay data-attr is set, create the var
if (slider.data('autoplay')) {
    autoplay = slider.data('autoplay');
} else {
    autoplay = false;
}
// Repeat for the autoplay speed
if (slider.data('speed')) {
  gallerySpeed = slider.data('speed');
} else {
  gallerySpeed = 2000;
}

// Set width of slideshow
imgGroup.css('width', (imgCount + 2)*100 + 'vw');

// Create & inject the slideshow Controls
var	controlsHTML = '<div class="control-container"><div class="controls prev"></i></div><div class="controls next"></div></div>',
controls = document.createElement('div');
controls.innerHTML = controlsHTML;
document.getElementById('loop-slider').appendChild(controls);

// Clone the first & last images - This creates the looping/infinite effect for forward and backward controls
(function cloneImages() {
	firstImg.clone().addClass('clone').appendTo(imgGroup);
	lastImg.clone().addClass('clone').prependTo(imgGroup);
	// update img array
	img = $('#img-group li');
})();

// Create background images from data-attr
(function makeImages() {
	img.each(function() {
		var $this = $(this), 
			  imgUrl = $this.data('img');
		$this.css('background-image', 'url(' + imgUrl + ')');
	});
})();


// ============================
// Operations for the Slideshow

var position = -100, //Starting position
	slidew = 100, //width of slides (in vw)
	duration = 0.3, //slide transition duration
  delay = duration * 1000 + 1, // convert duration into ms, add 1ms delay
  endPosition = imgCount * -100
  

function nextSlide() {
	position = position - slidew;
	imgGroup.css({
		'transform': 'translateX(' + position + 'vw)',
		'transition-duration': +duration + 's'
	});
}

function prevSlide() {
	position = position + slidew;
	imgGroup.css({
		'transform': 'translateX(' + position + 'vw)',
		'transition-duration': +duration + 's'
	});
}

function rotateSlide() {
	setTimeout(function() {
		imgGroup.css({
			'transition-duration': '0s',
			'transform': 'translateX(' + position + 'vw)'
		});
	}, delay);
}

// Next
$('.next').click(function() {
	if (position > endPosition + 1) {
		nextSlide();
	} else {
		nextSlide();
		position = -100;
		rotateSlide();
	}
});
// Prev
$('.prev').click(function() {
	if (position < -101) {
		prevSlide();
	} else {
		prevSlide();
		position = endPosition;
		rotateSlide();
	}
});


//========== Automate the slider ==========//

function rotate() {
	if (position == endPosition) {
		nextSlide();
		position = -100;
		rotateSlide();
	} else {
		nextSlide();
	}
}
// Set timer
// for auto - slider
if  (autoplay == '1') {
  var speed = gallerySpeed,
      timer = setInterval(rotate, speed);

  // Pause slider on mouse - over

  slider.hover(
    function() {
      clearInterval(timer);
    },
    function() {
      timer = setInterval(rotate, speed);
    }
  );

}
