<?php
$xml ='
<priip>
	<data>
		<product>
			<priipCloudProductTemplate>otc</priipCloudProductTemplate>
			<priipCloudProductType>fxSwap</priipCloudProductType>
			<productIdentifier>RBI_fxSwap_EURUSD_long_1Y2D_EUR</productIdentifier>
		</product>
		<document>
			<type>final</type>
		</document>
		<properties>
			<includeEarlyRedemptionInExtraordinaryEventsAlert>true</includeEarlyRedemptionInExtraordinaryEventsAlert>
		</properties>
		<tradeDate>2018-01-18</tradeDate>
		<effectiveDate>2018-01-20</effectiveDate>
		<fxSwap>
			<holder>client</holder>
			<currencyPair>EURUSD</currencyPair>
			<notionalAmount>1000000</notionalAmount>
			<notionalAmountCurrency>EUR</notionalAmountCurrency>
			<terminationDate>2019-01-20</terminationDate>
			<forwardRate>
				<value>1.25620</value>
			</forwardRate>
			<spotRate>
				<value>1.2207</value>
			</spotRate>
		</fxSwap>
		<costs>
			<entryCosts>0.0025</entryCosts>
		</costs>
		<riskMeasures version="v1.0">
			<sriRelatedValues>
				<valueAtRisk>0</valueAtRisk>
				<valueAtRiskEquivalentVolatility>0</valueAtRiskEquivalentVolatility>
				<mrm>7</mrm>
				<crm>2</crm>
				<sri>7</sri>
			</sriRelatedValues>
			<performanceScenariosRelatedValues>
				<positiveScenarioPayoutRHP>11139.633068665</positiveScenarioPayoutRHP>
				<positiveScenarioActualReturnRHP>0.1139633069</positiveScenarioActualReturnRHP>
				<positiveScenarioAverageReturnPerYearRHP>0.114276</positiveScenarioAverageReturnPerYearRHP>
				<positiveScenarioPayoutIHP1>null</positiveScenarioPayoutIHP1>
				<positiveScenarioActualReturnIHP1>null</positiveScenarioActualReturnIHP1>
				<positiveScenarioAverageReturnPerYearIHP1>null</positiveScenarioAverageReturnPerYearIHP1>
				<positiveScenarioPayoutIHP2>null</positiveScenarioPayoutIHP2>
				<positiveScenarioActualReturnIHP2>null</positiveScenarioActualReturnIHP2>
				<positiveScenarioAverageReturnPerYearIHP2>null</positiveScenarioAverageReturnPerYearIHP2>
				<moderateScenarioPayoutRHP>9984.9790016645</moderateScenarioPayoutRHP>
				<moderateScenarioActualReturnRHP>-0.0015020998</moderateScenarioActualReturnRHP>
				<moderateScenarioAverageReturnPerYearRHP>-0.00150623</moderateScenarioAverageReturnPerYearRHP>
				<moderateScenarioPayoutIHP1>null</moderateScenarioPayoutIHP1>
				<moderateScenarioActualReturnIHP1>null</moderateScenarioActualReturnIHP1>
				<moderateScenarioAverageReturnPerYearIHP1>null</moderateScenarioAverageReturnPerYearIHP1>
				<moderateScenarioPayoutIHP2>null</moderateScenarioPayoutIHP2>
				<moderateScenarioActualReturnIHP2>null</moderateScenarioActualReturnIHP2>
				<moderateScenarioAverageReturnPerYearIHP2>null</moderateScenarioAverageReturnPerYearIHP2>
				<negativeScenarioPayoutRHP>8955.6992819847</negativeScenarioPayoutRHP>
				<negativeScenarioActualReturnRHP>-0.1044300718</negativeScenarioActualReturnRHP>
				<negativeScenarioAverageReturnPerYearRHP>-0.104717</negativeScenarioAverageReturnPerYearRHP>
				<negativeScenarioPayoutIHP1>null</negativeScenarioPayoutIHP1>
				<negativeScenarioActualReturnIHP1>null</negativeScenarioActualReturnIHP1>
				<negativeScenarioAverageReturnPerYearIHP1>null</negativeScenarioAverageReturnPerYearIHP1>
				<negativeScenarioPayoutIHP2>null</negativeScenarioPayoutIHP2>
				<negativeScenarioActualReturnIHP2>null</negativeScenarioActualReturnIHP2>
				<negativeScenarioAverageReturnPerYearIHP2>null</negativeScenarioAverageReturnPerYearIHP2>
				<stressScenarioPayoutRHP>6841.9699464563</stressScenarioPayoutRHP>
				<stressScenarioActualReturnRHP>-0.3158030054</stressScenarioActualReturnRHP>
				<stressScenarioAverageReturnPerYearRHP>-0.316671</stressScenarioAverageReturnPerYearRHP>
				<stressScenarioPayoutIHP1>null</stressScenarioPayoutIHP1>
				<stressScenarioActualReturnIHP1>null</stressScenarioActualReturnIHP1>
				<stressScenarioAverageReturnPerYearIHP1>null</stressScenarioAverageReturnPerYearIHP1>
				<stressScenarioPayoutIHP2>null</stressScenarioPayoutIHP2>
				<stressScenarioActualReturnIHP2>null</stressScenarioActualReturnIHP2>
				<stressScenarioAverageReturnPerYearIHP2>null</stressScenarioAverageReturnPerYearIHP2>
			</performanceScenariosRelatedValues>
		</riskMeasures>
		<costOutputs>
			<costsOverTime>
				<totalCostsRHP>
					<value>24.4219183409</value>
				</totalCostsRHP>
				<totalCostsIHP1>
					<value>null</value>
				</totalCostsIHP1>
				<totalCostsIHP2>
					<value>null</value>
				</totalCostsIHP2>
				<reductionInActualYieldRHP>
					<value>0.0024421918</value>
				</reductionInActualYieldRHP>
				<reductionInActualYieldIHP1>
					<value>null</value>
				</reductionInActualYieldIHP1>
				<reductionInActualYieldIHP2>
					<value>null</value>
				</reductionInActualYieldIHP2>
				<reductionInYieldRHP>
					<value>0.0024489008</value>
				</reductionInYieldRHP>
				<reductionInYieldIHP1>
					<value>null</value>
				</reductionInYieldIHP1>
				<reductionInYieldIHP2>
					<value>null</value>
				</reductionInYieldIHP2>
			</costsOverTime>
			<compositionOfCosts>
				<actualEntryCosts>
					<value>0.0024421918</value>
				</actualEntryCosts>
				<actualOtherRecurringCostsPA>
					<value>null</value>
				</actualOtherRecurringCostsPA>
				<actualExitCosts>
					<value>0</value>
				</actualExitCosts>
				<entryCosts>
					<value>0.0024489008</value>
				</entryCosts>
				<otherRecurringCostsPA>
					<value>null</value>
				</otherRecurringCostsPA>
				<exitCosts>
					<value>0</value>
				</exitCosts>
			</compositionOfCosts>
		</costOutputs>
	</data>
