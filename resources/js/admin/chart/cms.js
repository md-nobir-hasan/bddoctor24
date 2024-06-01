(function () {
  "use strict";

  /**
   * ------------------------------------------------------------------------
   *  Move the demo script to the footer before </body> 
   *  and edit the script for dynamic data needs.
   * ------------------------------------------------------------------------
   */

  // Colors
  const text_primary_500   =   '#6366F1';
  const text_secondary_500 =   '#EC4899';
  const text_green_500     =   '#22C55E';
  const text_gray_500      =   '#84848f';

  // Convert HEX TO RGBA
  function hexToRGBA(hex, opacity) {
    if (hex != null) {
      return 'rgba(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length/3 + '})', 'g')).map(function(l) { return parseInt(hex.length%2 ? l+l : l, 16) }).concat(isFinite(opacity) ? opacity : 1).join(',') + ')';
    }
  }

  // Demo Charts JS
  const myCharts = function () {
    Chart.defaults.color  =   text_gray_500;
  
     // CMS SMALL CHART LINE
     const chart_linesm = document.getElementById("LineAreaSm");
     if ( chart_linesm != null) {
       const ctla = chart_linesm.getContext('2d');
 
       const gradientIndigo = ctla.createLinearGradient(0, 70, 0, 0);
 
       gradientIndigo.addColorStop(1, hexToRGBA( text_primary_500, 0.5));
       gradientIndigo.addColorStop(0.2, hexToRGBA( text_secondary_500, 0.02));
       gradientIndigo.addColorStop(0, hexToRGBA( text_primary_500, 0.01));
 
       const LineAreaSm = new Chart(ctla, {
         type: 'line',
         data: {
           labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11'],
           datasets: [{
             fill: {
               target: 'origin'
             },
             borderColor: text_primary_500,
             backgroundColor: gradientIndigo,
             label: 'Page views',
             tension: 0.3,
             pointBackgroundColor: text_primary_500,
             pointBorderWidth: 0,
             pointHitRadius: 30,
             pointHoverBackgroundColor: text_primary_500,
             pointHoverRadius: 5,
             pointRadius: 0,
             data: [1170, 1321, 1835, 1834, 2183, 1504, 2175, 2521, 1835, 1834, 2183],
           }],
         },
         options: {
           scales: {
             x: {
               display: false
             },
             y: {
               display: false
             }
           },
           animation: {
             y: {
               duration: 2000,
               from: 500
             }
           },
           plugins: {
             legend: {
               display: false
             },
           },
         }
       })
     }
     // CMS SMALL CHART BAR
     const chart_barsm = document.getElementById("BarChartSm");
     if ( chart_barsm != null) {
       const ctb = chart_barsm.getContext('2d');
       const gradientIndigo = ctb.createLinearGradient(0, 200, 0, 20);
 
       gradientIndigo.addColorStop(1, hexToRGBA( text_primary_500 ));
       gradientIndigo.addColorStop(0.2, hexToRGBA( text_secondary_500 ));
 
       const BarChartSm = new Chart(ctb, {
         type: 'bar',
         data: {
           labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11'],
           datasets: [{
             label: 'Likes',
             data: [120, 462, 323, 184, 187, 362, 324, 429, 289, 559, 461, 394, 541],
             backgroundColor: [
               gradientIndigo
             ],
             borderColor: [
               gradientIndigo
             ],
             borderWidth: 1
           }]
         },
         options: {
           animation: {
             y: {
               duration: 2000,
               from: 500
             }
           },
           scales: {
             x: {
               display: false
             },
             y: {
               display: false
             }
           },
           plugins: {
             legend: {
               display: false
             }
           }
         }
       })
     }
     
     // CMS COMMENTS CHART
     const chart_comments = document.getElementById("BarComments");
     if ( chart_comments != null) {
       const ctb = chart_comments.getContext('2d');
       const gradientIndigo = ctb.createLinearGradient(0, 200, 0, 20);
 
       gradientIndigo.addColorStop(1, hexToRGBA( text_green_500, 0.9));
       gradientIndigo.addColorStop(0.2, hexToRGBA( text_primary_500, 0.2));
 
       const BarComments = new Chart(ctb, {
         type: 'bar',
         data: {
           labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11'],
           datasets: [{
             label: 'Comments',
             data: [220, 362, 423, 584, 287, 162, 324, 429, 589, 659, 361, 594, 141],
             backgroundColor: [
               gradientIndigo
             ],
             borderColor: [
               gradientIndigo
             ],
             borderWidth: 1
           }]
         },
         options: {
           animation: {
             y: {
               duration: 2000,
               from: 500
             }
           },
           scales: {
             x: {
               display: false
             },
             y: {
               display: false
             }
           },
           plugins: {
             legend: {
               display: false
             }
           }
         }
       })
     }
     // CMS SHARE CHART
     const chart_share = document.getElementById("BarShare");
     if ( chart_share != null) {
       const ctb = chart_share.getContext('2d');
       const gradientIndigo = ctb.createLinearGradient(0, 200, 0, 20);
 
       gradientIndigo.addColorStop(1, hexToRGBA( text_secondary_500, 0.9));
       gradientIndigo.addColorStop(0.2, hexToRGBA( text_primary_500, 0.2));
 
       const BarShare = new Chart(ctb, {
         type: 'bar',
         data: {
           labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11'],
           datasets: [{
             label: 'Share',
             data: [70, 162, 23, 84, 17, 62, 24, 49, 89, 59, 41, 94, 51],
             backgroundColor: [
               gradientIndigo
             ],
             borderColor: [
               gradientIndigo
             ],
             borderWidth: 1
           }]
         },
         options: {
           animation: {
             y: {
               duration: 2000,
               from: 500
             }
           },
           scales: {
             x: {
               display: false
             },
             y: {
               display: false
             }
           },
           plugins: {
             legend: {
               display: false
             }
           }
         }
       })
     }
     // CMS TRAFFIC CHART
     const chart_line_view = document.getElementById("PageView");
     if ( chart_line_view!= null) {
       const ctl_a = chart_line_view.getContext('2d');
 
       const PageView = new Chart(ctl_a, {
         type: 'line',
         data: {
           labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11'],
           datasets: [{
             label: 'Previous Week',
             data: [1323, 1481, 1588, 1602, 1720, 1801, 1925, 1628, 1581, 1788, 1802],
             fill: {
               target: 'origin'
             },
             borderColor: text_secondary_500,
             backgroundColor: hexToRGBA( text_secondary_500, 0.1),
             tension: 0.3,
             pointBackgroundColor: text_secondary_500,
             pointBorderWidth: 0,
             pointHitRadius: 30,
             pointHoverBackgroundColor: text_secondary_500,
             pointHoverRadius: 5,
             pointRadius: 0
           },
           {
             label: 'Current Week',
             data: [1170, 1321, 1835, 1834, 2083, 1904, 2175, 2221, 2135, 2334, 2483],
             fill: {
               target: 'origin'
             },
             borderColor: text_primary_500,
             backgroundColor: hexToRGBA( text_primary_500, 0.1),
             tension: 0.3,
             pointBackgroundColor: text_primary_500,
             pointBorderWidth: 0,
             pointHitRadius: 30,
             pointHoverBackgroundColor: text_primary_500,
             pointHoverRadius: 5,
             pointRadius: 0,
           }]
         },
         options: {
           animation: {
             y: {
               duration: 2000,
               from: 500
             }
           },
           responsive: true,
           plugins: {
             legend: {
               display: false,
             }
           },
           interaction: {
             mode: 'index',
             intersect: false,
           },
           scales: {
             x: {
               display: true,
               grid: {
                 display: false
               }
             },
             y: {
               display: true,
               grid: {
                 borderDash: [4, 4]
               }
             }
           }
         }
       })
     }
     // CMS GAUGE CHART
     const chart_gauge = document.getElementById("GaugeChart");
     if ( chart_gauge != null) {
       const ctd = chart_gauge.getContext('2d');
       const GaugeChart = new Chart(ctd, {
         type: "doughnut",
         data: {
           labels: ["Published", "Draft"],
           datasets: [{
               data: [320, 80],
               backgroundColor: [
                 text_primary_500,
                 text_secondary_500
               ],
               borderColor: [
                 text_primary_500,
                 text_secondary_500
               ],
               borderWidth: 1
           }]
         },
         options: {
           rotation: 180,
           circumference: 180,
           rotation: -90,
           cutout: 100,
           animation: {
             delay: 2000
           },
           plugins: {
             legend: {
               display: false,
             }
           }
         }
       })
     }
     // CMS GAUGE CHART 2
     const chart_seo = document.getElementById("SeoChart");
     if ( chart_seo != null) {
       const ctd = chart_seo.getContext('2d');
       const SeoChart = new Chart(ctd, {
         type: "doughnut",
         data: {
           labels: ["Optimized", "Need optimized"],
           datasets: [{
               data: [85, 15],
               backgroundColor: [
                 text_green_500,
                 hexToRGBA(text_gray_500, 0.2)
               ],
               borderColor: [
                 text_green_500,
                 hexToRGBA(text_gray_500, 0.2)
               ],
               borderWidth: 1
           }]
         },
         options: {
           rotation: 180,
           circumference: 180,
           rotation: -90,
           cutout: 100,
           animation: {
             delay: 2000
           },
           plugins: {
             legend: {
               display: false,
             }
           }
         }
       })
    }
  }

  /**
   * ------------------------------------------------------------------------
   * Launch Functions
   * ------------------------------------------------------------------------
   */
  myCharts();

})();
