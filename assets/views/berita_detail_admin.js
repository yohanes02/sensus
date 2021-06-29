var obj = {
	init: function init() {
		$("#banner").each(function() {
			$("#banner").each(function() {
				$(this).css("width", "auto");
				$(this).css("height", "auto");
				
				var maxWidth = 1200; // Max width for the image
				var maxHeight = 500;    // Max height for the image
				var ratio = 0;  // Used for aspect ratio
				var width = $(this).width();    // Current image width
				var height = $(this).height();  // Current image height
	
				if (width > maxWidth && width > height) {
						
						ratio = width / height;
						$(this).css("height", maxWidth/ratio);
						$(this).css("width", maxWidth); // Set new width
	
				}else  if (height > maxHeight && height > width){
						
						ratio = height / width;
						$(this).css("width", maxHeight/ratio);
						$(this).css("height", maxHeight);
				}else {
	
						$(this).css("width", maxWidth);
						$(this).css("height", maxHeight);
				}
			});
		});
	}
};

$(document).ready(function() {obj.init()});