</priip>';

// splits XML into <x>,</x> and <x>value
function xmlstr_to_arr($xml_str){
    $arr = preg_split('@(?=<)@', $xml_str,-1);
    $arr = array_map('trim',$arr);
    $arr = array_filter($arr,'strlen');
    return $arr;
}


echo "Enter the XML file you would like to process to JSON in full. 
Make sure the file you enter is in the same directory as the program.
If you would like to use the pre-existing XML file in this program, press enter. \n";

//Tests to see if the file entered is in the directory  ff = from file
start:
$file = readline();
if($file == ''){
}elseif(file_exists($file)){
    $xmlff = file_get_contents($file);
    $xml_arr =  xmlstr_to_arr($xmlff);
    //gets rid of the XML header
    $xml = implode(array_slice($xml_arr, 1, count($xml_arr)));
}else{ 
    echo "Please enter the file in the correct format: file.xml \n";
    goto start;
}


//Tests to see if there is a closing node for each one that is open <x> -> </x>
//Takes the xml split into an array 
function keypair_test($xml_arr){
    $end_nodes = [];
    $start_nodes = [];

    for($i = 0; $i <= count($xml_arr); $i++){
        //Allows nodes with a key value pair inside to be counted <x v=h>
        $key = explode(' ',$xml_arr[$i])[0];
        if($key[-1] != '>'){
            $key = $key.'>';    
        }else{
            $key = $key;   
        }
        //Makes sure there are no empty spaces in the array 
        if(str_replace(['<','/','>'],'', $key) == '' 
            || str_replace(['<','/','>'],'', $key) == ' '){
            continue;
        }
        //Adds to each node array dependent on if they are a start or end
        elseif(strpos( $key,'/')){    
            preg_match('#\<(.*?)\>#', $key,$ekey);
            array_push($end_nodes, str_replace('/', '', $ekey[1]));    
        }else{
            preg_match('#\<(.*?)\>#',$key,$skey);
            array_push($start_nodes,$skey[1]);
        }
    }

    //Tests for any unclosed nodes and duplicates which array diff does not 
    sort($start_nodes);
    sort($end_nodes);
    for($i = 0; $i <= max(count($end_nodes),count($start_nodes)); $i++){
        if($end_nodes[$i] == $start_nodes[$i]){
            continue;
        }else{
            echo 'Not all nodes are paired.'."\n";
            //Returns 1 show there are unpaired nodes
            return 1;
        }   
    }
}


