<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>WMSIWT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <script src="formjs.js"></script>
    <link rel="stylesheet" type="text/css" href="formstyle.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,300,300italic,200|Lora:400,400italic,700italic|Bevan' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>

  <script>

  $("#name").focus();

    function actionRand()
    {
      var rand = parseInt((Math.random()) * 8);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Run Lola Run (1998)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Lola receives a phone call from her boyfriend Manni. He lost 100,000 DM in a subway train that belongs to a very bad guy. Lola has 20 min to raise this amount and meet Manni. Otherwise, he will rob a store to get the money. Three different alternatives may happen depending on some minor event along Lola's run.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/uz2-D4lY2qg\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
          

          /*var x = document.createElement("P");
    var t = document.createTextNode("This is a paragraph.");
    x.appendChild(t);
    document.body = t;
    
        var newDiv = document.createElement("div"); 
  var newContent = document.createTextNode("Hi there and greetings!"); 
  newDiv.appendChild(newContent); 
  document.write(newContent);
          var x = document.createElement("BUTTON");
    var t = document.createTextNode("Click me");
    x.appendChild(t);
    document.body.appendChild(x);*/
         
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Wave (2008)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A high school teacher's experiment to demonstrate to his students what life is like under a dictatorship spins horribly out of control when he forms a social unit with a life of its own.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/4FYDF8wGn5E\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Ran (1985)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#132)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A story of greed, a lust for power, and ultimate revenge. The Great Lord Hidetora Ichimonji has decided to step aside to make room for the younger blood of his three sons, Taro, Jiro, and Saburo, the Lord's only wish now being to live out his years as an honored guest in the castle of each of his sons in turn. While the older two sons flatter their father, the youngest son attempts to warn him of the folly of expecting the three sons to remain united; enraged at the younger son's attempt to point out the danger, the father banishes him. True to the younger son's warning, however, the oldest Son soon conspires with the second son to strip The Great Lord of everything, even his title.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/YwP_kXyd-Rw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Treasure of Sierra Madre (1948)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#107)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Fred Dobbs and Bob Curtin, two Americans searching for work in Mexico, convince an old prospector to help them mine for gold in the Sierra Madre Mountains.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/vGpvO8JabEc\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Kung Fu Hustle (2004)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">An extraordinary comedy.In Shanghai, China in the 1940s, a wannabe gangster aspires to join the notorious Axe Gang while residents of a housing complex exhibit extraordinary powers in defending their turf.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/-m3IB7N_PRk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
          
      }
      else if(rand== 5){
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">City of God (2002)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.7 <h5 style=\"color: red\">(Top:#27)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Two boys growing up in a violent neighborhood of Rio de Janeiro take different paths: one becomes a photographer, the other a drug dealer.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/dcUOO4Itgmw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
      }
      else if(rand== 6){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Fall (2006)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In a hospital on the outskirts of 1920s Los Angeles, an injured stuntman begins to tell a fellow patient, a little girl with a broken arm, a fantastic story of five mythical heroes. Thanks to his fractured state of mind and her vivid imagination, the line between fiction and reality blurs as the tale advances.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/IwsYyRc9j4g\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }
      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\"> Princess Mononoke (1997)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.4 <h5 style=\"color: red\">(Top:#65)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">On a journey to find the cure for a Tatarigami's curse, Ashitaka finds himself in the middle of a war between the forest gods and Tatara, a mining colony. In this quest he also meets San, the Mononoke Hime.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"actionRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/4OiMOHRDs14\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 

      }
    }


     function chickRand()
    {
      var rand = parseInt((Math.random()) * 5);
      if (rand== 0){
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Notebook (2004)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A poor and passionate young man falls in love with a rich young woman and gives her a sense of freedom. They soon are separated by their social differences.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"chickRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/yDJIcYE32NU\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
        

      }
      else if(rand== 1){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">About Time (2013)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">At the age of 21, Tim discovers he can travel in time and change what happens and has happened in his own life. His decision to make his world a better place by getting a girlfriend turns out not to be as easy as you might think.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"chickRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/T7A810duHvw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
       }

     
      else if(rand== 2){

          document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Silver Linings Playbook (2012)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">After a stint in a mental institution, former teacher Pat Solitano moves back in with his parents and tries to reconcile with his ex-wife. Things get more challenging when Pat meets Tiffany, a mysterious girl with problems of her own.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"chickRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Lj5_FhLaaQQ\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

          
        
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Before Triology: Sunrise (1995), Sunset (2004), Midnight (2013)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top: #206) <\/h5> / 8.0 <h5 style=\"color: red\">(Top: #249) <\/h5> / 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Richard Linklater’s critically acclaimed film trilogy starring Ethan Hawke and Julie Delpy. Each film is spaced nine years apart and chronicles the developing love story of two people who meet on a train in Europe one fateful summer. Critically  and commercially successful, Linklater’s trilogy may have flown under your radar but the superb writing and authentic performances make this romance trilogy the one to beat.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"chickRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/1EuzXjOvndE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

       
        
      }
      else{
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Good Bye, Lenin! (2003)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In 1990, to protect his fragile mother from a fatal shock after a long coma, a young man must keep her from learning that her beloved nation of East Germany as she knew it has disappeared.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"chickRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/u5hzmwGW4Ac\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

        }
    }

    function clsscRand(){

      var rand = parseInt((Math.random()) * 9);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Singin' in the Rain (1952)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#91)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A silent film production company and cast make a difficult transition to sound.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/36QiuRc_3I8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Casablanca (1942) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.6 <h5 style=\"color: red\">(Top:#33)<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In Casablanca, Morocco during the early days of World War II, an American expatriate meets a former lover, with unforeseen complications.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/EJvlGh_FgcI\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">American Beauty (1999)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.4 <h5 style=\"color: red\">(Top:#63)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A sexually frustrated suburban father has a mid-life crisis after becoming infatuated with his daughter's best friend.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/3ycmmJ6rxA8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Taxi Driver (1976)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#80)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A mentally unstable Vietnam War veteran works as a night-time taxi driver in New York City where the perceived decadence and sleaze feeds his urge for violent action, attempting to save a preadolescent prostitute in the process.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/sLpMx8_TYOo\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">2001: A Space Odyssey (1968)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#89) <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Humanity finds a mysterious, obviously artificial object buried beneath the Lunar surface and, with the intelligent computer H.A.L. 9000, sets off on a quest.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Z2UWOeBcsJI\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
          
      }
      else if(rand== 5){
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Roman Holiday (1953)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top:#240)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A bored and sheltered princess escapes her guardians and falls in love with an American newsman in Rome.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/9GzCG6lpFUw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
      }
      else if(rand== 6){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Annie Hall (1977)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top:#196) <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Neurotic New York comedian Alvy Singer falls in love with the ditsy Annie Hall.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/OqVgCfZX-yE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }

      else if(rand== 7){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Forrest Gump (1994)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.8 <h5 style=\"color: red\">(Top:#13) <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny Curran, eludes him.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/uPIEn0M8su0\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }


      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Apartment (1960)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3 <h5 style=\"color: red\">(Top:#100)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A man tries to rise in his company by letting its executives use his apartment for trysts, but complications and a romance of his own ensue.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clsscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/B4OXm9-E8OQ\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 

      }
    }

    function clssyRand(){

      var rand = parseInt((Math.random()) * 7);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Her (2013)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A lonely writer develops an unlikely relationship with his newly purchased operating system that's designed to meet his every need.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/WzV6mXIOVl4\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Grand Budapest Hotel (2014) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top:#189)<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">The adventures of Gustave H, a legendary concierge at a famous hotel from the fictional Republic of Zubrowka between the first and second World Wars, and Zero Moustafa, the lobby boy who becomes his most trusted friend.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/1Fg5iWmQjwk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Populaire (2012)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 6.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">1958. Rose is a terrible secretary but a demon typist. Her handsome boss resolves to turn her into the fastest girl in the world.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/i6upoz9I7eg\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">An Education (2009)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.3<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A coming-of-age story about a teenage girl in 1960s suburban London, and how her life changes with the arrival of a playboy nearly twice her age.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/qn9IMe5jmf0\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Midnight in Paris (2011)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7<p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">While on a trip to Paris with his fiancée's family, a nostalgic screenwriter finds himself mysteriously going back to the 1920s everyday at midnight.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/FAfR8omt-CY\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
          
      }
      else if(rand== 5){
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">In The Mood For Love (2000)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top:#244)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Two neighbors, a woman and a man, form a strong bond after both suspect extramarital activities of their spouses. However, they agree to keep their bond platonic so as not to commit similar wrongs.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/BnFjSHQFVkA\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
      }
      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Moulin Rouge! (2001) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6 <p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A poet falls for a beautiful courtesan whom a jealous duke covets in this stylish musical, with music drawn from familiar 20th century sources.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"clssyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/2PpgPxjzbkA\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }
    }

    function cmdyRand(){
      var rand = parseInt((Math.random()) * 6);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">O Brother, Where Art Thou? (2000)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In the deep south during the 1930s, three escaped convicts search for hidden treasure while a relentless lawman pursues them.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/kID9iXY5Nuk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Clerks (1994) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A day in the lives of two convenience clerks named Dante and Randal as they annoy customers, discuss movies, and play hockey on the store roof.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Mlfn5n-E2WE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Bringing Up Baby (1938)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">1958. While trying to secure a $1 million donation for his museum, a befuddled paleontologist is pursued by a flighty and often irritating heiress and her pet leopard \"Baby.\" <\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/n9uUJQRzh4k\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Groundhog Day (1993)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1<h5 style=\"color: red\">(Top:#219)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A weatherman finds himself living the same day over and over again.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Sh7bAaJqvAg\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Little Miss Sunshine (2006)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A family determined to get their young daughter into the finals of a beauty pageant take a cross-country trip in their VW bus.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/wvwVkllXT80\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      
          
      }
      else{

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Royal Tenenbaums (2001)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">An estranged family of former child prodigies reunites when their father announces he is terminally ill.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"cmdyRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/8Eg6yIwP2vs\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
 
    }
  }

