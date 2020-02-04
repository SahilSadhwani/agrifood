$(function(){
$.ajax({
    url: "http://localhost/agrifood/src/data1.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var farmer_crop = [];
      var score = [];

      for(var i in data) {
        //farmer_crop.push("" + data[i].month);
        score.push(data[i].quantity);
      }

  //get the pie chart canvas
  var ctx1 = $("#pie-chartcanvas-1");
//  var ctx2 = $("#pie-chartcanvas-2");

  //pie chart data
  var data1 = {
    labels: ["Rice", "Wheat", "Barley"],
    datasets: [
      {
        //label: "TeamA Score",
        data: score,
        backgroundColor: [
          "#DEB887",
          "#A9A9A9",
          "#DC143C",
          "#F4A460",
          "#2E8B57"
        ],
        borderColor: [
          "#CDA776",
          "#989898",
          "#CB252B",
          "#E39371",
          "#1D7A46"
        ],
        borderWidth: [1, 1, 1, 1, 1]
      }
    ]
  };

  
  //options
  var options = {
    responsive: true,
    title: {
      display: true,
      position: "top",
      text: "Pie Chart",
      fontSize: 18,
      fontColor: "#111"
    },
    legend: {
      display: true,
      position: "bottom",
      labels: {
        fontColor: "#333",
        fontSize: 16
      }
    }
  };

  //create Chart class object
  var chart1 = new Chart(ctx1, {
    type: "pie",
    data: data1,
    options: options
  });
}
  });
  
});