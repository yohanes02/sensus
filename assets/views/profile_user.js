var obj = {
	init: function init() {
		this.addListener();
		// console.log("TEST");
	},
	addListener: function addListener() {
		var _this = this;
		$("#stillWork").click(function() {
			console.log(document.getElementById("stillWork").hasAttribute('checked'));
			if(document.getElementById("stillWork").hasAttribute('checked')) {
				$("#stillWork").removeAttr('checked');
				$("#status-work").val('0');
				document.getElementById("end-working").disabled = false;
			} else {
				$("#stillWork").attr('checked', 'checked');
				document.getElementById("end-working").disabled = true;
				$("#end-working").val();
				$("#status-work").val('1');
			}
		});
		$("#isAddressSameCb").click(function() {
			if (document.getElementById("isAddressSameCb").hasAttribute('checked')) {
				console.log("ADA");
				$("#isAddressSameCb").removeAttr('checked');
				$("#sameAddress").val('same');
				$("#currAddress").hide();
			} else {
				console.log("TIDAK ADA");
				$("#isAddressSameCb").attr('checked', 'checked');
				$("#sameAddress").val('not same');
				$("#currAddress").show();
			}
		});
	}
}

$(document).ready(function() {obj.init()});

function editWork(id) {
	// var moment = new moment();
	$("#idPekerjaan").val(id);
	var dateStart = moment($("#start-"+id).text()).format('YYYY-MM-DD');
	// var dateStart = moment($("#start-"+id).text());
	console.log(dateStart);
	$("#namaPerusahaan").val($("#perusahaan-"+id).text());
	$("#bidang").val($("#bidang-"+id).text());
	$("#startWorking").val(dateStart);
	$("#endWorking").val($("#end-"+id).text());
}

function deleteWork(id) {
	$("#idWorkDel").val(id);
}
