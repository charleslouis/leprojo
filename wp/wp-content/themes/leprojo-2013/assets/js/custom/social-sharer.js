
/**
*
* Social sharer
*
**/

	function socialSharer() {
		if (document.getElementById('sharer-wrapper')){
			$('#sharer-wrapper').hide();

			$('#dislay-sharer-wrapper').click(
		    	function (){
		    		$('#dislay-sharer-wrapper').height(
		    			  $('#dislay-sharer-wrapper').height() 
		    			+ $('#dislay-sharer-wrapper').height() 
		    			+ $('#sharer-outer-wrapper').height() 
		    			- 3 );
		    	},
			   	function(){
			        $('#sharer-wrapper').slideToggle();
			    }    
			);

			function copyToClipboard (text) {
			  window.prompt ("Copier le lien dans le presse-papier : Ctrl+C, Enter", text);
			}

			$('#copy_link_to_clipboard').click(function(){
				var linkToShare = $(this).attr('href');
				copyToClipboard(linkToShare);
		    });
			
			$("#sharer-link").click(function() {
			    $("#direct-link").select();
			});

			$("#sharer-shortlink").click(function() {
			    $("#direct-shortlink").select();
			});
		}
	}