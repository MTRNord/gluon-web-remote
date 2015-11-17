<form class="form-horizontal">
    <fieldset>
        <!--<div class="form-group">
            <label for="inputRouterName" class="col-lg-2 control-label">{#routername#}</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="inputRouterName" placeholder="{#routername#}">
            </div>
        </div>-->
        <div class="form-group">
            <label for="RouterName" class="col-lg-2 control-label">{#routername#}</label>
            <div class="col-lg-10">
                <select class="form-control" id="RouterName">
                    {php}
                        helper::getNodeNames("FFKI");
                    {/php}
                </select>
            </div>
        </div>
    </fieldset>
</form>