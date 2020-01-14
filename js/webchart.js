var options = {
  chart: {
    type: 'bar',
    toolbar: {
      show: false
    }
  },
  series: [{
    name: 'gyakorlat',
    data: [100,100,99,98,97,99,97,75,49,60,55,33,60,40,73,57,29,23,18,19,25,9]
  }],
  plotOptions: {
    bar: {
      horizontal: true,
    }
  },
  colors: '#2A9FD6',
  xaxis: {
    categories: ['HTML5','CSS3','SASS','Bootstrap','Javascript','ES6','Web animáció','JQuery','Node.js','NPM','React', 'Vue','Typescript','Webpack','PHP','Laravel','MySQL','Python','C#','ASP.NET','Visual Basic','Java'],
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
    theme: 'dark'
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();