var obj = {
	site_url: 'http://localhost/kuliah/sensus/',
	numTr: null,
	init: function init() {
		this.addListener();
		// this.checkIfPassSame();
		// console.log("TEST");
	},
	checkIfPassSameAdd: function checkIfPassSameAdd() {
		if($('#alert_pass_add')) {
      $('#alert_pass_add').remove();
    }
		if($("#namaBaru").val() != "" && $("#usernameBaru").val() != "" && $("#retypePasswordBaru").val() != "" && $("#passwordBaru").val() != "") {
      if($("#passwordBaru").val() == $("#retypePasswordBaru").val()) {
        console.log("same");
        $("#submitCreate").attr("disabled", false);
				// $('#alert_pass').remove();
      } else {
        var span = document.createElement('span');
        span.id = 'alert_pass_add';
        span.textContent = "Tidak sama dengan password baru";
        span.className = 'text-danger';
        var div = document.getElementById('reNewPassAddDiv');
        div.append(span);
        $("#submitCreate").attr("disabled", true);
      }
    } else {
      $("#submitCreate").attr("disabled", true);
    }
	},
	checkIfPassSameModal: function checkIfPassSame() {
		if($('#alert_pass')) {
      $('#alert_pass').remove();
    }
		if($("#newPassword").val() != "" && $("#retypePassword").val() != "" && $("#lastPassword").val() != "") {
      if($("#newPassword").val() == $("#retypePassword").val()) {
        console.log("same");
        $("#submitChangePass").attr("disabled", false);
				// $('#alert_pass').remove();
      } else {
        var span = document.createElement('span');
        span.id = 'alert_pass';
        span.textContent = "Tidak sama dengan password baru";
        span.className = 'text-danger';
        var div = document.getElementById('reNewPassDiv');
        div.append(span);
        $("#submitChangePass").attr("disabled", true);
      }
    } else {
      $("#submitChangePass").attr("disabled", true);
    }
	},
	addListener: function addListener() {
		var _this = this;
		$("#span-file").click(function() {
			$("#photo").click();
		});
		$('#closeCreate').on('click', function (e) {
			$('#formCreate')
				.find("input")
					.val('')
					.end()
		});
		$('#closeCreateModal').on('click', function (e) {
			$('#formCreate')
				.find("input")
					.val('')
					.end()
		});
		$('#closeChangePassModal').on('click', function (e) {
			$('#formChangePass')
				.find("input[type=password]")
					.val('')
					.end()
		});
		$('#closeChangePass').on('click', function (e) {
			$('#formChangePass')
				.find("input[type=password]")
					.val('')
					.end()
		});
		$('#lastPassword').on('keyup', function(e) {
			_this.checkIfPassSameModal();
		});
		$('#newPassword').on('keyup', function(e) {
			_this.checkIfPassSameModal();
		});
		$('#retypePassword').on('keyup', function(e) {
			_this.checkIfPassSameModal();
		});
		$('#namaBaru').on('keyup', function(e) {
			_this.checkIfPassSameAdd();
		});
		$('#usernameBaru').on('keyup', function(e) {
			_this.checkIfPassSameAdd();
		});
		$('#passwordBaru').on('keyup', function(e) {
			_this.checkIfPassSameAdd();
		});
		$('#retypePasswordBaru').on('keyup', function(e) {
			_this.checkIfPassSameAdd();
		});
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
	$("#rw").val($("#sekre-"+id).text());
}

function gantiPassword(id) {
	$("#idAdminPass").val(id);
	$('#alert_pass').remove();
}

function deleteAdmin(id) {
	$("#idAdminDel").val(id);
	$("#nameDelete").text($("#name-"+id).text());
}
