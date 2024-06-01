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

    // CRM CHART LINE AREA
    const chart_linearea = document.getElementById("LineArea");
    if ( chart_linearea != null) {
      const ctla = chart_linearea.getContext('2d');
      
      const gradientIndigo = ctla.createLinearGradient(0, 230, 0, 50);
      gradientIndigo.addColorStop(1, hexToRGBA( text_primary_500, 0.3));
      gradientIndigo.addColorStop(0.2, hexToRGBA( text_primary_500, 0.02));
      gradientIndigo.addColorStop(0, hexToRGBA( text_primary_500, 0.01));

      const LineArea = new Chart(ctla, {
        type: 'line',
        data: {
          labels: ['Aug 1', 'Aug 2', 'Aug 3', 'Aug 4', 'Aug 5', 'Aug 6', 'Aug 7', 'Aug 8', 'Aug 9', 'Aug 10', 'Aug 11', 'Aug 12'],
          datasets: [{
            fill: {
              target: 'origin'
            },
            borderColor: text_primary_500,
            backgroundColor: gradientIndigo,
            label: 'Deals',
            tension: 0.3,
            pointBackgroundColor: text_primary_500,
            pointBorderWidth: 0,
            pointHitRadius: 30,
            pointHoverBackgroundColor: text_primary_500,
            pointHoverRadius: 5,
            pointRadius: 0,
            data: [120, 462, 323, 184, 187, 362, 324, 429, 289, 559, 461, 394, 541],
          }],
        },
        options: {
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
          animation: {
            y: {
              duration: 4000,
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
    // CRM BAR CHART
    const chart_crm = document.getElementById("CrmChart");
    if ( chart_crm != null) {
      const ctb = chart_crm.getContext('2d');
      const CrmChart = new Chart(ctb, {
        type: 'scatter',
        data: {
          labels: [
            'April', 'May', 'June', 'July', 'August',
          ],
          datasets: [{
            type: 'line',
            label: 'Preview Data',
            data: [180, 110, 155, 80, 98],
            backgroundColor: [
              text_secondary_500,
            ],
            borderColor: text_secondary_500,
            borderDash: [4, 4],
          }, 
          {
            type: 'bar',
            label: 'Deal',
            data: [180, 110, 155, 80, 98],
            fill: false,
            backgroundColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderColor: [
              hexToRGBA( text_primary_500, 0.4)
            ],
            borderWidth: 2
          }]
        },
        options: {
          animation: {
            delay: 2000
          },
          scales: {
            y: {
              beginAtZero: true
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
    // CRM PIPELINE CHART
    const chart_pipeline = document.getElementById("PipelineChart");
    if ( chart_pipeline != null) {
      const ctb = chart_pipeline.getContext('2d');
      const PipelineChart = new Chart(ctb, {
        type: 'bar',
        data: {
          labels: [
            'Qualified', 'Lead', 'Meeting', 'Proposal Send', 'Deal',
          ],
          datasets: [{
            label: 'Clents',
            data: [270, 220, 155, 122, 98],
            backgroundColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.6),
              hexToRGBA( text_primary_500, 0.4),
              hexToRGBA( text_primary_500, 0.2)
            ],
            borderColor: [
              text_primary_500,
              hexToRGBA( text_primary_500, 0.8),
              hexToRGBA( text_primary_500, 0.6),
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
    // CRM EMAIL DOUGHNUT CHART
    const chart_email = document.getElementById("EmailChart");
    if ( chart_email != null) {
      const ctd = chart_email.getContext('2d');
      const EmailChart = new Chart(ctd, {
        type: 'doughnut',
        data: {
          labels: ['Read','Spam','Unread'],
          datasets: [{
            label: 'Traffic Source',
            data: [925, 30, 252],
            backgroundColor: [
              text_primary_500,
              text_secondary_500,
              text_yellow_500
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
