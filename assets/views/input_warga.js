var obj = {
	init: function init() {
		this.addListener();
		// this.checkIfPassSame();
		// console.log("TEST");
	},
	addListener: function addListener() {
		$("#nik").keyup(function (e) {
			if ($("#nik").val().length == 15) {
				var nik = $("#nik").val();
				console.log("TEST");
				$.ajax({
					type: "ajax",
					url: "getWargaByNik/"+nik,
					dataType: "JSON",
					success: function (data) {
						console.log(data);
						if(data != null) {
							$("#nama").val(data.nama);
						}
					},
				});
			} else {
				$("#nama").val("");
			}
		});
	},
};

$(document).ready(function () {
	obj.init();
});