function drmRand(){

      var rand =parseInt((Math.random()) * 8);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Lobster (2015)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.2 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In a dystopian near future, single people, according to the laws of The City, are taken to The Hotel, where they are obliged to find a romantic partner in forty-five days or are transformed into beasts and sent off into The Woods.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/TR_NcqD-Gfs\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Victoria (2015) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A young Spanish woman who has newly moved to Berlin finds her flirtation with a local guy turn potentially deadly as their night out with his friends reveals a dangerous secret.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Kp8wcV3GjW0\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Wild Tales (2014)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1 <h5 style=\"color: red\">(Top:#195)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Six short stories that explore the extremities of human behavior involving people in distress.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/QUnXv6R2HI8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Trainspotting (1996)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.2 <h5 style=\"color: red\">(Top:#158)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Renton, deeply immersed in the Edinburgh drug scene, tries to clean up and get out, despite the allure of the drugs and influence of friends.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/R2GKVtWsXKY\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Mr. Nobody (2009)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A boy stands on a station platform as a train is about to leave. Should he go with his mother or stay with his father? Infinite possibilities arise from this decision. As long as he doesn't choose, anything is possible.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/mpi0qsp3v_w\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
          
      }
      else if(rand== 5){
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">What's Eating Gilbert Grape (1993)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">After his father's death, Gilbert has to care for his mentally disabled brother, Arnie, and his morbidly obese mother, which is suddenly challenged when love walks into his life.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/X6sLIP3908w\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
      }
      else if(rand== 6){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Being John Malkovich (1999)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A puppeteer discovers a portal that leads literally into the head of the movie star, John Malkovich.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/2UuRFr0GnHM\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }

      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Theory of Everything (2014)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A look at the relationship between the famous physicist Stephen Hawking and his wife.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"drmRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Salz7uGp72c\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");

      }
}
 function fntRand(){
      var rand = parseInt((Math.random()) * 5);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Ex Machina (2015)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A young programmer is selected to participate in a ground-breaking experiment in synthetic intelligence by evaluating the human qualities of a breath-taking humanoid A.I.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"fntRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/sNExF5WYMaA\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Donnie Darko (2001) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1<h5 style=\"color: red\">(Top:#201)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A troubled teenager is plagued by visions of a large bunny rabbit that manipulates him to commit a series of crimes, after narrowly escaping a bizarre accident.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"fntRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/ZZyBaFYFySk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Monty Python and the Holy Grail (1975)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3<h5 style=\"color: red\">(Top:#94)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">King Arthur and his knights embark on a low-budget search for the Grail, encountering many, very silly obstacles. <\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"fntRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/LG1PlkURjxE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Edward Scissorhands (1990)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A gentle man, with scissors for hands, is brought into a new community after living in isolation.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"fntRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/M94yyfWy-KI\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else{
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">A Clockwork Orange (1971)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\"> IMDB: 8.4<h5 style=\"color: red\">(Top:#79)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In future Britain, charismatic delinquent Alex DeLarge is jailed and volunteers for an experimental aversion therapy developed by the government in an effort to solve society's crime problem - but not all goes according to plan.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"fntRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/SPRzm8ibDQ8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      
          
      }
    }

    function frnRand(){
      var rand = parseInt((Math.random()) * 5);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Amélie (2001)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.4<h5 style=\"color: red\">(Top:#76)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Amelie is an innocent and naive girl in Paris with her own sense of justice. She decides to help those around her and, along the way, discovers love.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"frnRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/B-uxeZaM-VM\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Breathless (1960) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A small-time thief steals a car and impulsively murders a motorcycle policeman. Wanted by the authorities, he reunites with a hip American journalism student and attempts to persuade her to run away with him to Italy.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"frnRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/WCDEAu4R8hA\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Jules and Jim (1962)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Decades of a love triangle concerning two friends and an impulsive woman.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"frnRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/x5IAYIUKTaI\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Seventh Seal (1957)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.2<h5 style=\"color: red\">(Top:#138)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A man seeks answers about life, death, and the existence of God as he plays chess against the Grim Reaper during the Black Plague.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"frnRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/NtkFei4wRjE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else{
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Rashomon (1950)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.3<h5 style=\"color: red\">(Top:#99)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A heinous crime and its aftermath are recalled from differing points of view.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"frnRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/xCZ9TguVOIA\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      
          
      }
     
  }

  function hrtRand(){
      var rand = parseInt((Math.random()) * 5);
      if (rand== 0){
       
          document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Little Miss Sunshine (2006)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A family determined to get their young daughter into the finals of a beauty pageant take a cross-country trip in their VW bus.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrtRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/wvwVkllXT80\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\"> Me and Earl and the Dying Girl (2015) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">High schooler Greg, who spends most of his time making parodies of classic movies with his co-worker Earl, finds his outlook forever altered after befriending a classmate who has just been diagnosed with cancer.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrtRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/2qfmAllbYC8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Perks of Being a Wallflower (2012)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">An introvert freshman is taken under the wings of two seniors who welcome him to the real world.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrtRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/n5rh7O4IDc0\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Flipped (2010)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.7<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Two eighth-graders start to have feelings for each other despite being total opposites.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrtRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/RDlXdujRSD8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else{
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">10 Things I Hate About You (1999)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.2<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A new kid must find a guy to date the meanest girl in school, the older sister of the girl he has a crush on, who cannot date until her older sister does.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrrRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Guh0r1x8pF8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      
          
      }
     
  }

