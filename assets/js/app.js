$(document).ready(function(){
    $.ajax({
      url: "http://localhost/filecompression/test.php",
      
      method: "GET",
      success: function(data) {
        console.log(data);
        var id = [];
        var user_id = [];
  
        for(var i in data) {
          id.push("id " + data[i].id);
          user_id.push(data[i].user_id);
        }
  
        var chartdata = {
          labels: id,
          datasets : [
            {
              label: 'User id',
              backgroundColor: 'rgba(200, 200, 200, 0.75)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: user_id
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