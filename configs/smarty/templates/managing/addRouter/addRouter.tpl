<div class="well page" id="addRouter2">
    <h1 class="header">{#addRouter#}</h1>
    <form class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="RouterName" class="col-lg-2 control-label">{#routerName#}</label>
                <div class="col-lg-10">
                    <select class="form-control" id="RouterName">
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
        </fieldset>
    </form>
</div>
