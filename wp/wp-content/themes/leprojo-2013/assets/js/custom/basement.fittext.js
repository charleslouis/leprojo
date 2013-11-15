function basementFitText(divId, $compressor, $minFontSize){
	// use this to load jquery.fittext only if required
	// see https://github.com/davatron5000/FitText.js
	if( document.getElementById(divId) ){
		var $this = $('#' + divId);
		newWidth = $this.data('proportion');
		$this.css('width', newWidth);

		$.getScript(jsFolder + 'vendor/jquery.fittext.min.js', function(){
			$('#' + divId).fitText($compressor, { minFontSize: $minFontSize});
		});
	}
}