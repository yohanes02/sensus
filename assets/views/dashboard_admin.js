var obj = {
	init: function init() {
		this.generateChart();
		this.kMean();
	},
	generateChart: function generateChart() {
		this.chartSummary();
		this.chartDetail();
	},
	kMean: function kMean() {
		let _this = this;
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
	kmeanCalc: function kmeanCalc(data) {
		console.log('kmean calc', data);
		var loopAgain = true;

		var iterasi = [];
		var countCluster = [];
		var cluster = ['c1', 'c2'];
		var c1Max, c2Min;

		var tempPercent = []
		data.forEach(element => {
			tempPercent.push(element.percentage);
		});
		// console.log(tempPercent);

		if(iterasi.length < 1) {
			c1Max = Math.max(...tempPercent);
			c2Min = Math.min(...tempPercent);

			var i1c1 = [];
			var i1c2 = [];
			var i = 0;
			var result = [];
			var c1Count = 0;
			var c2Count = 0;
			
			var incrementNotWork = 0;
			tempPercent.forEach(val => {
				var name = data[i].name;
				var valueC1 = Math.sqrt(Math.pow(c1Max - val, 2));
				var valueC2 = Math.sqrt(Math.pow(c2Min - val, 2));
				var closestDst = Math.min(valueC1, valueC2);
				var cluster;
				if (valueC1 <= valueC2) {
					c1Count++;
					cluster = '1';
				} else {
					c2Count++;
					cluster = '2';
				}
				result.push({'name': name, 'c1': valueC1, 'c2': valueC2, 'mindistance': closestDst, 'cluster': cluster, 'notWork': data[incrementNotWork].notWork});
				i++;
				incrementNotWork++;
			});

			countCluster.push({'c1': c1Count, 'c2': c2Count});
			iterasi.push(result);
		};

		var index = 0;
		while (iterasi.length >= 1) {
			// console.log(loopAgain);
			// if(index == 10) return;
			var valC1 = [];
			var valC2 = [];
			// console.log('iterasi', iterasi[iterasi.length-1]);
			
			for (let i = 0; i < iterasi[iterasi.length-1].length; i++) {
				if(iterasi[iterasi.length-1][i].cluster == '1') {
					valC1.push(tempPercent[i]);
				} else {
					valC2.push(tempPercent[i]);
				}
			}

			// console.log(valC1, valC2);
			c1Max = valC1.reduce(function(a,b) {return a+b;}, 0);
			c1Max = c1Max / valC1.length;
			c2Min = valC2.reduce(function(a,b) {return a+b;}, 0);
			c2Min = c2Min / valC2.length;
			// console.log('c1max', c1Max);
			// console.log('c2min', c2Min);

			var i = 0;
			var result = [];
			var c1Count = 0;
			var c2Count = 0;
			var incrementNotWork = 0;

			tempPercent.forEach(val => {
				var name = data[i].name;
				var valueC1 = Math.sqrt(Math.pow(c1Max - val, 2));
				var valueC2 = Math.sqrt(Math.pow(c2Min - val, 2));
				var closestDst = Math.min(valueC1, valueC2);
				var cluster;
				if (valueC1 <= valueC2) {
					c1Count++;
					cluster = '1';
				} else {
					c2Count++;
					cluster = '2';
				}
				result.push({'name': name, 'c1': valueC1, 'c2': valueC2, 'mindistance': closestDst, 'cluster': cluster, 'notWork': data[incrementNotWork].notWork});
				i++;
				incrementNotWork++;
			});

			countCluster.push({'c1': c1Count, 'c2': c2Count});
			iterasi.push(result);

			if(countCluster[countCluster.length - 2].c1 == countCluster[countCluster.length - 1].c1 && countCluster[countCluster.length - 2].c2 == countCluster[countCluster.length - 1].c2) {return iterasi};
			// console.log(iterasi);
		}

		// console.log('test');

	},
	chartSummary: function chartSummary() {
		$.ajax({
			type: 'ajax',
			url: 'admin/all_unemployed',
			dataType: 'JSON',
			success: function(data) {
				var dataSeries = [];
				
				var total = 0;
				data.forEach(d => {
					total += parseInt(d.total);
				});
				$("#total-data").text(total);
	
				data.forEach(d => {
					var percentage = parseFloat((d.total/(total/100)).toFixed(1));
					var tipe;
					if(d.bekerja == '0') {
						$("#total-pengangguran").text(d.total);
						tipe = 'Pengangguran';
					} else {
						$("#total-pekerja").text(d.total);
						tipe = 'Pekerja';
					}
					dataSeries.push({
						name: tipe,
						y: percentage
					});
				});
	
				Highcharts.chart("pieSummary", {
					chart: {
						type: "pie",
					},
					title: {
						text: "",
					},
					tooltip: {
						headerFormat: '',
						pointFormat: '<b>{point.name}</b><br/>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: true,
								format: "{point.percentage:.1f}%",
								distance: -50
							},
							showInLegend: true
			
						},
					},
					series: [
						{
							type: "pie",
							name: "Browser share",
							data: dataSeries,
						},
					],
					exporting: {
						enabled: false
					},
				});
			}
		});
	},
	chartDetail: function chartDetail() {
		$.ajax({
			type: 'ajax',
			url: 'admin/unemployed_per_rw',
			dataType: 'JSON',
			success: function(data) {
				var dataSeries = [];
	
				var total = 0;
				data.forEach(d => {
					total += parseInt(d.total);
				});
	
				data.forEach(d => {
					var percentage = parseFloat((d.total/(total/100)).toFixed(1));
					// console.log(percentage);
					dataSeries.push({
						name: 'RW' + d.rw,
						y: percentage
					});
				});
	
				Highcharts.chart("pieDetail", {
					chart: {
						type: "pie",
					},
					title: {
						text: "",
					},
					tooltip: {
						pointFormat: "Total: <b>{point.y:.1f}%</b>",
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: "pointer",
							depth: 35,
							dataLabels: {
								enabled: true,
								format: "{point.percentage:.1f}%",
								distance: -50
							},
							showInLegend: true
						},
					},
					series: [
						{
							type: "pie",
							name: "Browser share",
							data: dataSeries,
						},
					],
					exporting: {
						enabled: false
					},
				});
			}
		});
	},
	createTable: function createTable(data) {
		console.log('table', data);

		var tableKmeans = $("#kmeans-table");
		var thead = document.createElement('thead');
		var trHead = document.createElement('tr');
		var th = '';
		var title = ['#', 'Wilayah', 'Pengangguran', 'Jarak Terdekat'];

		for (let i = 0; i < title.length; i++) {
			th += '<th>'+title[i]+'</th>';
		}
		trHead.innerHTML = th;	
		thead.append(trHead);
		tableKmeans.append(thead);

		var tbody = document.createElement('tbody');
		// var trBody = document.createElement('tr');
		var trBody = '';
		var td = '';

		var index = 1;
		for (let j = 0; j < data[data.length-1].length; j++) {
			if (data[data.length-1][j].cluster == '1') {
				console.log(data[data.length-1][j]);
				var nameSplit = data[data.length-1][j].name.split("rw");
				var name = 'RW ' + nameSplit[1];
				td = '<td>'+ index +'</td><td>'+ name +'</td><td>'+data[data.length-1][j].notWork+' orang </td><td>'+data[data.length-1][j].mindistance.toFixed(3)+'</td>';
				trBody += '<tr>'+td+'</tr>';
				index++;
			}
		}
		tbody.innerHTML = trBody;
		tableKmeans.append(tbody);
	}
}


