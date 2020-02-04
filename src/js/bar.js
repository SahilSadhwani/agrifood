$(document).ready(function(){
  $.ajax({
    url: "http://localhost/agrifood/src/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var farmer_crop = [];
      var score = [];

      for(var i in data) {
        farmer_crop.push("" + data[i].month);
        score.push(data[i].quantity);
      }

      var chartdata = {
        labels: farmer_crop,
        datasets : [
          {
            label: 'Supply From Farmer',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});