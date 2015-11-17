<?php
class helper {
	####################
	####################
	# Helper-functions #
	####################
	####################

	########################
	# Check for SSH-Server #
	########################
	public static function pingPortOnServer($ip,$port){
		$waitTimeoutInSeconds = 1; 
		if($fp = fsockopen($ip,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
		   return 1;
		} else {
		   return 0;
		} 
		fclose($fp);
	}
    
    ################
	# getNodeNames #
	################
	public static function getNodeNames($communityID){
	    if (class_exists('main')) {
            main::getNodes($communityID);
        }else{
            echo "ERROR!!!!!!";
        }
        $communities_str = file_get_contents("configs/communities.json");
        $json_communities = json_decode($communities_str);
        if ($json_communities->communities->$communityID->supported == 1) {
            $nodes_str = file_get_contents("nodes/nodes".$communityID.".json");
		    $json_nodes = json_decode($nodes_str);
		        foreach($json_nodes->nodes as $nodes){
		            if(!empty($nodes->name)){
		                if($nodes->flags->online == "true"){
                            echo "<option value=\"".$nodes->name."\">".$nodes->name."</option>\n";
		                }else{};
		            }else{
		                if($nodes->flags->online == "true"){
                            echo "<option value=\"".$nodes->nodeinfo->hostname."\">".$nodes->nodeinfo->hostname."</option>\n";
		                }else{};
		            }
		        }
		    return 1;
        }else{
            echo "<b> This Community is not yet supported!!";
        }
		
	}
	
    #####################
	# getCommunityNames #
	#####################
	public static function getCommunityNames(){
        $communities_str = file_get_contents("configs/communities.json");
        $json_communities = json_decode($communities_str);
        foreach($json_communities->communities as $community){
            echo "<option value=\"".$community->ccode."\">".$community->name."</option>\n";
	    }
	    return 1;
	}


}

#######################
# Data Storage Access #
#######################
class storage extends SQLite3{
    function __construct(){
        $this->open('configs/storage.db');
    }
}

/*$db = new MyDB();
if(!$db){
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully\n";
}*/
?>