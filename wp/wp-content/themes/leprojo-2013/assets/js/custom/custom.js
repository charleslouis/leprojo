(function ($) {

	//find Img folder (assume same depth level as js folder)
	var jsFileLocation = $('script[src*=scripts]').attr('src'),
			imageFolder = jsFileLocation.replace('js/scripts.min.js', 'img/');   // the js folder path			

	function hideClass($myClass) {
		$($myClass).hide();
	}


	function removePhoneHref($phoneLinkClass){
		//we don't need cliquable phone link on no-touch screens I guess
		if ($('html').hasClass('no-touch')) {
			var $this = $($phoneLinkClass);
			var tel = '<span class="' + $phoneLinkClass.replace('.','') + '">';
			tel += $this.html() + '</span>';
			$this.parent().append(tel);
			$this.remove();
		}
	}

	$('document').ready(function(){
		removePhoneHref('.phone-link');
		removePhoneHref('.skype-link');
	});
}(jQuery));
