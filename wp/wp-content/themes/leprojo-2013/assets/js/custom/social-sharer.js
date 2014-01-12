
/**
*
* Social sharer
*
**/

	function socialSharer() {
		return;
		if (document.getElementById('sharer-inner-wrapper')){
			$('#sharer-inner-wrapper').hide();
			$('#sharer-block-container').toggleClass('active unactive');

			$('#dislay-sharer-wrapper').click(
					function (){
						$('#dislay-sharer-wrapper').height(
								$('#dislay-sharer-wrapper').height() 
							+ $('#dislay-sharer-wrapper').height() 
							+ $('#sharer-outer-wrapper').height() 
							- 3 );
							$('#sharer-block-container').toggleClass('active unactive');
					},
					function(){
							$('#sharer-inner-wrapper').slideToggle();
							$('#sharer-block-container').toggleClass('active unactive');
					}
			);
		}
	}