
<!-- jQuery -->
<script src="<?php echo PLUGINS.'jquery/jquery.min.js' ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo PLUGINS.'bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo JS.'adminlte.min.js' ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo JS.'demo.js' ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js"></script>

<script>

var barChartData = {
  labels: ["TACNA", "MEQUEGUA", "CUZCO", "LIMA", "AREQUIPA", "APURIMAC", "LORETO"],

  datasets: [{

      fillColor: "#6b9dfa",
      strokeColor: "#ffffff",
      highlightFill: "#1864f2",
      highlightStroke: "#ffffff",
      data: [80, 30, 10, 80, 15, 5, 15]

    },
    {

      fillColor: "#e9e225",
      strokeColor: "#ffffff",
      highlightFill: "#ee7f49",
      highlightStroke: "#ffffff",
      data: [40, 50, 70, 40, 85, 55, 15]

    }

  ]

}

var options = {
  responsive: true,
  showTooltips: false,
  onAnimationComplete: function() {

    var ctx = this.chart.ctx;
    ctx.font = this.scale.font;
    ctx.fillStyle = this.scale.textColor
    ctx.textAlign = "center";
    ctx.textBaseline = "bottom";

    this.datasets.forEach(function(dataset) {
      dataset.bars.forEach(function(bar) {
        ctx.fillText(bar.value, bar.x, bar.y - 5);
      });
    })
  }
};

var ctx3 = document.getElementById("chart-rea3").getContext("2d");
window.myPie = new Chart(ctx3).Bar(barChartData, options);
</script>
</body>

</html>
