$('.form').find('input, textarea').on('keyup blur focus', function (e) {

  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight');
			} else {
		    label.removeClass('highlight');
			}
    } else if (e.type === 'focus') {

      if( $this.val() === '' ) {
    		label.removeClass('highlight');
			}
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});

function liberarTab(element) {
  $(element).parent().addClass('active');
  $(element).parent().siblings().removeClass('active');

  target = $(element).attr('href');

  $('.tab-content > div').not(target).hide();

  $(target).fadeIn(600);
}

$('.tab a').on('click', function (e) {
  e.preventDefault();
  liberarTab(this);
});
