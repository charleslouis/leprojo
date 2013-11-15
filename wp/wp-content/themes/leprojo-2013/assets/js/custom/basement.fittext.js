function basementFitText(divId){
	if( document.getElementById(divId) ){
		var $this = $('#' + divId);
		newWidth = $this.data('proportion');
		$this.css('width', newWidth);

		$.getScript(jsFolder + 'vendor/jquery.fittext.min.js', function(){
			$('#' + divId).fitText(1, { minFontSize: '28px'});
		});
	}
}