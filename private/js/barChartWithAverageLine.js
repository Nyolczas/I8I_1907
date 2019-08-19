function barChartWithAverageLine(chartId, dataset) {
    var box = document.querySelector(chartId);

    var chartWidth = box.offsetWidth;
    var chartHeight = box.offsetHeight;

    var margin = {
            top: 30,
            right: 30,
            bottom: 30,
            left: 30
        },
        width = chartWidth - margin.left - margin.right,
        height = chartHeight - margin.top - margin.bottom;

    var parseDate = d3.time.format("%Y-%m").parse;

    var x = d3.scale.ordinal().rangeBands([0, width], .09); // <-- to change the width of the columns, change the .09 at the end to whatever
    var y = d3.scale.linear().range([height, 0]);

    var xAxis = d3.svg.axis().scale(x)
        .orient("bottom")
        .tickFormat(d3.time.format("%Y-%m"));

    var yAxisLeft = d3.svg.axis().scale(y)
        .orient("left");

    var valueline = d3.svg.line()
        .x(function (d) {
            return x(d.date) + x.rangeBand() / 2;
        })
        .y(function (d) {
            return y(d.average);
        });

    var svg = d3.select(chartId)
        .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform",
            "translate(" + margin.left + "," + margin.top + ")");

    // Get the dataset
    dataset.forEach(function (d) {
        d.date = parseDate(d.date);
        d.actual = +d.actual;
        d.average = +d.average;
    });

    // Scale the range of the dataset
    x.domain(dataset.map(function (d) {
        return d.date;
    }));
    y.domain([0, d3.max(dataset, function (d) {
        return d.actual;
    })]);

    // Add the X Axis
    svg.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0," + height + ")")
        .call(xAxis);

    // Add the Y Axis
    svg.append("g")
        .attr("class", "y axis")
        .call(yAxisLeft);

    // Draw the bars
    svg.selectAll("bar")
        .data(dataset)
        .enter()
        .append("rect")
        .style("fill", "#F39C12")
        .attr("x", function (d) {
            return x(d.date);
        })
        .attr("width", x.rangeBand())
        .attr("y", function (d) {
            return y(d.actual);
        })
        .attr("height", function (d) {
            return height - y(d.actual);
        });

    // Add the valueline path
    svg.append("path")
        .attr("d", valueline(dataset));
}