//Takes xml string
function bracket_check($xml){
$bracket_num = 0;
    for($i = 0; $i <= strlen($xml); $i++){
        if($bracket_num > 1 || $bracket_num < -1 ){
            echo 'Incorrect order of < >.'."\n";
            //Return 1 if Unequal
            return 1;
        }elseif($xml[$i] == '<'){
            $bracket_num = $bracket_num + 1;
        }elseif($xml[$i] == '>'){
            $bracket_num = $bracket_num - 1;
        }else{
            continue;
        }
    }    
    //Checks to see if the final number of brackets to see all values are enclosed 
    if($bracket_num != 0 ){
        echo 'Unequal number of brackets surronding keys.'."\n";
        //Return 1 if Unequal
        return 1;
    }else{ 
    }
}


//Checks if the root element encloses the rest of the xml file takes xml array 
function root_element_check($xml_arr){
    if($xml_arr[1] == str_replace('/','', $xml_arr[count($xml_arr)])){
    }else{
        echo 'No root element.'."\n";
        //Return 1 if No unique root element
        return 1;
    }
}


function xmltojson($xml){
    $json_arr = ['{'];
   
    $xml_arr = xmlstr_to_arr($xml);
    
    //Checks to see if certain xml condition are met 
    if(bracket_check($xml) == 1){
    exit();
    }elseif(root_element_check($xml_arr) == 1){
    exit();
    }elseif(keypair_test($xml_arr) == 1){
    exit();
    }else{
    }
    
    echo "Type 'yes' if you would like to beautify the json output or press enter if not \n";
    $beautify = readline();
    $tab_spaces = 0;
    
    if($beautify == 'yes'){
        $tab_mult = 1;
    }else{
        $tab_mult = 0; 
    }    
    //Iterate over all values in array 
    for($i = 0; $i <= count($xml_arr); $i++){
        //Used to add tab spaces to final json to make it easier to read on output
        if(strpos($xml_arr[$i],'/')){
            $tab_spaces = $tab_spaces - 1;
        }else{
            $tab_spaces = $tab_spaces + 1;
        }
        $tabs = str_repeat("   ",$tab_spaces*$tab_mult);

        //Skips values in array that are empty spaces 
        if($xml_arr[$i] == '' || $xml_arr[$i] == ' '){
            continue;
        }
        //For key value pairs inside an XML node 
        elseif(strpos($xml_arr[$i],'=')){
        //Checks to see if there is a key value pair inside the node <x y=w>
            $kvnode_str = str_replace(['<','>'], '', $xml_arr[$i]);
            $kvnode_arr =  explode(' ',$kvnode_str);
            $kvnode1 = $kvnode_arr[0].'"'.':'.'{';
            $kvnode2 = '"'.str_replace('=', '":', $kvnode_arr[count($kvnode_arr)-1 ]).',';       
            array_push($json_arr,$tabs.'"'.$kvnode1.$kvnode2."\n");
        }
        //Checks to see if it is the end of a node     </x>
        elseif(strpos($xml_arr[$i], '/')){
            //Check to see if the next value is the end of a node 
            if (strpos($xml_arr[$i+1], '/')){
                array_push($json_arr,"\n".$tabs.'}');
            }else{
                array_push($json_arr,','."\n");
            }
        //Checks to see if there is a value attached to the node <x>value
        }elseif($xml_arr[$i][-1] != '>'){
            //turning xml key value pair into json
            $kv = str_replace('>', '":"', $xml_arr[$i]);
            $kv = str_replace('<', '"', $kv).'"';
            array_push($json_arr,$tabs.$kv);
        //Checks to see if it is the start of a node 
        }else{
            //Adds start of node to the json
            $node = str_replace('>', '"', $xml_arr[$i]);
            $node = str_replace('<', '"', $node).':'.'{'."\n";
            
            array_push($json_arr,$tabs.$node);
        }
        
    }
    //Changes the final value from , to }
    $json_arr[count($json_arr)-1] = "\n".'}';
    $json = implode($json_arr);
    echo $json;
    return $json;
}


xmltojson($xml);
