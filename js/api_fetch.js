
$(window).load(function(){

  $.ajax({
       url: 'http://starlord.hackerearth.com/kickstarter',
       type: 'GET',
       dataType: 'json',
       success: function(data, textStatus, xhr) {

         var total_no_users=data.length;
         var i=0;
         var j=0;
         while(i<total_no_users)
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
             var percentagefunded = data[i]["percentage.funded"];
             item_clone.find("#percentagefunded").text(percentagefunded+"%");
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
