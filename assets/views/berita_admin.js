var obj = {
	init: function init() {
		this.addListener();
	},
	addListener: function addListener() {
		var _this = this;
		$("#berita-desc").click(function() {
			console.log('click');
			_this.initFunc();
		});
	}
}

$(document).ready(function() {obj.init()});

function deleteBerita(id) {
	$("#idBeritaModalDel").val(id);
}
