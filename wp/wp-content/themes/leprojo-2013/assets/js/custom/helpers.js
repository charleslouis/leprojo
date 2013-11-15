//find Img folder (assume same depth level as js folder)
	var jsFileLocation = $('script[src*=scripts]').attr('src'), // the script.min.js
			jsFolder = jsFileLocation.replace('js/scripts.min.js', 'js/'), //js folder
			wpDirectory = jsFileLocation.replace('wp-content/themes/oufella-2013/assets/js/scripts.min.js',''), //wordpress directory
			cssFolder = jsFileLocation.replace('js/scripts.min.js', 'css/'), //css folder
			imageFolder = jsFileLocation.replace('js/scripts.min.js', 'img/'); //images folder      
	
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

	function logArray($array){    
		$.each($array, function (index, value) {
			$.each(value, function (key, val) {
				console.log(( val.spotName + ' : ' + val.coordinates ));
			});
		});
	}

	function returnArray($array){   
		$.each($array, function (index, value) {
			$.each(value, function (key, val) {
				return(( val.spotName + ' : ' + val.coordinates ));
			});
		});
	}

	 /**
	 * Loads a CSS file from the supplied URL
	 * @param {String} url    The URL of the CSS file, if its relative
	                          it will be to the current page's url
	 * @return {HTMLElement}  The <link> which was appended to the <head>
	 * see http://otaqui.com/blog/1263/simple-script-to-load-css-from-javascript/
	 */
	 function loadcss(url) {
	   var head = document.getElementsByTagName('head')[0],
	   link = document.createElement('link');
	   link.type = 'text/css';
	   link.rel = 'stylesheet';
	   link.href = url;
	   head.appendChild(link);
	   return link;
	 }