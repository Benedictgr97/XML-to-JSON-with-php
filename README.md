# XML-to-JSON-with-php

A project that takes an XML file and converts it to a JSON layout. The XML file used to deduce this code is also included in this repository. There are also several functions for XML validation that are applied when the code is run. My main focus was on the use of arrays throughout the program.
Functions:
**xmlstr_to_arr**:  Converts the string XML into an array with sections <x>,</x> <x>value, <x key=value> for use by later functions.
 
**If statement after echo**: Used to check if the user had entered a correct file name within the directory.

**Keypair_test**:Checks to see if all start nodes,/<x/>, are paired to end nodes,</x>

**Bracket_check**: Check to see if each node is enclosed by start and end brackets in the correct order.

**Root_element_check**: checks to see if there is a root element that encompasses the whole XML structure.

**Xmltojson**: Returns the XML string converted to a JSON string with an option to add spaces to make the final code more reader friendly. This iterates through the XML array and creates the JSON object dependent on conditions. For each iteration:
-The number of spaces indented changes dependent on the open/close node /
-First if statement tests if the array value is empty so can be skipped
-First elseif : <x key=value>   =>   "x":{"key":"value",
-Second elseif : </x>    =>   },
-Third elseif : <x>value =>  "key":"value",
Else :  <x> => "x":{

After the iterations the final “}” is added and Json echoed and returned as a string
