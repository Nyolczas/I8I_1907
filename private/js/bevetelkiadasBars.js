var w = document.getElementById("chart-kiadas-bevetel-preview").offsetWidth;
var h = 220;
var padding = 2;

var heightX = h / Math.max(...bevetelKiadasDataset);
var svg = d3.select("#chart-kiadas-bevetel-preview").append("svg").attr("width", w).attr("height",
    h); // Create a variable for the svg selection.
// Use a value to pick a color.  This could be used to highlight KPIs etc.
function colorPicker(v) {
    switch (v) {
        case bevetelKiadasDataset[0]:
            return "#F3A59D";
            break;
        case bevetelKiadasDataset[1]:
            return "#E74C3C";
            break;
        case bevetelKiadasDataset[2]:
            return "#FFF";
            break;
        case bevetelKiadasDataset[3]:
            return "#8BDDCD";
            break;
        case bevetelKiadasDataset[4]:
            return "#18BC9C";
            break;
    }
}
svg.selectAll("rect") // Build the chart.
    .data(bevetelKiadasDataset)
    .enter() // Creates elements if they do not already exist.
    .append("rect") // Creates a rectangle.
    .attr({
        x: function (d, i) {
            if (i <= 2) {
                return 3 * i * (w / 13);
            } else {
                return (3 * i * (w / 13)) - (w / 13 * 2);
            }
        },
        y: function (d) {
            return h - (d * heightX);
        },
        width: function (i) {
            if (i == 2) {
                return w / 13 - padding;
            } else {
                return w / 13 * 3 - padding;
            }
        },
        height: function (d) {
            return d * heightX;
        },
        fill: function (d) {
            return colorPicker(d); // call the color picker to get the fill.
        }
    });
svg.selectAll("text").data(bevetelKiadasDataset).enter()
    .append("text")
    .text(function (d) {
        return d;
    })
    .attr({
        "text-anchor": "middle",
        x: function (d, i) {
            if (i <= 2) {
                return i * (w / 13 * 3) + (w / 13 * 3 - padding) / 2;
            } else {
                return (i * (w / 13 * 3) + (w / 13 * 3 - padding) / 2) - (w / 13 * 2);
            }
        },
        y: function (d) {
            return h - (d * heightX) + 14;
        },
        "font-family": "sans-serif",
        "font-size": 11,
        "fill": "#ffffff"
    });