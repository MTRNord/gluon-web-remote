<div class="well page" id="tools2">
    <h1 class="header">{#addRouter#}</h1>
    <form class="form-horizontal" action="#tools3">
        <fieldset>
            <div class="form-group">
                <label for="RouterName" class="col-lg-2 control-label">{#routerName#}</label>
                <div class="col-lg-10">
                    <select class="form-control" id="RouterName" name="node">
                        {php}
                            if(!empty($_GET["community"])){
                                $community = $_GET["community"];
                            }else{
                                $community = "";
                            }
                            if(!empty($community)){
                                helper::getNodeNames($community);
                            }else{
                                echo "<p>{#shouldNotBeHere#}</p>";
                            }
                        {/php}
                    </select>
                </div>
            </div>
            {php}
              if(!empty($_GET["community"])){
                $community = $_GET["community"];
              }else{
                $community = "";
              }
              if(!empty($community)){
                echo "<input type=\"hidden\" value=\"" . $community . "\" name=\"community\" />"
              }else{}
            {/php}
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="mdi-navigation-check"></i> {#nextPage#}</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
