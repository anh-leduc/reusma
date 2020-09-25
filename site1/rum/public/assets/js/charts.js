var lineChart = AmCharts.makeChart("deal-analytic-chart", {
    "type": "serial",
    "theme": "light",
    "hideCredits": true,
    "dataDateFormat": "YYYY-MM-DD",
    "precision": 2,
    "valueAxes": [{
        "id": "v1",
        "position": "left",
        "autoGridCount": false,
        "labelFunction": function(value) {
            return "$" + Math.round(value) + "M";
        }
    }, {
        "id": "v2",
        "gridAlpha": 0,
        "autoGridCount": false
    }],
    "graphs": [{
            "id": "g1",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 8,
            "hideBulletsCount": 50,
            "lineThickness": 3,
            "lineColor": "#e95753",
            "title": "Resource Pool",
            "useLineColorForBulletBorder": true,
            "valueField": "market1",
            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        }, {
            "id": "g2",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 8,
            "hideBulletsCount": 50,
            "lineThickness": 3,
            "lineColor": "#89CFF0",
            "title": "Assigned",
            "useLineColorForBulletBorder": true,
            "valueField": "market2",
            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        },
        {
            "id": "g3",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 8,
            "hideBulletsCount": 50,
            "lineThickness": 3,
            "lineColor": "#BF55EC",
            "title": "Workable",
            "useLineColorForBulletBorder": true,
            "valueField": "market3",
            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        }, {
            "id": "g4",
            "valueAxis": "v2",
            "bullet": "round",
            "bulletBorderAlpha": 1,
            "bulletColor": "#FFFFFF",
            "bulletSize": 8,
            "hideBulletsCount": 50,
            "lineThickness": 3,
            "lineColor": "#26C281",
            "title": "Billable",
            "useLineColorForBulletBorder": true,
            "valueField": "market4",
            "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]]</b>"
        }
    ],
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha": 0,
        "valueLineAlpha": 0.2
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "equalSpacing": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "legend": {
        "useGraphSettings": true,
        "position": "top"
    },
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    //data for line chart
    "dataProvider": []
});

var barChart = AmCharts.makeChart("deal-analytic-chart-2", {
    "type": "serial",
    "theme": "light",
    "hideCredits": true,
    "dataDateFormat": "YYYY-MM-DD",
    "precision": 2,
    "valueAxes": [{
        "id": "v1",
        "position": "left",
        "autoGridCount": false,
        "labelFunction": function(value) {
            return "" + Math.round(value) + "";
        }
    }],
    "graphs": [{
        "id": "g3",
        "valueAxis": "v1",
        "lineColor": "#e95753",
        "fillColors": "#e95753",
        "fillAlphas": 1,
        "type": "column",
        "title": "Total Effort",
        "valueField": "effort1",
        "columnWidth": 0.5,
        "legendValueText": "[[value]] man.day",
        "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]] man.day</b>"
    }, {
        "id": "g4",
        "valueAxis": "v1",
        "lineColor": "#2ed8b6",
        "fillColors": "#2ed8b6",
        "fillAlphas": 1,
        "type": "column",
        "title": "Assigned Effort",
        "valueField": "effort2",
        "columnWidth": 0.5,
        "legendValueText": "[[value]] man.day",
        "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]] man.day</b>"
    }, {
        "id": "g5",
        "valueAxis": "v1",
        "lineColor": "#2ed8b6",
        "fillColors": "#2ed8b6",
        "fillAlphas": 0.5,
        "type": "column",
        "title": "Billable Effort",
        "valueField": "effort3",
        "columnWidth": 0.5,
        "legendValueText": "[[value]] man.day",
        "balloonText": "[[title]]<br /><b style='font-size: 130%'>[[value]] man.day</b>"
    }],
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha": 0,
        "valueLineAlpha": 0.2
    },
    "categoryField": "name",
    "categoryAxis": {
        "axisAlpha": 0,
        "lineAlpha": 0,
        "gridAlpha": 0,
        "minorGridEnabled": true,
    },
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "export": {
        "enabled": true
    },
    "dataProvider": []
});

var c3DonutChart = c3.generate({
    bindto: '#c3-donut-chart',
    data: {
        columns: [],
        type: 'donut',
        onclick: function(d, i) {
            console.log("onclick", d, i);
        },
        onmouseover: function(d, i) {
            console.log("onmouseover", d, i);
        },
        onmouseout: function(d, i) {
            console.log("onmouseout", d, i);
        }
    },
    color: {
        pattern: ['rgba(88,216,163,1)', 'rgba(4,189,254,0.6)', 'rgba(237,28,36,0.6)']
    },
    padding: {
        top: 0,
        right: 0,
        bottom: 30,
        left: 0,
    },
    donut: {
        title: ""
    }
});

loadDataLineChart = () => {

    $.ajax({
        type: 'get',
        url: 'home/resourceUsage',
        cache: false,
        dataType: 'json',
        success: function(data) {
            lineChart.dataProvider = data;
            lineChart.validateData(); // Refreshes the chart based on the new data
        },
        error: function(err) {
            alert("Can't Load Data For BarChart");
        }
    })
};

loadDataBarChart = () => {
    $.ajax({
        type: 'get',
        url: 'home/projectEffort',
        cache: false,
        dataType: 'json',
        success: function(data) {
            barChart.dataProvider = data;
            barChart.validateData();
        },
        error: function(err) {
            alert("Can't Load Data For BarChart");
        }
    })
    'use strict';
};

loadDataDonutChart = () => {
    $.ajax({
        url: "home/employeeStructure",
        type: "get",
        cache: false,
        success: function(data) {
            c3DonutChart.load({
                columns: data
            })
        },
        error: function(err) {
            alert("Can't load data for donut Chart");
        }
    });
    //Donut Chart
};


(function($) {
    loadDataBarChart();
    loadDataDonutChart();
    loadDataLineChart();

})(jQuery);