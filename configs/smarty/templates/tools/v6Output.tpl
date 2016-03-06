<div class="well page" id="tools3">
    <h1 class="header">{#addRouter#}</h1>
    {php}
      main::genV6($nodeName, $communityID);
      if(!empty($_GET["community"]) || !empty($_GET["node"])){
        $community = $_GET["community"];
        $node = $_GET["node"];
      }else{
        $community = "";
      }
      if(!empty($_GET["community"]) || !empty($_GET["node"])){
        echo (main::genV6($node, $community));
      }else{
        echo "<p>{#shouldNotBeHere#}</p>";
      }
      {/php}
</div>
