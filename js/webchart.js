var kompetenciak = [{
  key: 'Design',
  value: 100
},
{
  key: 'Animáció',
  value: 110
},
{
  key: 'HTML',
  value: 100
},
{
  key: 'CSS3',
  value: 100
},
{
  key: 'SASS',
  value: 100
},
{
  key: 'Bootstrap',
  value: 97
},
{
  key: 'Javascript',
  value: 95
},
{
  key: 'ES6',
  value: 93
},
{
  key: 'JQuery',
  value: 80
},
{
  key: 'PHP',
  value: 80
},
{
  key: 'Laravel',
  value: 75
},
{
  key: 'React.js',
  value: 55
},
{
  key: 'Typescript',
  value: 45
},
{
  key: 'Webpack',
  value: 40
},
{
  key: 'Node.js',
  value: 38
},
{
  key: 'Vue.js',
  value: 36
},
{
  key: 'MySQL',
  value: 34
},
{
  key: 'Visual Basic',
  value: 25
},
{
  key: 'Python',
  value: 23
},
{
  key: 'ASP.NET',
  value: 19
},
{
  key: 'C#',
  value: 18
},
{
  key: 'Java',
  value: 9
},
];

var seriesCategories = [];
var seriesData = [];


kompetenciak.forEach(element => seriesCategories.push(element.key));
kompetenciak.forEach(element => seriesData.push(element.value));

var options = {
chart: {
  type: 'bar',
  toolbar: {
    show: false
  },
  height: 600
},
series: [{
  name: 'gyakorlat',
  data: seriesData
}],
plotOptions: {
  bar: {
    horizontal: true,
  }
},
colors: '#2A9FD6',
xaxis: {
  categories: seriesCategories,
  labels: {
    style: {
      colors: '#555'
    }
  },
  axisBorder: {
    show: true,
    color: '#555'
  },
  axisTicks: {
    show: true,
    borderType: 'solid',
    color: '#555'
  }
},
yaxis: {
  max: 100,
  categories: seriesCategories,
  labels: {
    style: {
      color: '#2A9FD6'
    }
  },
},
grid: {
  borderColor: '#555'
},
tooltip: {
  theme: 'dark',
  y: {
    formatter: function (y) {
      if (typeof y !== "undefined") {
        return y + ' %';
      }
      return y;
    }
  }
},
datalabels: {
  enabled: false
}
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();