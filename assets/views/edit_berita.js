var obj = {
	init: function init() {
		this.initFunc();
		this.addListener();
		// console.log("TEST");
	},
	initFunc: function initFunc() {
		
		CKEDITOR.replace("isi");
		CKEDITOR.instances['isi'].set
		$.ajax({
			type: 'ajax',
			url: 'admin/unemployed_per_rw',
			dataType: 'JSON',
			success: function(data) {
				var dataPercentage = [];

				data.forEach(d => {
					var dataa;
					var percentage = parseFloat((d.total/(d.jml_warga/100)).toFixed(1));
					var name = 'rw'+d.rw;
					dataa = {'name': name, 'percentage': percentage, 'notWork': d.total};
					dataPercentage.push(dataa);
				});
				var kmeanResult = _this.kmeanCalc(dataPercentage);
				_this.createTable(kmeanResult);
				// console.log(_this.kmeanCalc(dataPercentage));
			}
		});
	},
}

$(document).ready(function() {obj.init()});
