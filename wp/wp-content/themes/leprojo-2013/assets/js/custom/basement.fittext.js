function basementFitText(divId, $compressor, $minFontSize){
	// use this to load jquery.fittext only if required
	// see https://github.com/davatron5000/FitText.js
	if( document.getElementById(divId) ){
		// we declare this
		var $this = $('#' + divId);

		// we set up the correct new width as provided by data-proportion
		$this.css('width', $this.data('proportion'));

		// we load the fitText script
		$.getScript(jsFolder + 'vendor/jquery.fittext.min.js', function(){
			// and fire fitText
			$('#' + divId).fitText($compressor, { minFontSize: $minFontSize});
		});
	}
}