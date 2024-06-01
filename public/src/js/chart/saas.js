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

    // SAAS CHART BAR
    const chart_barsaas = document.getElementById("BarChartSaas");
    if ( chart_barsaas != null) {
      const ctb = chart_barsaas.getContext('2d');
      const BarChart = new Chart(ctb, {
        type: 'scatter',
        data: {
          labels: [
            'Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7',
          ],
          datasets: [ 
          {
            type: 'bar',
            yAxisID: 'A',
            label: 'Visitor',
            data: [1080, 1100, 1055, 1380, 1598, 1680, 1798],
            fill: false,
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderWidth: 0,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + ' Visitors'
              }
            }
          },
          {
            type: 'bar',
            yAxisID: 'A',
            label: 'Free trial',
            data: [86, 99, 74, 89, 174, 189, 194],
            fill: false,
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.8)
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.8)
            ],
            borderWidth: 0,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + ' Free Trial'
              }
            }
          },
          {
            type: 'line',
            yAxisID: 'B',
            label: 'Conversion rate',
            data: [8, 9, 7, 10, 11, 10, 12],
            backgroundColor: [
              text_secondary_500,
            ],
            fill: false,
            borderColor: text_secondary_500,
            borderDash: [1, 1],
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + '% Conversion'
              }
            }
          }]
        },
        options: {
          animation: {
            delay: 2000
          },
          interaction: {
            mode: 'index',
            intersect: false,
          },
          scales: {
            A: {
              grid: {
                borderDash: [4, 4]
              },
              min: 0,
              max: 2000,
            },
            B: {
              position: 'right',
              grid: {
                display: false
              },
              min: 0,
              max: 25,
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return value + '%';
                }
              }
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
    // SAAS CHART BAR
    const chart_barpay = document.getElementById("BarChartPay");
    if ( chart_barpay != null) {
      const ctb = chart_barpay.getContext('2d');
      const BarChart = new Chart(ctb, {
        type: 'scatter',
        data: {
          labels: [
            'Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7',
          ],
          datasets: [ 
          {
            type: 'bar',
            yAxisID: 'A',
            label: 'Free trial',
            data: [86, 99, 74, 89, 174, 189, 194],
            fill: false,
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderWidth: 0,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + ' Free trial'
              }
            }
          },
          {
            type: 'bar',
            yAxisID: 'A',
            label: 'Paying user',
            data: [14, 15, 13, 16, 26, 39, 43],
            fill: false,
            backgroundColor: [
              hexToRGBA( text_green_500, 0.8)
            ],
            borderColor: [
              hexToRGBA( text_green_500, 0.8)
            ],
            borderWidth: 0,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + ' Paying users'
              }
            }
          },
          {
            type: 'line',
            yAxisID: 'B',
            label: 'Conversion rate',
            data: [16, 15, 18, 18, 15, 21, 22],
            backgroundColor: [
              text_primary_500,
            ],
            fill: false,
            borderColor: text_primary_500,
            borderDash: [1, 1],
            tooltip: {
              callbacks: {
                label: (Item) => (Item.formattedValue) + '% Conversion'
              }
            }
          }]
        },
        options: {
          animation: {
            delay: 2000
          },
          interaction: {
            mode: 'index',
            intersect: false,
          },
          scales: {
            A: {
              grid: {
                borderDash: [4, 4]
              },
              min: 0,
              max: 250,
            },
            B: {
              position: 'right',
              grid: {
                display: false
              },
              min: 0,
              max: 25,
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return value + '%';
                }
              }
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
    // SAAS CHART BAR
    const chart_baruser = document.getElementById("BarUser");
    if ( chart_baruser != null) {
      const ctb = chart_baruser.getContext('2d');
      const PipelineChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: [
            'Total Customers', 'Free customers', 'Paid customer',
          ],
          datasets: [{
            label: 'Total',
            data: [2970, 2220, 750],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.2),
              hexToRGBA( text_primary_500, 0.6),
               text_primary_500,
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.2),
              hexToRGBA( text_primary_500, 0.6),
               text_primary_500,
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
    // SAAS MMR
    const chart_mmr = document.getElementById("BarChartMmr");
    if ( chart_mmr!= null) {
      const ctl_a = chart_mmr.getContext('2d');

      const PageView = new Chart(ctl_a, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7'],
          datasets: [{
            label: 'Total MMR',
            yAxisID: 'A',
            data: [1023, 1181, 1588, 1702, 1920, 2001, 2325],
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
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue) + ' Total'
              }
            }
          },
          {
            label: 'New MMR',
            yAxisID: 'B',
            data: [170, 121, 185, 134, 203, 194, 275],
            fill: {
              target: 'origin'
            },
            borderColor: text_green_500,
            backgroundColor: hexToRGBA( text_green_500, 0.1),
            tension: 0.3,
            pointBackgroundColor: text_green_500,
            pointBorderWidth: 0,
            pointHitRadius: 30,
            pointHoverBackgroundColor: text_green_500,
            pointHoverRadius: 5,
            pointRadius: 0,
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue) + ' New'
              }
            }
          }]
        },
        options: {
          animation: {
            delay: 2000
          },
          interaction: {
            mode: 'index',
            intersect: false,
          },
          scales: {
            A: {
              position: 'left',
              grid: {
                borderDash: [4, 4]
              },
              min: 0,
              max: 3000,
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return '$' + value;
                }
              }
            },
            B: {
              position: 'right',
              grid: {
                display: false
              },
              min: 0,
              max: 500,
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return '$' + value;
                }
              }
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
    // SAAS MMR SMALL
    const chart_linesaas = document.getElementById("LineSAASSm");
    if ( chart_linesaas != null) {
      const ctla = chart_linesaas.getContext('2d');

      const gradientIndigo = ctla.createLinearGradient(0, 70, 0, 0);

      gradientIndigo.addColorStop(1, hexToRGBA( text_green_500, 0.5));
      gradientIndigo.addColorStop(0.2, hexToRGBA( text_green_500, 0.02));
      gradientIndigo.addColorStop(0, hexToRGBA( text_green_500, 0.01));

      const LineAreaSm = new Chart(ctla, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7'],
          datasets: [{
            fill: {
              target: 'origin'
            },
            borderColor: text_green_500,
            backgroundColor: gradientIndigo,
            label: 'MMR',
            tension: 0.3,
            pointBackgroundColor: text_green_500,
            pointBorderWidth: 0,
            pointHitRadius: 30,
            pointHoverBackgroundColor: text_green_500,
            pointHoverRadius: 5,
            pointRadius: 0,
            data: [1023, 1181, 1588, 1702, 1920, 2001, 2325],
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue)
              }
            }
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
    // SAAS CUSTOMER
    const chart_customerpay = document.getElementById("BarSAASSm");
    if ( chart_customerpay != null) {
      const ctb = chart_customerpay.getContext('2d');
      const gradientIndigo = ctb.createLinearGradient(0, 200, 0, 20);

      gradientIndigo.addColorStop(1, hexToRGBA( text_primary_500 ));
      gradientIndigo.addColorStop(0.2, hexToRGBA( text_primary_500, 0.01 ));

      const BarChartSm = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7'],
          datasets: [{
            label: 'Customers',
            data: [14, 15, 13, 16, 26, 39, 43],
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
    // SAAS Churn
    const chart_churn = document.getElementById("churn");
    if ( chart_churn != null) {
      const ctb = chart_churn.getContext('2d');
      const gradientIndigo = ctb.createLinearGradient(0, 200, 0, 20);

      gradientIndigo.addColorStop(1, hexToRGBA( text_secondary_500 ));
      gradientIndigo.addColorStop(0.8, hexToRGBA( text_secondary_500 ));

      const BarChartSm = new Chart(ctb, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7'],
          datasets: [{
            label: 'Customers',
            data: [38, 32, 27, 16, 26, 28, 13],
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
    // SAAS ARR
    const chart_arr = document.getElementById("ChartARR");
    if ( chart_arr != null) {
      const ctb = chart_arr.getContext('2d');
      const TrafficChart = new Chart(ctb, {
        type: 'line',
        data: {
          labels: ['Sep','Oct','Nov','Dec','Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
          datasets: [{
            label: 'Total ARR',
            yAxisID: 'A',
            data: [1040, 1120, 1140, 1120, 1240, 4120, 5780, 6210, 7300, 9600, 12700, 27900],
            borderColor: text_primary_500,
            backgroundColor: [
              text_primary_500,
            ],
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue)
              }
            }
          },
          {
            label: 'Maintenance',
            yAxisID: 'A',
            data: [15540, 14540, 15840, 15940, 15540, 11250, 10380, 9210, 9100, 8610, 8150, 6010],
            borderColor: text_secondary_500,
            backgroundColor: [
              text_secondary_500,
            ],
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue)
              }
            }
          }]
        },
        options: {
          animation: {
            delay: 2000,
          },
          interaction: {
            mode: 'index',
            intersect: false,
          },
          scales: {
            A: {
              position: 'left',
              grid: {
                borderDash: [4, 4]
              },
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return '$' + value;
                }
              }
            }
          },
          plugins: {
            legend: {
              display: true,
              position: "bottom"
            }
          },
          responsive: true
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
