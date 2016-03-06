{include_php file='classes/indexClass.php'}
{include_php file='libs/login-base/vendor/autoload.php'}
{config_load file='index.conf'}
<!DOCTYPE html>
<html>

  <head>
    <meta name="google-site-verification" content="9HLPgOcD4Pa4O5Sjut-nAdSjE7_NPriPb0L4w3ZMD_Y" />
    <title>Material Design for Bootstrap</title>

    <!-- Mobile support -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Charset -->
    <meta charset="UTF-8">
    <!-- Descripson -->
    <meta name="description" content="Gluon Web Admin for configuring Routers." />
  </head>
  <body>

    <div class="header-panel shadow-z-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-3">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav" style="position: absolute;bottom: 6px;padding-left: 20px;background-color:#dc0067;">
  {#collapseMenu#}
</button>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid main">
      <div class="row">
        <nav class="col-xs-3 menu collapse" id="collapseNav" style:"z-index:1000 !important;">
          <ul>
            <li class="active withripple" data-target="#welcome">{#welcomeHead#}</li>
            <li class="withripple" data-target="#tests">Tests</li>
            <li class="withripple" data-target="#tools">Tools</li>
            <li hidden class="withripple" data-target="#tools2">Tools</li>
            <li hidden class="withripple" data-target="#tools3">Tools</li>
            <li class="withripple" data-target="#addRouter">{#addRouter#}</li>
            <li hidden class="withripple" data-target="#addRouter2">{#addRouter#}</li>
            <li class="withripple" data-target="#login">{#login#}</li>
          </ul>
        </nav>
        <div class="pages col-xs-9">
          <div class="col-xs-10">
            <div class="well page active" id="welcome">
              <h1 class="header">{#welcomeHead#}</h1>

                <h3>{#abilitysHead#}</h3>
                <p>{#abilitys#}</p>
            </div>
            <div class="well page" id="tests">
              <h1 class="header">Tests</h1>
			        <p>
			          <b>Just testing</b> <br/>
			          {php}
					        main::openConnection("ls -la", "root", "xxxx", "tarp1", "FFNORD");
				        {/php}
			        </p>
            </div>
            {include file="./tools/generateV6.tpl"}
            <div class="well page" id="login">
                <h1 class="header">{#login#}</h1>
                {php}
                    // start login application
                    new Application();
                {/php}
            </div>
            {include file="./managing/addRouter/selectCommunity.tpl"}
            {include file="./managing/addRouter/addRouter.tpl"}
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

  </body>
</html>
<!-- jQuery -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Twitter Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- Material Design for Bootstrap -->
<script type="text/javascript" src="js/material.min.js"></script>
<script type="text/javascript" src="js/ripples.min.js"></script>
<script async type="text/javascript">
  $.material.init();
</script>

<!-- Dropdown.js -->
<script type="text/javascript" src="js/jquery.dropdown.js"></script>
{literal}
<script async type="text/javascript">
  $("#dropdown-menu select").dropdown();
</script>
{/literal}

<!-- Twitter Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Material Design for Bootstrap -->
<link href="css/roboto.min.css" rel="stylesheet">
<link href="css/material-fullpalette.min.css" rel="stylesheet">
<link href="css/ripples.min.css" rel="stylesheet">

<!-- Dropdown.js -->
<link href="css/jquery.dropdown.css" rel="stylesheet">

<!-- ex inline css -->
<link href="css/index.min.css" rel="stylesheet">


<!-- Open source code -->
{literal}
<script async type="text/javascript">
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
{/literal}
{literal}
<script async type="text/javascript">
    $(document).ready(function() {
        var opt = $("#RouterName option").sort(function (a,b) { return a.value.toUpperCase().localeCompare(b.value.toUpperCase()) });
        $("#RouterName").append(opt);
    });
</script>
{/literal}
{literal}
<script async type="text/javascript">
    $(document).ready(function() {
        var opt = $("#CommunityName option").sort(function (a,b) { return a.value.toUpperCase().localeCompare(b.value.toUpperCase()) });
        $("#CommunityName").append(opt);
    });
</script>
{/literal}
