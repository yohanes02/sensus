var obj = {
	init: function init() {
		this.addListener();
	},
	addListener: function addListener() {
		$("#bekerja").change(function() {
			console.log("CHANGE");
			if($("#bekerja").val() == "0") {
				document.getElementById("isNotWorking").style.display = "";
				// $("#isNotWorking").hide();
			} else {
				document.getElementById("isNotWorking").style.display = "none";
				// $("#isNotWorking").show();
			}
		});
	}
}

$(document).ready(function() {obj.init()});