function hrrRand(){
      var rand = parseInt((Math.random()) * 4);
      if (rand== 0){
       
          document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Sleep Thight (2011)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.2<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">You wake day after day to the comfort and security of your home. But how safe is it really?<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrrRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Guh0r1x8pF8\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\"> The Cabin in the Woods (2012) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Five friends go for a break at a remote cabin in the woods, where they get more than they bargained for. Together, they must discover the truth behind the cabin in the woods.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrrRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/NsIilFNNmkY\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">It Follows (2014)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 6.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A young woman is followed by an unknown supernatural force after a sexual encounter.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrrRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/Ymoh5SIqgtw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Babadook (2014)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 6.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A single mother, plagued by the violent death of her husband, battles with her son's fear of a monster lurking in the house, but soon discovers a sinister presence all around her.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"hrrRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/k5WQZzDRVtw\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
    }
  }

function indRand(){
      var rand = parseInt((Math.random()) * 6);
      if (rand== 0){
       
        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Harold and Maude (1971)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.0<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">IYoung, rich, and obsessed with death, Harold finds himself changed forever when he meets lively septuagenarian Maude at a funeral.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/5mz3TkxJhPc\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
      }
      else if(rand== 1){

       document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Donnie Darko (2001) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 8.1<h5 style=\"color: red\">(Top:#201)<\/h5><\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A troubled teenager is plagued by visions of a large bunny rabbit that manipulates him to commit a series of crimes, after narrowly escaping a bizarre accident.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/ZZyBaFYFySk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
}
      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Mystery Train (1989)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Three stories are connected by a Memphis hotel and the spirit of Elvis Presley.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/nb0yBDSqTfs\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 3){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Submarine (2010)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.3<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">15-year-old Oliver Tate has two objectives: To lose his virginity before his next birthday, and to extinguish the flame between his mother and an ex-lover who has resurfaced in her life.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/P-WCCdkVDr4\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
         
        
      }
      else if(rand== 4){
         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Dogtooth (2009)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.3<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Three teenagers live isolated, without leaving their house, because their over-protective parents say they can only leave when their dogtooth falls out.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/QFtDzK64-pk\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      
          
      }
      else{

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">High Fidelity (2000)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6 <\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Rob, a record store owner and compulsive list maker, recounts his top five breakups, including the one in progress.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"indRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/yUTsDJ3dxEQ\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>"); 
 
    }
  }

  function mscRand(){
      var rand = parseInt((Math.random()) * 4);
      if (rand== 0){
       
          document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">Les Misérables (2012)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">In 19th-century France, Jean Valjean, who for decades has been hunted by the ruthless policeman Javert after breaking parole, agrees to care for a factory worker's daughter. The decision changes their lives forever.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"mscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/YmvHzCLP6ug\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else if(rand== 1){

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\"> My Fair Lady (1964) <br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.9<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A misogynistic and snobbish phonetics professor agrees to a wager that he can take a flower girl and make her presentable in high society.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"mscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/-mYPZ2C4sOE\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }

      else if(rand== 2){

         document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">The Umbrellas of Cherbourg (1964)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.8<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">A young girl separated from her lover by war faces a life altering decision.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"mscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/imCOi7pqKh0\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
      }
      else{

        document.body.innerHTML =("<div class=\"row\"><div class=\"col-sm-1\"><\/div><div class=\"col-sm-5\"><h1 style=\"font-family: 'Bevan', cursive;color:black;\">West Side Story (1961)<br><\/br><\/h1><h5 style=\"font-family: 'Lora', serif;color:gray;\">IMDB: 7.6<\/h5><p style=\"color: gray;font-family: 'Lora', serif;text-align:justify;\">Two youngsters from rival New York City gangs fall in love, but tensions between their respective friends build toward tragedy.<\/p><div><input type=\"button\"; onClick=\"history.go(0)\"; value=\"Go to beginning\" style=\"border: none;background-color:#fffaff;\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i><\/><input type=\"button\" value=\" Give me another\" style=\"border:none; background-color:#fffaff;\" onClick=\"mscRand();\" \/><i class=\"fa fa-lightbulb-o\" aria-hidden=\"true\"><\/i><\/div><\/div><div class=\"col-sm-6\"><div class=\"row\"><div class=\"col-sm-7\" style=\"margin-top:40px\";><div class=\"well\"><div class=\"embed-responsive embed-responsive-16by9\"><iframe class=\"embed-responsive-item\" src=\"https://www.youtube.com/embed/yA_aFprGzyc\"><\/iframe><\/div><\/div><\/div><div class=\"col-sm-5\"><\/div><\/div><\/div><\/div>");
    }
  }
  </script>
    
  <div class="container fluid">  

  <div style="position:relative">
    <h1 style="text-align:center; color:black; font-family: 'Bevan', cursive; margin-bottom:90px;font-size:450%;">Which Movie Should I Watch Tonight? </h1>
    <input id="Feedback" type="button" value="Feedback" style="border:none; background-color:#fffaff;text-align:right;position:absolute;top:150px;left:92%;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:300" onclick="div_show();" />  
    <input id="Admin Login" type="button" value="Admin Login" style="border:none; background-color:#fffaff;text-align:right;position:absolute;top:150px;left:86%;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:300" onclick="div_login();" />  
  </div>


    <div class="row" >
      <div class="col-sm-3">
        <div class="row">
          <div class="col-sm-6"></div>
          <div class="col-sm-6" style="text-align: center;">
            <button data-toggle="collapse" data-target="#action" style="border: none;background-color:#fffaff;">
              <i class="fa fa-hand-rock-o fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> ACTION </h4>
            </button>
              <div id="action" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Try to learn some of those moves.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="actionRand();" />
              </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="row">
          <div class="col-sm-6" style="text-align:center; margin-top:5px;">
            <button data-toggle="collapse" data-target="#chickflick" style="border: none;background-color:#fffaff;">
              <img src="chicken-64.png" /><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> CHICK FLICK </h4>
            </button>
             <div id="chickflick" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Admit it, you love them.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="chickRand();" />
              </div>
          </div> 

          <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#classic" style="border: none;background-color:#fffaff;">
              <i class="fa fa-thumb-tack fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> CLASSIC</h4>
            </button>
             <div id="classic" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Don't let your friends say "I can't believe you haven't watched it!"</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="clsscRand();" />
              </div>
          </div>  
        </div>
      </div>

      <div class="col-sm-3">
        <div class="row">
         <div class="col-sm-6" style="text-align:center; margin-top:3px;">
            <button data-toggle="collapse" data-target="#classy" style="border: none;background-color:#fffaff;">
              <i class="fa fa-black-tie fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> CLASSY</h4>
            </button>
             <div id="classy" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Don't forget to follow the story whilst busy looking at stuff.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="clssyRand();" />
              </div>
          </div>  

          <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#comedy" style="border: none;background-color:#fffaff;">
              <i class="fa fa-smile-o fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> COMEDY</h4>
            </button>
             <div id="comedy" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Who doesn't love to have a good laugh?</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="cmdyRand();" />
              </div>
          </div>
        </div>
      </div>
    
      <div class="col-sm-3" style="text-align:center;">
        <div class="row">
         <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#drama" style="border: none;background-color:#fffaff;">
              <i class="fa fa-frown-o fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;">DRAMA</h4>
            </button>
             <div id="drama" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">You are gonna end up with a runny nose.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="drmRand();" />
          </div> </div> 
          <div class="col-sm-6" style="text-align:center;">
          </div>
        </div>
      </div>
  </div>
  


  <div class="row" style="margin-top:30px;">
      <div class="col-sm-3">
        <div class="row">
          <div class="col-sm-6"></div>
          <div class="col-sm-6" style="text-align: center;">
            <button data-toggle="collapse" data-target="#sci-fnt" style="border: none;background-color:#fffaff;">
              <i class="fa fa-magic fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: centerstyle=marign-top:100px;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> FANTASY / SCI-FI </h4>
            </button>
              <div id="sci-fnt" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">See the flying cars in the year 2000. (in a galaxy not so far away)</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="fntRand();" />
              </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="row">
          <div class="col-sm-6" style="text-align:center; margin-top:5px;">
            <button data-toggle="collapse" data-target="#foreign" style="border: none;background-color:#fffaff;">
              <img src="eiffel-64.png" /><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> FOREIGN </h4>
            </button>
             <div id="foreign" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Go beyond borders.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="frnRand();" />
              </div>
          </div> 

          <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#heart" style="border: none;background-color:#fffaff;">
              <i class="fa fa-fire fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> HEART WARMING</h4>
            </button>
             <div id="heart" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">When you need a little boost.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="hrtRand();" />
              </div>
          </div>  
        </div>
      </div>

      <div class="col-sm-3">
        <div class="row">
         <div class="col-sm-6" style="text-align:center; margin-top:3px;">
            <button data-toggle="collapse" data-target="#horror" style="border: none;background-color:#fffaff;">
              <img src="ghost-64.png" /><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> HORROR</h4>
            </button>
             <div id="horror" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">You are not gonna be able to sleep in the dark for a while.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="hrrRand();" />
              </div>
          </div>  

          <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#indie" style="border: none;background-color:#fffaff;">
              <i class="fa fa-bicycle fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;"> INDIE / QUIRKY </h4>
            </button>
             <div id="indie" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">They are a bit cray cray. But who isn't?</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="indRand();" />
              </div>
          </div>
        </div>
      </div>
    
      <div class="col-sm-3" style="text-align:center;">
        <div class="row">
         <div class="col-sm-6" style="text-align:center;">
            <button data-toggle="collapse" data-target="#musical" style="border: none;background-color:#fffaff;">
              <i class="fa fa-music fa-5x" aria-hidden="true"></i><br/>
              <h4 style="text-align: center;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight: bold;">MUSICAL</h4>
            </button>
             <div id="musical" class="collapse">
                <h5 style="font-family: 'Lora', serif;font-weight:400;font-style:italic;clear:both;">Find your new shower tunes.</h5>
                <input id="Go" type="button" value="Go!" style="border:none; background-color:#fffaff;" onclick="mscRand();" />
          </div>
          </div>  
          <div class="col-sm-6" style="text-align:center;">
          </div>
        </div>
      </div>
  </div>