// function init() {
// 	generateChart();
// 	chartSummary();
// 	chartDetail();
// }



function chartSummary() {

	$.ajax({
		type: 'ajax',
		url: 'admin/all_unemployed',
		dataType: 'JSON',
		success: function(data) {
			var dataSeries = [];
			
			var total = 0;
			data.forEach(d => {
				total += parseInt(d.total);
			});
			$("#total-data").text(total);

			data.forEach(d => {
				var percentage = Math.round(d.total/(total/100));
				var tipe;
				if(d.bekerja == '0') {
					$("#total-pengangguran").text(d.total);
					tipe = 'Pengangguran';
				} else {
					$("#total-pekerja").text(d.total);
					tipe = 'Pekerja';
				}
				dataSeries.push({
					name: tipe,
					y: percentage
				});
			});



			Highcharts.chart("pieSummary", {
				chart: {
					type: "pie",
				},
				title: {
					text: "",
				},
				tooltip: {
					headerFormat: '',
					pointFormat: '<b>{point.name}</b><br/>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: "pointer",
						depth: 35,
						dataLabels: {
							enabled: true,
							format: "{point.percentage:.1f}%",
							distance: -50
						},
						showInLegend: true
		
					},
				},
				series: [
					{
						type: "pie",
						name: "Browser share",
						data: dataSeries,
					},
				],
			});
		}
	});
}

function chartDetail() {
	$.ajax({
		type: 'ajax',
		url: 'admin/unemployed_per_rw',
		dataType: 'JSON',
		success: function(data) {
			var dataSeries = [];

			var total = 0;
			data.forEach(d => {
				total += parseInt(d.total);
			});

			data.forEach(d => {
				var percentage = Math.round(d.total/(total/100));

				dataSeries.push({
					name: 'RW' + d.rw,
					y: percentage
				});
			});

			Highcharts.chart("pieDetail", {
				chart: {
					type: "pie",
				},
				title: {
					text: "",
				},
				tooltip: {
					pointFormat: "Total: <b>{point.y:.1f}%</b>",
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: "pointer",
						depth: 35,
						dataLabels: {
							enabled: true,
							format: "{point.percentage:.1f}%",
							distance: -50
						},
						showInLegend: true
					},
				},
				series: [
					{
						type: "pie",
						name: "Browser share",
						data: dataSeries,
					},
				],
			});
		}
	});
}


$(document).ready(function () {
	console.log("TEST");
	obj.init();
});
