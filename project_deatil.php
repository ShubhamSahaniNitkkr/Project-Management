<html>
    <head>


        <!-- mobile meta -->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>Kickstarter | for Real Players</title>
        <!--lib css-->
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

        <!--custom css-->
        <!-- <link href='../css/main.css' rel='stylesheet' type='text/css'> -->
        <link href='css/home.css' rel='stylesheet' type='text/css'>

        <link rel="icon" type="image/x-icon" href="images/logo.png">

        <style media="screen">
        body{
          font-family: 'Roboto', sans-serif;
          background-image: url('images/wall1.jpg');
          color:#c83985;


        }
        .table-bordered {
          border: 3px dashed #c83985;
        }
        .btn-default:hover {
          background-color: transparent;
        }
        .table-hover>tbody>tr:hover{background-color:rgba(0,0,0,0.10);cursor: hand;}
  .table>tbody>tr>td{
    padding-top: 25px;
    padding-left: 25px;
  }
  .form-control{
    height: 108px;
    font-size: 75px;
    border: 6px solid #c83985;
    color: #c83985;
    border-radius: 25px;
  }

  .btn{
    position: relative;
    bottom:7px;
  }

  .glu{
    font-size: 19px;
    font-weight: 100;
    position: absolute;
    color: #4CAF50;
    left: 367px;
    top: 357px;
  }

.col-lg-12{
  /*margin-top: -12px;*/
}
  th{
    cursor: hand;
    position: relative;
    top: -9px;
  }
        </style>
    </head>
    <body>
      <?php

       ?>
      <div class="banner">
        <div class="background-color">
          <img src="images/banner.png"  class="jumbotron-image hidden-xs" alt="" width="1440px" height="420px"></img>

        </div>

      </div>

  <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:145px;">List of Projects</p>
  <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:45px;left: 50px;">   <a href="index.php">Home</a> <span class="glyphicon glyphicon-home"></span> </p>
  <div class="" style="height:100px;">



  </div>
  <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:456px;left:474px;">Top Available Projects of Different Category</p>

  <div class="container-fluid text-center backgroun" style="margin-top:55px;">

    <div class="col-md-6 col-md-offset-3">

        <div class="col-md-3 ">
          <img class="status_glyphicon" src="images/accuracy.svg"></img>
          <p class="btn btn-default area_of_score_btn" style="border-color:#4a90e2;">45%</p><br>Java Development

        </div>


        <div class="col-md-3 ">
          <img class="status_glyphicon" src="images/completion.svg"></img>
        <p class="btn btn-default area_of_score_btn" style="border-color:#48cdaf;" >25%</p><br>Mobile Development

        </div>


        <div class="col-md-3 ">
          <img class="status_glyphicon" src="images/score.svg"></img>
          <p class="btn btn-default area_of_score_btn" style="border-color:#bd10e0;">73%</p><br>Web Development

        </div>
        <div class="col-md-3 ">
          <img class="status_glyphicon" src="images/accuracy.svg"></img>
          <p  class="btn btn-default area_of_score_btn" style="border-color:#7a10d8">62%</p><br>JS Development


        </div>
    </div>
    <br>

    <br><br><br><br>
    <hr style="border-top: 5px solid #eee;padding-top:14px;">
</div>
<div class="container">
<br>
<div id="mydiv">
  <center>
  <span class="red h1">Plesae Click on Head of table For sorting!</span>
</center>
</div>
  <input class="form-control" id="myInput" type="text" placeholder="Search...">
  <br>
  <table class="table table-bordered " id="indextable">
    <thead style="text-align:center">
      <tr >
        <th id="menu-toggle1" onclick="sortTable(0)" style="padding-bottom: 19px;padding-top:32px;color:black;">Id </span> </th>
        <th id="menu-toggle1" onclick="sortTable(0)" style="padding-bottom: 19px;padding-top:32px;color:black;">Title </span> </th>
        <th id="menu-toggle1" onclick="sortTable(0)" style="padding-bottom: 19px;padding-top:32px;color:black;">Type </span> </th>
        <!-- <th id="menu-toggle2" onclick="sortTable(1)" style="padding-bottom: 19px;padding-top:32px;color:black;">Blurb</span></th> -->
        <th id="menu-toggle3" onclick="sortTable(0)" style="padding-left:18px;padding-bottom: 19px;padding-top:32px;color:black;">By:</th>
        <th id="menu-toggle3" onclick="sortTable(0)" style="padding-left:18px;padding-bottom: 19px;padding-top:32px;color:black;">Percentage Funded:</th>

        <th id="menu-toggle4" onclick="sortTable(0)" style="padding-left:18px;padding-bottom: 19px;padding-top:32px;color:black;">Residence </th>
        <th id="menu-toggle5" onclick="sortTable(0)" style="padding-left:18px;padding-bottom: 19px;padding-top:32px;color:black;">Url</th>

      </tr>
      <hr>
    </thead>
    <tbody id="resultcontainer">


      <tr class="result_json hidden">
        <td id="amtpledged"><?=$i;?></td>
        <td id="title"></td>
        <td id="type"></td>
        <td id="by"></td>
        <!-- <td id="state"></td> -->
        <!-- <td id="currency"></td>
        <td id="endtime"></td>
       -->
        <td id="percentagefunded"></td>
        <td id="country"></td>

        <!-- <td id="numbackers"></td> -->
          <!-- <td id="location"></td> -->
        <td id="url"></td>
      </tr>
    </tbody>

  </table>

</div>










    </body>
    <script type="text/javascript" src="bootstrap/js/jquery-2.0.2.min.js"></script>
    <script src="js/api_fetch.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      setTimeout(fade_out, 5000);

    function fade_out() {
      //code to hide message of sorting
      $("#mydiv").fadeOut().empty();
      }

      //Keyupfunction to search
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#resultcontainer tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });


    </script>



    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/details.js">  </script>
</html>