</div>


<div id="popupbck"></div>
    <div id="popup">
      <form id="form" action="display.php" method="post">

        <input id="Close" type="button" value="X" style="border:none; background-color:#fffaff;text-align:right;position:absolute;top:0px;left:92%;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:600" onclick="div_hide();" />  


        <span class="popuptext">Name:</span><br>

        <input type="text" name="name" id="name" placeholder="e.g. Donnie" autocomplete="off" autofocus><br>

        <span class="popuptext">E-mail<span class="red">*</span>:</span><br>

        <input type="text" name="mail" id="mail" placeholder="donnie@darko.com" autocomplete="off" pattern="\b[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\b" title="valid e-mail address" required><br><br>


        <select id="reason" name="reason" onclick ="get_element()">

          <option value="def" selected="true" disabled="disabled">What is the reason of your feedback?</option>
          <option >To request improvements</option>
          <option >Complaints about the website</option>
          <option>Thank you message</option>
          <option >Other</option>

        </select><br><br>

        <span class="popuptext">Comment<span class="red">*</span>:</span><br>

        <textarea cols="25" wrap="hard" name="comment" id="comment" placeholder="they made me do it." autocomplete="off" required></textarea><br><br>

        <input id="sub" type="button" onclick="check_stuff()" value="Submit"/>

        <input type="reset" value="Reset">
      </form>
    </div>

    <div id="loginbck"></div>
    <div id="login">
      <form id="loginform" action="login.php" method="post">
          <input id="Close" type="button" value="X" style="border:none; background-color:#fffaff;text-align:right;position:absolute;top:0px;left:92%;color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:600" onclick="login_hide();" />  

          <span class="popuptext" style="font-size:80%">Please enter the admin password to continue. (note: the default is 1234) </span><br><br>
          <span class="popuptext">Password<span class="red">*</span>:</span><br>

          <input type="text" name="password" id="password" placeholder="1234" autocomplete="off" required><br><br>
          
          <input id="loginbut" type="submit" value="Login"/>

          

      </form>
    </div>






<footer>
    <div class="container">
      <hr>
      <p style="color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:300"> <small>Website by Begum Cig</small></p>
      <p style="color:#6f6d6f;text-decoration: none;font-family: 'Open Sans', sans-serif;font-weight:"><small><a href="https://github.com/begumcig">Github</a></small></p>
      
        
    
    </div> 
  </footer>
        


  
  </body>
</html>