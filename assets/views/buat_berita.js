var obj = {
	init: function init() {
		this.initFunc();
		this.addListener();
		// console.log("TEST");
	},
	initFunc: function initFunc() {
		CKEDITOR.replace("isi");
	},
	addListener: function addListener() {
		var _this = this;
		$("#berita-desc").click(function() {
			console.log('click');
			_this.initFunc();
		});
		$("#span-file").click(function() {
			$("#photo").click();
		});
	}
}

$(document).ready(function() {obj.init()});
