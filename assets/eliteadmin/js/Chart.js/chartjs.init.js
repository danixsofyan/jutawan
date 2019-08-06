$(document).ready(function () {

    var ctx1 = document.getElementById("chart1").getContext("2d");
    var data1 = {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [
            // {
            //     label: "My Second dataset",
            //     fillColor: "rgba(243,245,246,0.9)",
            //     strokeColor: "rgba(243,245,246,0.9)",
            //     pointColor: "rgba(243,245,246,0.9)",
            //     pointStrokeColor: "#fff",
            //     pointHighlightFill: "#fff",
            //     pointHighlightStroke: "rgba(243,245,246,0.9)",
            //     data: [28, 48, 40, 19, 86, 27, 90, 10, 100, 50, 70, 100]
            // },
            {
                label: "My First dataset",
                fillColor: "rgba(152,235,239,0.8)",
                strokeColor: "rgba(152,235,239,0.8)",
                pointColor: "rgba(152,235,239,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(152,235,239,1)",
                data: [0, 59, 80, 58, 20, 55, 40, 20, 30, 40, 10, 100]
            }

        ]
    };

    var chart1 = new Chart(ctx1).Line(data1, {
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.005)",
        scaleGridLineWidth: 0,
        scaleShowHorizontalLines: true,
        scaleShowVerticalLines: true,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDot: true,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 2,
        datasetStroke: true,
        tooltipCornerRadius: 2,
        datasetStrokeWidth: 2,
        datasetFill: true,
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        responsive: true
    });


});