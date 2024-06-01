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

    // ANALITICS 1 LINE CHART
    const chart_line_a = document.getElementById("SesionLine");
    if (chart_line_a != null) {
      const ctl_a = chart_line_a.getContext('2d');
      const SesionLine = new Chart(ctl_a, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8'],
          datasets: [{
            label: 'Previous Week',
            data: [70, 121, 135, 234, 183, 104, 175, 13],
            fill: false,
            borderColor: text_secondary_500,
            borderDash: [5, 5],
            tension: 0.1,
            pointBackgroundColor: text_secondary_500
          },
          {
            label: 'Current Week',
            data: [13, 104, 175, 121, 231, 132, 283, 165],
            fill: false,
            borderColor: text_primary_500,
            tension: 0.1,
            pointBackgroundColor: text_primary_500
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
                borderDash: [4, 4],
              },
              position: 'right'
            }
          }
        }
      })
    }
    // ANALITICS 2 LINE CHART
    const chart_line_ab = document.getElementById("SesionDuration");
    if ( chart_line_ab != null) {
      const ctl_ab = chart_line_ab.getContext('2d');
      const SesionDuration = new Chart(ctl_ab, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8'],
          datasets: [{
            label: 'Previous Week',
            data: [6, 12, 8, 18, 11, 5, 16, 8],
            fill: false,
            borderColor: text_secondary_500,
            borderDash: [5, 5],
            tension: 0.1,
            pointBackgroundColor: text_secondary_500,
          },
          {
            label: 'Current Week',
            data: [8, 10, 15, 9, 14, 12, 18, 20],
            fill: false,
            borderColor: text_primary_500,
            tension: 0.1,
            pointBackgroundColor: text_primary_500
          }]
        },
        options: {
          animation: {
            y: {
              duration: 4000,
              from: 500
            }
          },
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
                borderDash: [4, 4],
              },
              position: 'right',
              ticks: {
                min: 0,
                max: 60,
                stepSize: 5,
                callback: function (value) {
                  return (value).toFixed(0) + 'm';
                },
              }
            }
          }
        }
      })
    }
    // ANALITICS 3 LINE CHART
    const chart_line_b = document.getElementById("BounceLine");
    if ( chart_line_b!= null) {
      const ctl_b = chart_line_b.getContext('2d');
      const BounceLine = new Chart(ctl_b, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8'],
          datasets: [{
            label: 'Previous Week',
            data: [70, 21, 35, 34, 83, 14, 75, 13],
            fill: false,
            borderColor: text_secondary_500,
            borderDash: [5, 5],
            tension: 0.1,
            pointBackgroundColor: text_secondary_500
          },
          {
            label: 'Current Week',
            data: [13, 14, 75, 21, 31, 32, 83, 65],
            fill: false,
            borderColor: text_primary_500,
            tension: 0.1,
            pointBackgroundColor: text_primary_500
          }]
        },
        options: {
          animation: {
            y: {
              duration: 4000,
              from: 500
            }
          },
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
                borderDash: [4, 4],
              },
              position: 'right',
              ticks: {
                min: 0,
                max: 100,
                stepSize: 20,
                callback: function (value) {
                  return (value / this.max * 100).toFixed(0) + '%'; // convert it to percentage
                }
              }
            }
          }
        }
      })
    }
    // ANALITICS COUNTRY
    const chart_line_country = document.getElementById("CountryLine");
    if ( chart_line_country!= null) {
      const ctl_country = chart_line_country.getContext('2d');

      let primary_gradient = ctl_country.createLinearGradient(100, 200, 400, 600);
      primary_gradient.addColorStop(0, text_primary_500);
      primary_gradient.addColorStop(1, text_secondary_500);

      const CountryLine = new Chart(ctl_country, {
        type: 'bar',
        data: {
          labels: ['IN', 'US', 'ES', 'UK', 'RU', 'ID', 'BR', 'AR'],
          datasets: [{
            label: 'Session',
            data: [26, 18, 16, 12, 9, 6, 4, 2],
            backgroundColor: [
              primary_gradient
            ],
            borderColor: [
              primary_gradient
            ],
            borderWidth: 1
          }]
        },
        options: {
          plugins: {
            legend: {
              display: false
            }
          },
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
                borderDash: [4, 4],
              },
              position: 'right',
              ticks: {
                min: 0,
                max: 60,
                stepSize: 5,
                callback: function (value) {
                  return (value).toFixed(0) + '%';
                },
              }
            }
          }
        }
      })
    }
    // ANALITICS DOUGHNUT CHART
    const chart_device = document.getElementById("DeviceChart");
    if ( chart_device != null) {
      const ctd = chart_device.getContext('2d');
      const DeviceChart = new Chart(ctd, {
        type: 'doughnut',
        data: {
          labels: ['Desktop','Tabs','Mobile'],
          datasets: [{
            label: 'Traffic Source',
            data: [925, 30, 252],
            backgroundColor: [
              text_primary_500,
              text_secondary_500,
              text_green_500
            ],
            hoverOffset: 4
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
    // ANALITICS PIE CHART
    const chart_pie = document.getElementById("PieChart");
    if ( chart_pie != null) {
      const ctp = chart_pie.getContext('2d');
      const PieChart = new Chart(ctp, {
        type: 'pie',
        data: {
          labels: ['Chrome', 'Mozilla', 'Safari', 'Others'],
          datasets: [{
            label: 'Session',
            data: [300, 150, 26, 18],
            backgroundColor: [
              text_primary_500,
              text_secondary_500,
              text_yellow_500,
              text_green_500
            ],
            hoverOffset: 4
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
    // ANALITICS USER CHART
    const chart_user = document.getElementById("UserChart");
    if ( chart_user != null) {
      const ctl = chart_user.getContext('2d');
      const UserChart = new Chart(ctl, {
        type: 'line',
        data: {
          labels: ['1', '2', '3', '4', '5', '6', '7'],
          datasets: [{
            label: 'Daily',
            data: [70, 121, 135, 105, 76, 150, 195],
            fill: false,
            borderColor: text_secondary_500,
            borderWidth: 1,
            radius: 0,
            tension: 0.1
          },
          {
            label: 'Weekly',
            data: [471, 521, 635, 534, 483, 504, 875],
            fill: false,
            borderColor: text_primary_500,
            borderWidth: 1,
            radius: 0,
            tension: 0.1
          },
          {
            label: 'Monthly',
            data: [1689, 1986, 2175, 1921, 1631, 2032, 2683],
            fill: false,
            borderColor: text_green_500,
            borderWidth: 1,
            radius: 0,
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
                borderDash: [4, 4],
              },
              title: {
                display: true,
                text: 'August'
              }
            },
            y: {
              display: true,
              grid: {
                display: false,
              },
              Min: -10,
              Max: 200
            }
          }
        }
      })
    }
    // ANALITICS BAR CHART
    const chart_traffic = document.getElementById("TrafficChart");
    if ( chart_traffic != null) {
      const ctb = chart_traffic.getContext('2d');
      const TrafficChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: ['1', '2', '3', '4', '5', '6', '7'],
          datasets: [{
            label: 'Organic search',
            data: [70, 41, 35, 83, 73, 64, 75],
            backgroundColor: [
              text_primary_500,
            ]
          },
          {
            label: 'Direct',
            data: [27, 17, 15, 19, 12, 17, 11],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.8)
            ]
          },
          {
            label: 'Refferal',
            data: [24, 21, 35, 34, 23, 24, 15],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.6)
            ]
          },
          {
            label: 'Social',
            data: [9, 7, 12, 14, 18, 8, 9],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ]
          },
          {
            label: 'Others',
            data: [30, 31, 35, 34, 33, 34, 35],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.2)
            ]
          }]
        },
        options: {
          animation: {
            delay: 2000,
          },
          plugins: {
            legend: {
              display: false,
            }
          },
          responsive: true,
          scales: {
            x: {
              stacked: true,
              display: true,
              grid: {
                display: false
              },
              title: {
                display: true,
                text: 'August'
              }
            },
            y: {
              stacked: true,
              grid: {
                borderDash: [4, 4]
              }
            }
          }
        }
      })
    }
    // ANALITICS BAR CHART
    const chart_referral = document.getElementById("ReferralChart");
    if ( chart_referral != null) {
      const ctb = chart_referral.getContext('2d');
      const ReferralChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: ['1', '2', '3', '4', '5', '6', '7'],
          datasets: [{
            label: 'Google.com',
            data: [70, 54, 65, 73, 63, 64, 75],
            backgroundColor: [
              text_primary_500,
            ]
          },
          {
            label: 'Youtube.com',
            data: [17, 17, 15, 19, 12, 17, 11],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.8)
            ]
          },
          {
            label: 'Facebook.com',
            data: [24, 21, 35, 34, 23, 24, 15],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.6)
            ]
          },
          {
            label: 'Instagram.com',
            data: [9, 17, 12, 14, 18, 8, 9],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ]
          },
          {
            label: 'Others',
            data: [10, 21, 15, 14, 23, 24, 15],
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.2)
            ]
          }]
        },
        options: {
          plugins: {
            legend: {
              display: false,
            }
          },
          responsive: true,
          scales: {
            x: {
              stacked: true,
              display: true,
              grid: {
                display: false
              },
              title: {
                display: true,
                text: 'August'
              }
            },
            y: {
              stacked: true,
              grid: {
                borderDash: [4, 4]
              }
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