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
  const text_yellow_500    =   '#F59E0B';
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

    // Sales KPI
    const chart_kpi = document.getElementById("ChartKpi");
    if ( chart_kpi != null) {
      const ctb = chart_kpi.getContext('2d');
      const TrafficChart = new Chart(ctb, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
          datasets: [{
            label: 'New customers',
            data: [7890, 9700, 9410, 9970, 10990, 10980, 11090, 12500],
            fill: {
              target: 'origin'
            },
            borderColor: text_primary_500,
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            tension: 0.3,
            pointBackgroundColor: text_primary_500,
            pointBorderWidth: 0,
            pointHitRadius: 30,
            pointHoverBackgroundColor: text_primary_500,
            pointHoverRadius: 5,
            pointRadius: 0,
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue) + ' New customers'
              }
            }
          },
          {
            label: 'Up/Cross Selling',
            data: [430, 631, 535, 634, 733, 834, 735, 980],
            fill: {
              target: 'origin'
            },
            borderColor: [
              hexToRGBA( text_secondary_500, 0.5)
            ],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.1)
            ],
            tension: 0.3,
            pointBackgroundColor: [
              hexToRGBA( text_primary_500, 0.1)
            ],
            pointBorderWidth: 0,
            pointHitRadius: 30,
            pointHoverBackgroundColor: [
              hexToRGBA( text_primary_500, 0.1)
            ],
            pointHoverRadius: 5,
            pointRadius: 0,
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue) + ' Up/Cross Selling'
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
            x: {
              stacked: true,
              display: true,
              grid: {
                display: false
              }
            },
            y: {
              stacked: true,
              grid: {
                borderDash: [4, 4]
              },
              min: 0,
              max: 16000,
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
          }
        }
      })
    }
    // Sales KPI Profit
    const chart_profit = document.getElementById("BarProfit");
    if ( chart_profit != null) {
      const ctb = chart_profit.getContext('2d');
      const BarChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
          datasets: [{
            label: '# Net Profit',
            data: [1170, 1321, 1835, 1834, 2183, 1504, 2175, 2521],
            backgroundColor: [
              hexToRGBA( text_green_500, 0.4)
            ],
            borderColor: text_green_500,
            borderWidth: 1,
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue)
              }
            }
          }]
        },
        options: {
          animation: {
            y: {
              duration: 4000,
              from: 500
            }
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
              display: false
            }
          }
        }
      })
    }
    // Sales KPI Up cross sell
    const chart_upcross = document.getElementById("Chartcross");
    if ( chart_upcross != null) {
      const ctds = chart_upcross.getContext('2d');
      const StorageChart = new Chart(ctds, {
        type: 'doughnut',
        data: {
          labels: ['Up Sell','Cross Sell'],
          datasets: [{
            label: 'Revenue',
            data: [6300, 3400],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_secondary_500, 0.8),
            ],
            hoverOffset: 4,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.label) +': ' + '$' + (Item.formattedValue)
              }
            }
          }]
        },
        options: {
          animation: {
            delay: 2000
          },
          plugins: {
            legend: {
              display: false
            }
          }
        }
      })
    }
    // Sales KPI Cost
    const chart_cost = document.getElementById("ChartCost");
    if ( chart_cost != null) {
      const ctp = chart_cost.getContext('2d');
      const PieChart = new Chart(ctp, {
        type: 'pie',
        data: {
          labels: ['Marketing', 'Sales', 'Maintenance', 'Others'],
          datasets: [{
            label: 'Costs',
            data: [3100, 2350, 1260, 980],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_secondary_500, 0.8),
              hexToRGBA( text_yellow_500, 0.8),
              hexToRGBA( text_green_500, 0.8),
            ],
            hoverOffset: 4,
            tooltip: {
              callbacks: {
                label: (Item) => (Item.label) +': ' + '$' + (Item.formattedValue)
              }
            }
          }]
        },
        options: {
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
    // Sales KPI Cost
    const chart_incremental = document.getElementById("ChartIncremental");
    if ( chart_incremental != null) {
      const ctb = chart_incremental.getContext('2d');
      const PipelineChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: [
            'Email', 'Google Ads', 'Facebook Ads', 'Tiktok Ads', 'Twitter', 'Instagram', 'Others',
          ],
          datasets: [{
            label: 'Clents',
            data: [1270, 1020, 955, 922, 798, 722, 698],
            backgroundColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.7),
              hexToRGBA( text_primary_500, 0.6),
              hexToRGBA( text_primary_500, 0.5),
              hexToRGBA( text_primary_500, 0.4),
              hexToRGBA( text_primary_500, 0.2)
            ],
            borderColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.7),
              hexToRGBA( text_primary_500, 0.6),
              hexToRGBA( text_primary_500, 0.5),
              hexToRGBA( text_primary_500, 0.4),
              hexToRGBA( text_primary_500, 0.2)
            ],
            borderWidth: 1,
            tooltip: {
              callbacks: {
                label: (Item) => '$' + (Item.formattedValue)
              }
            }
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
              },
              ticks: {
                // Include % in the ticks
                callback: function(value, index, ticks) {
                    return '$' + value;
                }
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
    // Sales KPI Target
    const chart_target = document.getElementById("ChartTarget");
    if ( chart_target != null) {
      const ctb = chart_target.getContext('2d');
      const BarChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
          datasets: [{
            label: 'Target',
            data: [1100, 1200, 1350, 1400, 1500, 1550, 1600, 1600],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.6)
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.6)
            ],
            borderWidth: 1
          },
          {
            label: 'Sales',
            data: [1670, 1721, 1235, 1234, 1683, 1724, 1875, 960],
            backgroundColor: [
              text_primary_500,
            ],
            borderColor: [
              text_primary_500,
            ],
            borderWidth: 1
          }]
        },
        options: {
          animation: {
            y: {
              duration: 4000,
              from: 500
            }
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
          },
          plugins: {
            legend: {
              display: true,
              position: "bottom",
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
