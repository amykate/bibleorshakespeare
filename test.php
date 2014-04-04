<!DOCTYPE html>
<html>
  <head>

  <?php
    // get the sourses first off
    require_once("data.php");
    $source = getSourses();

    print_r($source);
    print "<br/>number 1: " . $source[0]["source"];
    print "<br/>number 2: " . $source[1]["source"];

    //@TODO I'm assuming we only have 2 sources atm


    ?>

<title>Example of Twitter Bootstrap 3 Justified Button Groups</title>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>
    <script src="js/jquery-1.10.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
     //google analytics
    </script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $.ajax({                                      
          url: 'getQuote.php',                  //the script to call to get data          
          data: "",                        //you can insert url argumnets here to pass to api.php
          //for example "id=5&parent=6"
          dataType: 'json',                //data format      
          success: function(data)          //on recieve of reply
          {
            console.log("hello");
            console.log(data);
            var id = data[0];              //get id
            var quoteText = data[1];           //get name
            var sourceId = data[2];           //get name
            var moreInfo = data[3];           //get name
            //--------------------------------------------------------------------
            // 3) Update html content
            //--------------------------------------------------------------------
            $('#quoteBox').html("<h3>"+quoteText + "<h3>"); //Set output element html
            //recommend reading up on jquery selectors they are awesome 
            // http://api.jquery.com/category/selectors/
          } 
        });


        // Clicking on a source...

        $("#source0").click(function(){
            sourceClicked(0);
        });
        $("#source1").click(function(){
            sourceClicked(1);
        });

     });

    function sourceClicked(whichOne) {
        alert("You clicked " + whichOne);
    }

    </script>
<div class="container">
      <div class="page-header">
            <h1><?php print $source[0]["source"] ?>  or <?php print $source[1]["source"] ?>?</h1>
        <p class="lead">Who said it?</p>
      </div>
      <script id="source" language="javascript" type="text/javascript">
        //-----------------------------------------------------------------------
        // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
        //-----------------------------------------------------------------------
        
      </script>


<div class="row">
      <div class="span12" id="quote"><p class="quote" id="quoteBox"></p><br/><br/></div>
    </div>
    <div class="row">
    </div>

<div class="bs-example">
    <div class="btn-group btn-group-justified">
        <a href="#" class="btn btn-primary"><?php print $source[0]["source"] ?></a>
        <a href="#" class="btn btn-primary"><?php print $source[1]["source"] ?></a>
    </div>
</div>

</div>
</body>
</html>                                   