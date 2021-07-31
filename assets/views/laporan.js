var obj = {
	init: function init() {
		this.generateChart();
	},
	generateChart: function generateChart() {
		var _this = this;
		$.ajax({
			type: 'ajax', 
			url: '../admin/data_laporan',
			dataType: 'JSON',
			success: function(data) {
				var dataChart;
				var percentageLastData = [];
				var percentageCurrData = [];

				var i = 1;
				data.forEach(dt => {
					var totalLast = dt.data[2].data.pekerja + dt.data[2].data.pengangguran;
					var percentageLast = parseFloat(dt.data[2].data.pengangguran/(totalLast/100));
					var totalCurr = parseInt(dt.data[3].data.pekerja) + parseInt(dt.data[3].data.pengangguran);
					var percentageCurr = parseFloat(parseInt(dt.data[3].data.pengangguran)/(totalCurr/100));

					percentageLastData.push(percentageLast);
					percentageCurrData.push(percentageCurr);

					$dataRw = [
						{name: "2020", data:[dt.data[2].data.pekerja, dt.data[2].data.pengangguran], color: "#e91e63"},
						{name: "Sekarang", data:[parseInt(dt.data[3].data.pekerja), parseInt(dt.data[3].data.pengangguran)], color: "#009688"},
					];

					_this.chartPerRw(i, $dataRw);
					i++;
				});
				var dataLast = {
					name: "2020",
					data: percentageLastData,
					color: "#cddc39"
				};

				var dataCurr = {
					name: "Sekarang",
					data: percentageCurrData,
					color: "#ff5722"
				};

				var dataChart = [dataLast, dataCurr];

				_this.chartsLurah(dataChart);
			}
		});

		// this.chartsLurah();
	},
	chartsLurah: function chartLurah(dataChart) {
		Highcharts.chart("chartLurah", {
			chart: {
				type: "column",
			},
			title: {
				text: "Perbandingan pengangguran tiap RW",
			},
			xAxis: {
				categories: [
					"RW 01",
					"RW 02",
					"RW 03",
					"RW 04",
					"RW 05",
					"RW 06",
					"RW 07",
					"RW 08",
					"RW 09",
					"RW 10",
				],
				crosshair: true,
			},
			yAxis: {
				min: 0,
				title: {
					text: "Percentage (%)",
				},
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat:
					'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.0f} %</b></td></tr>',
				footerFormat: "</table>",
				shared: true,
				useHTML: true,
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
				},
			},
			series: dataChart
		});
	},
	chartPerRw: function chartPerRw(rw, data) {
		Highcharts.chart("chart"+rw, {
			chart: {
				type: "column",
			},
			title: {
				text: "RW "+rw,
			},
			xAxis: {
				categories: [
					"Pekerja",
					"Pengangguran",
				],
				crosshair: true,
			},
			yAxis: {
				min: 0,
				title: {
					text: "Frekuensi",
				},
			},
			tooltip: {
				headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
				pointFormat:
					'<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
					'<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
				footerFormat: "</table>",
				shared: true,
				useHTML: true,
			},
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
				},
			},
			series: data,
		});
	}
};

$(document).ready(function () {
	obj.init();
});
