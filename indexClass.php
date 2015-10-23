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
	function getNodes($communityURL, $communityID){
		//$nodes = file_get_contents($communityURL);
		$nodes = file_get_contents("http://map.ffki.de/nodes.json");
		//$nodes_file = fopen("nodes/nodes"+$communityID+".json", "w+") or die("Unable to open file!");
		$nodes_file = fopen("nodes/nodesFFKI.json", "w+") or die("Unable to open file!");	
		fwrite($nodes_file, $nodes);
		fclose($nodes_file);

	}

	############
	# parseMAC #
	############
	function parseMAC($nodeName, $communityID, $v6prefix){
		main::getNodes(NULL, NULL);

		//$nodes_string = file_get_contents("nodes/nodes"+$communityID+".json");
		$nodes_string = file_get_contents("nodes/nodesFFKI.json");
		$json_nodes = json_decode($string, true);
		$nodeMAC = $json_nodes['John'][status];

		
		return "127.0.0.1";

	}

	##########
	# runSSH #
	##########
	function openConnection($command, $user, $password){
		$ip = main::parseNodesFFKI();
		
		if(helper::pingPortOnServer($ip,"22") == 1){		
			$localhost = new Ssh\Configuration($ip);
			$authentication = new Ssh\Authentication\Password($user, $password);		
			$session = new Ssh\Session($ssh, $authentication);
			$exec = $session->getExec();
			echo $exec->run($command);
		}else{echo "ERROR!!! SSH IS NOT RUNNING ON ROUTER!!!";}
	}

}

class helper{
	####################
	####################
	# Helper-functions #
	####################	
	####################

	########################
	# Check for SSH-Server #
	########################
	function pingPortOnServer($ip,$port){
		$waitTimeoutInSeconds = 1; 
		if($fp = fsockopen($ip,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
		   return 1;
		} else {
		   return 0;
		} 
		fclose($fp);
		

	}


}
?>
