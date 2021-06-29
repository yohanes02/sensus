var obj = {
	site_url: 'http://localhost/kuliah/sensus/',
	numTr: null,
	init: function init() {
		this.addListener();
		// console.log("TEST");
	},
	addListener: function addListener() {
		var _this = this;
		// $("#btnUbahData"+this.numTr).click(function() {
		// 	console.log("id", _this.numTr);
		// 	_this.fillUbahDataModal();
		// });
		// $("#btnDelete"+this.numTr).click(function() {
		// 	$("#nameDelete").text($("#name-"+_this.numTr).text());
		// });
		$("#span-file").click(function() {
			$("#photo").click();
		});
		$('#closeCreate').on('click', function (e) {
			$('#formCreate')
				.find("input[type=text]")
					.val('')
					.end()
		});
		$('#closeChangePass').on('click', function (e) {
			$('#formChangePass')
				.find("input[type=password]")
					.val('')
					.end()
		})
	},
	fillUbahDataModal: function fillUbahDataModal() {
		var _this = this;
		$("#idAdmin").val(this.numTr);
		$("#namaAdmin").val($("#name-"+this.numTr).text());
		$("#usernameAdmin").val($("#uname-"+this.numTr).text());
	}
}


$(document).ready(function() {obj.init()});

function getNum(id) {
	obj.numTr = id;
}

function ubahData(id) {
	$("#idAdmin").val(id);
	$("#namaAdmin").val($("#name-"+id).text());
	$("#usernameAdmin").val($("#uname-"+id).text());
}

function gantiPassword(id) {
	$("#idAdminPass").val(id);
}

function deleteAdmin(id) {
	$("#idAdminDel").val(id);
	$("#nameDelete").text($("#name-"+id).text());
}
