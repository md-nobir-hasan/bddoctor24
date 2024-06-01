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

    // Digital marketing Revenue
    const chart_marketing = document.getElementById("MarketingRevenue");
    if ( chart_marketing != null) {
      const ctl = chart_marketing.getContext('2d');
      const LineChart = new Chart(ctl, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
          datasets: [{
            label: 'Facebook Ads',
            data: [1670, 1421, 1535, 1834, 1483, 1304, 1975],
            fill: false,
            borderColor: "#1877f2",
            backgroundColor: "#1877f2",
            cubicInterpolationMode: 'monotone',
            tension: 0.1
          },
          {
            label: 'Google Ads',
            data: [1290, 1204, 1175, 1421, 1331, 1532, 1283],
            fill: false,
            borderColor: text_green_500,
            backgroundColor: text_green_500,
            cubicInterpolationMode: 'monotone',
            tension: 0.1
          },
          {
            label: 'Twitter Ads',
            data: [290, 204, 175, 421, 131, 132, 283],
            fill: false,
            borderColor: "#1da1f2",
            backgroundColor: "#1da1f2",
            cubicInterpolationMode: 'monotone',
            tension: 0.1
          },
          {
            label: 'Youtube Ads',
            data: [590, 604, 775, 821, 831, 932, 983],
            fill: false,
            borderColor: "#ff0000",
            backgroundColor: "#ff0000",
            cubicInterpolationMode: 'monotone',
            tension: 0.1
          },
          {
            label: 'Tiktok Ads',
            data: [290, 304, 575, 621, 731, 832, 983],
            fill: false,
            borderColor: "#010101",
            backgroundColor: "#010101",
            cubicInterpolationMode: 'monotone',
            tension: 0.1
          }]
        },
        options: {
          animation: {
            y: {
              duration: 4000,
              from: 500
            }
          },
          responsive: true,
          plugins: {
            legend: {
              display: false
            }
          },
          interaction: {
            mode: 'index',
            intersect: false,
          },
          scales: {
            x: {
              display: true,
              title: {
                display: true
              },
              grid: {
                display: false              }
            },
            y: {
              display: true,
              title: {
                display: true,
                text: 'Total Revenue'
              },
              grid: {
                borderDash: [4, 4]
              },
              min: 0,
              max: 2500,
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return '$' + value;
                }
              }
            }
          }
        }
      })
    }
    // Digital marketing Sales
    const chart_marketingsales = document.getElementById("MarketingSales");
    if ( chart_marketingsales != null) {
      const ctb = chart_marketingsales.getContext('2d');
      const PipelineChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: [
            'Facebook Ads', 'Google Ads', 'Youtube Ads', 'Twitter Ads', 'Tiktok Ads','Instagram Ads'
          ],
          datasets: [{
            label: 'Sales',
            data: [270, 220, 155, 122, 98, 45],
            backgroundColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.6),
              hexToRGBA( text_primary_500, 0.5),
              hexToRGBA( text_primary_500, 0.4),
              hexToRGBA( text_primary_500, 0.2)
            ],
            borderColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.6),
              hexToRGBA( text_primary_500, 0.5),
              hexToRGBA( text_primary_500, 0.4),
              hexToRGBA( text_primary_500, 0.2)
            ],
            borderWidth: 1
          }]
        },
        options: {
          animation: {
            x: {
              duration: 4000,
              from: 0
            }
          },
          scales : {
            x: {
              display: true,
              grid: {
                borderDash: [4, 4]
              }
            },
            y: {
              display: true,
              grid: {
                display: false
              }
            }
          },
          indexAxis: 'y',
          elements: {
            bar: {
              borderWidth: 2,
            }
          },
          responsive: true,
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
