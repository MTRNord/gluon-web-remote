<?php
include "indexClass.php";
?>
<!DOCTYPE html>
<html>

  <head>
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Twitter Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design for Bootstrap -->
    <link href="css/roboto.min.css" rel="stylesheet">
    <link href="css/material-fullpalette.min.css" rel="stylesheet">
    <link href="css/ripples.min.css" rel="stylesheet">

    <!-- Dropdown.js -->
    <link href="css/jquery.dropdown.css" rel="stylesheet">

	<!-- ex inline css -->
	<link href="css/index.css" rel="stylesheet">


  </head>
  <body>

    <!--<a href="https://github.com/MTRNord/gluon-web-remote" style="position: absolute; top: 0; left: 0; border: 0; z-index: 10;"><img src="images/forkme_left_darkblue_121621.png" alt="Fork me on GitHub" data-canonical-src="images/forkme_right_darkblue_121621.png"></a>-->

    <div class="header-panel shadow-z-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav" style="position: absolute;bottom: 6px;padding-left: 20px;background-color:#dc0067;">
  Collapse Menu
</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row">
        <nav class="col-xs-3 menu collapse" id="collapseNav" style:"z-index:1000 !important;">
          <ul>
            <li class="active withripple" data-target="#welcome">Welcome to the Gluon Admin</li>
            <li class="withripple" data-target="#tests">Tests</li>
          </ul>
        </nav>
        <div class="pages col-xs-9">
          <div class="col-xs-10">
            <div class="well page active" id="welcome">
              <h1 class="header">Welcome to the Gluon Admin</h1>
              <p>
			  </p>
            </div>
            <div class="well page" id="tests">
              <h1 class="header">Tests</h1>
			  <p>
			    Just testing <br/>
			    <?php
					main::openConnection("ls -la", "root", "xxxx", "Angeln0009", "FFFL");
				?>
			  </p>
            </div>
            <div class="well page" id="toggle-button">
                <h1 class="header">Toggle Button</h1>
            </div>
          </div>
          <div class="col-xs-2">
            <button class="btn btn-fab btn-material-grey-200" id="opensource"><i class="mdi-action-open-in-new"></i></button></div>
        </div>
      </div>
    </div>

    <div id="source-modal" class="modal fade" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Source Code</h4>
          </div>
          <div class="modal-body">
            <pre></pre>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery-1.10.2.min.js"></script>

    <!-- Open source code -->
    <script>
      window.page = window.location.hash || "#welcome";

      $(document).ready(function() {
        if (window.page != "#welcome") {
          $(".menu").find("li[data-target=" + window.page + "]").trigger("click");
        }
      });

      $(window).on("resize", function() {
        $("html, body").height($(window).height());
        $(".main, .menu").height($(window).height() - $(".header-panel").outerHeight());
        $(".pages").height($(window).height());
      }).trigger("resize");

      $(".menu li").click(function() {
        // Menu
        if (!$(this).data("target")) return;
        if ($(this).is(".active")) return;
        $(".menu li").not($(this)).removeClass("active");
        $(".page").not(page).removeClass("active").hide();
        window.page = $(this).data("target");
        var page = $(window.page);
        window.location.hash = window.page;
        $(this).addClass("active");


        page.show();

        var totop = setInterval(function() {
          $(".pages").animate({scrollTop:0}, 0);
        }, 1);

        setTimeout(function() {
          page.addClass("active");
          setTimeout(function() {
            clearInterval(totop);
          }, 1000);
        }, 100);
      });

      function cleanSource(html) {
        var lines = html.split(/\n/);

        lines.shift();
        lines.splice(-1, 1);

        var indentSize = lines[0].length - lines[0].trim().length,
            re = new RegExp(" {" + indentSize + "}");

        lines = lines.map(function(line){
          if (line.match(re)) {
            line = line.substring(indentSize);
          }

          return line;
        });

        lines = lines.join("\n");

        return lines;
      }

      $("#opensource").click(function() {
        $.get(window.location.href, function(data){
          var html = $(data).find(window.page).html();
          html = cleanSource(html);
          $("#source-modal pre").text(html);
          $("#source-modal").modal();
        });
      });
    </script>

    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Material Design for Bootstrap -->
    <script src="js/material.min.js"></script>
    <script src="js/ripples.min.js"></script>
    <script>
      $.material.init();
    </script>


    <!-- Sliders -->
    <script src="js/jquery.nouislider.min.js"></script>
    <script>
      $(function() {
        $.material.init();
        $(".shor").noUiSlider({
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });

        $(".svert").noUiSlider({
          orientation: "vertical",
          start: 40,
          connect: "lower",
          range: {
            min: 0,
            max: 100
          }
        });
      });
    </script>

    <!-- Dropdown.js -->
    <script src="js/jquery.dropdown.js"></script>
    <script>
      $("#dropdown-menu select").dropdown();
    </script>

  </body>
</html>
