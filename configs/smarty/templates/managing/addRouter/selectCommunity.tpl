<div class="well page" id="addRouter">
    <h1 class="header">{#addRouter#}</h1>
    <form class="form-horizontal" action="#addRouter2">
        <fieldset>
            <div class="form-group">
                <label for="CommunityName" class="col-lg-2 control-label">{#communityName#}</label>
                <div class="col-lg-10">
                    <select class="form-control" id="CommunityName" name="community">
                        {php}
                            helper::getCommunityNames();
                        {/php}
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary btn-flat"><i class="mdi-navigation-check"></i> {#nextPage#}</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>