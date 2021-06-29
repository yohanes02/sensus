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
				$("#end-working").attr('required', 'required');
				$("#status-work").val('0');
				document.getElementById("end-working").disabled = false;
			} else {
				$("#stillWork").attr('checked', 'checked');
				$("#end-working").removeAttr('required');
				document.getElementById("end-working").disabled = true;
				$("#end-working").val('-');
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
		$("#stillWorkModal").click(function() {
			console.log(document.getElementById("stillWorkModal").hasAttribute('checked'));
			if(document.getElementById("stillWorkModal").hasAttribute('checked')) {
				$("#stillWorkModal").removeAttr('checked');
				// $("#stillWorkModal").prop('checked', false);
				$("#endWorking").attr('required', 'required');
				$("#statusWork").val('0');
				document.getElementById("endWorking").disabled = false;
			} else {
				$("#stillWorkModal").attr('checked', 'checked');
				// $("#stillWorkModal").prop('checked', true);
				$("#endWorking").removeAttr('required');
				$("#endWorking").val('-');
				$("#statusWork").val('1');
				document.getElementById("endWorking").disabled = true;
			}
		});
	}
}

$(document).ready(function() {obj.init()});

function editWork(id) {
	// var moment = new moment();
	$("#idPekerjaan").val(id);
	var dateStart = moment($("#start-"+id).text()).format('YYYY-MM-DD');
	var dateEnd;
	if($("#end-"+id).text() == 'Sekarang') {
		console.log("NOW");
		dateEnd = null;
		document.getElementById("endWorking").disabled = true;
		$("#stillWorkModal").attr('checked', 'checked');
		$("#stillWorkModal").prop('checked', true);
		$("#statusWork").val('1');
	} else {
		console.log("NOT NOW");
		dateEnd = moment($("#end-"+id).text()).format('YYYY-MM-DD');
		document.getElementById("endWorking").disabled = false;
		// if(document.getElementById("stillWorkModal").hasAttribute('checked')) {
			$("#stillWorkModal").removeAttr('checked');
			$("#stillWorkModal").prop('checked', false);
			$("#statusWork").val('0');
		// }
	}
	// var dateStart = moment($("#start-"+id).text());
	console.log($("#end-"+id).text());
	$("#namaPerusahaan").val($("#perusahaan-"+id).text());
	$("#bidang").val($("#bidang-"+id).text());
	$("#startWorking").val(dateStart);
	$("#endWorking").val(dateEnd);
}

function deleteWork(id) {
	$("#idWorkDel").val(id);
}
