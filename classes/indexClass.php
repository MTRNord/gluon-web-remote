<?php
include "libs/php-ssh/vendor/autoload.php";
class main {

	##################
	##################
	# main-functions #
	##################	
	##################

	############
	# getNodes #
	############
	public static function getNodes($communityID){
		if(!empty($communityID)){
			$communities_str = file_get_contents("configs/communities.json");
			$json_communities = json_decode($communities_str);
			$communityURL = $json_communities->{$communityID}->{"nodesURL"};

			$nodes = file_get_contents($communityURL);
			$nodes_file = fopen("nodes/nodes".$communityID.".json", "w+") or die("Unable to open file!");
			fwrite($nodes_file, $nodes);
			fclose($nodes_file);
		}else {
		    echo "<b>ERROR!!!!!! | Missing $communityID </b>";
		}
	}

	############
	# parseMAC #
	############
	public static function parseMAC($nodeName, $communityID){
		main::getNodes($communityID);
        $communities_str = file_get_contents("configs/communities.json");
		$json_communities = json_decode($communities_str);
        if ($json_communities->$communityID->supported == 1) {
            $nodes_str = file_get_contents("nodes/nodes".$communityID.".json");
		    $json_nodes = json_decode($nodes_str);
		    foreach($json_nodes->nodes as $nodes){
    		    if($nodes->name == $nodeName){
        		    $nodeMAC = $nodes->id;
    		    }
		    }
		    return $nodeMAC;
        }else{
            echo "<b> This Community is not yet supported!!";
        }
		
	}

	##############
	# get prefix #
	##############
	public static function getV6Prefix($communityID){
		$communities_str = file_get_contents("configs/communities.json");
		$json_communities = json_decode($communities_str);
		$prefix = $json_communities->{$communityID}->{"v6"};
		return $prefix;
	}
	
	#################
	# generate IPv6 #
	#################
	public static function genV6($nodeName, $communityID){
		$mac = main::parseMAC($nodeName, $communityID);
		$prefix = main::getV6Prefix($communityID);
		
		$mac_array = explode(":", $mac);
		if(!empty($mac)){
			if(!empty($prefix)){
				$host_id = ":".$mac_array[0].$mac_array[1].":".$mac_array[2]."ff:fe".$mac_array[3].":".$mac_array[4].$mac_array[5];
				$ipv6 = $prefix."0".$host_id;
			}
		}
        if(!empty($ipv6)){
            return $ipv6;
		}
		
	}

	##########
	# runSSH #
	##########
	public static function openConnection($command, $user, $password, $nodeName, $communityID){
		$ip = main::genV6($nodeName, $communityID);
		
		if(!empty($ip)){
		    if(helper::pingPortOnServer("[".$ip."]","22") == 1){		
			    $localhost = new Ssh\Configuration("[".$ip."]");
			    $authentication = new Ssh\Authentication\Password($user, $password);		
			    $session = new Ssh\Session($ssh, $authentication);
			    $exec = $session->getExec();
			    echo $exec->run($command);
		    }else{echo "ERROR!!! SSH IS NOT RUNNING ON ROUTER!!!";}
		}
	}

}
include "classes/helper.php";
?>
