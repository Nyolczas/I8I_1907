var options = {
  chart: {
    type: 'bar'
  },
  series: [{
    name: 'gyakorlat',
    data: [100,100,96,98,97,99,97,75,49,60,55,33,60,40,73,57,29,23,18,19,25,9]
  }],
  plotOptions: {
    bar: {
      horizontal: true,
    }
  },
  xaxis: {
    categories: ['HTML5','CSS3','SASS','Bootstrap','Javascript','ES6','Web animáció','JQuery','Node.js','NPM','React', 'Vue','Typescript','Webpack','PHP','Laravel','MySQL','Python','C#','ASP.NET','Visual Basic','Java']
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();