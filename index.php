<html>
    <head>

        <!-- mobile meta-->
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <title>Kickstarter || for Real Programmers</title>

        <!--Lib CSS-->
        <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

        <!--custom css-->
        <link href='css/home.css' rel='stylesheet' type='text/css'>

        <!--icon-->
        <link rel="icon" type="image/x-icon" href="images/logo.png">
    </head>



<style media="screen">
      body{font-family: 'Roboto', sans-serif;background-image: url('images/walql.jpg');}
      .k p{font-size: 16px;}
      .head{
        font-size: 35px;
        text-align: center;
      }
</style>



  <body>


    <div class="background-color hidden-xs hidden-sm">
      <img src="images/wall.jpg" class="mobile" height="780px" width="100%">
      <p class="jumbotron-heading col-xs-12 text-center" style="font-size:40px;background-color: #663399b3;"><span style="color:red;">"</span> Every project is an opportunity to learn, to figure out problems and challenges, to invent and reinvent !<span style="color:red;">"</span></p>
      <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:365px;left:535px;"><a href="project_deatil.php" style="background-color: white; color:rgba(0, 0, 0, 0.77);text-decoration:none;" class="search" >Check Top Projects Here!</a></p>
    </div>





  <div class="container-fluid k" style="margin-top:520px;margin-right: 35px; margin-left: 35px; margin-bottom: 65px;">
    <center>
    <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:855px;left:372px;  border: 5px solid mediumvioletred;font-size: 24px; top:880px;"><a href="index.php" style="background-color: white; color:rgba(0, 0, 0, 0.77);" class="search" >Trending Projects!</a></p>
    <p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;top:855px;left:762px;  border: 5px solid mediumvioletred;font-size: 24px; top:880px;"><a href="project_deatil.php" style="background-color: white; color:rgba(0, 0, 0, 0.77);" class="search " > <span class="glyphicon glyphicon-search"></span> Browse More Projects!</a></p>
</center>
    <img src="images/wall.jpg" class="mobile visible-xs" height="180px" width="100%" style="margin-top:-469px">
    <a href="project_deatil.php" style="background-color: white; color:rgba(0, 0, 0, 0.77);text-decoration:none;" class="search visible-xs text-center" >Check Top Projects Here!</a>


    <div class="row" id="resultcontainer">

      <div class="col-sm-4 col-md-5 result_json hidden box" >

        <br class="visible-xs">
        <!-- mediumvioletred -->
        <p class="heading"><b>Amt.pledged:</b> <span style="color:mediumvioletred" class="head" id="amtpledged"></span> </p>
        <p class=""><b>Title:</b> <span style="color:mediumvioletred" id="title"></span> </p>
        <p class="subheading"><b>Description:</b> <span style="color:mediumvioletred" id="blurb"></span> </p>
        <p><b>By:</b> <span style="color:red" id="by"></span> </p>

        <p><b>location:</b> <span style="color:mediumvioletred" id="location"></span> </p>
        <p><b>state:</b> <span style="color:mediumvioletred" id="state"></span> </p>
        <p><b>country:</b> <span style="color:mediumvioletred" id="country"></span> </p>

        <p><b>End.time:</b> <span style="color:mediumvioletred" id="endtime"></span> </p>
        <p><b>percentage.funded: </b><span style="color:red" id="percentagefunded"></span> </p>
        <p><b>type:</b> <span style="color:mediumvioletred" id="type"></span> </p>
        <p><b>url:</b> <span style="color:mediumvioletred" id="url"></span> </p>
      </div>





    </div>


  </div>


  </body>
    <script type="text/javascript" src="bootstrap/js/jquery-2.0.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script>

    $(window).load(function(){

      $.ajax({
           url: 'http://starlord.hackerearth.com/kickstarter',
           type: 'GET',
           dataType: 'json',
           success: function(data, textStatus, xhr) {

             var total_no_users=data.length;
             var i=0;
             var j=0;

             while(i<4)
             {
               var item_clone=$(".result_json").clone();
                 item_clone.removeClass('hidden');
                 item_clone.removeClass('result_json');

                 var amtpledged = data[i]["amt.pledged"];
                 item_clone.find("#amtpledged").text(amtpledged);
                 item_clone.find("#pid").html(++j);
                 item_clone.find("#blurb").text(data[i].blurb);
                 item_clone.find("#by").text(data[i].by);
                 item_clone.find("#country").text(data[i].country);
                 item_clone.find("#currency").text(data[i].currency);
                  var endtime= data[i]["end.time"];
                  item_clone.find("#endtime").text(endtime);
                 item_clone.find("#location").text(data[i].location);
                 item_clone.find("#percentage").text(data[i].percentage);
                   var numbackers = data[i]["num.backers"];

                 item_clone.find("#numbackers").text(numbackers);
                 item_clone.find("#state").text(data[i].state);
                 item_clone.find("#title").text(data[i].title);
                 item_clone.find("#type").text(data[i].type);
                 item_clone.find("#url").text(data[i].url);

                 $(item_clone).appendTo("#resultcontainer");
                 i++;
             }
           },
           error: function(xhr, textStatus, errorThrown) {
               console.log('Error in Fetching ');
           }
       });

    });

    </script>
  <footer>
<p class="jumbotron-subheading text-center" style="border: 5px solid mediumvioletred;left:501px;  border: 5px solid mediumvioletred;font-size: 24px; top:2362px;"><a href="project_deatil.php" style="background-color: white; color:rgba(0, 0, 0, 0.77);" class="search " > <span class="glyphicon glyphicon-search"></span> Browse More Projects Here !</a></p>
<br><br><br>
<br><br>

  </footer>

  </html>
