function hasState(selState,txtState,stateList,country,ischange) {

	var foundStates;
	var splitState = new Array();
	foundStates = getStates(country);
	if ( foundStates.length > 0 ) {
		if(document.getElementById) {
			selState.style.display = "block";
			txtState.style.display="none";
			stateList.options.length = 1;
			stateList.options[0] = new Option('Please select','');
			for(i=1;i<=foundStates.length;i++) {
				splitState = foundStates[i-1].split(':');
				if (foundStates[i-1]) {
					stateList.options[i] = new Option(splitState[1],splitState[0]);
				}
			}
		}
	}
	else {
			selState.style.display = "none";
			txtState.style.display="block";
            if(ischange == '1' ){     
                document.getElementById('statetext').value= ""; 
            }
	}
};

function setDropDownDefault(oSelect, sValue) {
 for (var ii=0; ii<oSelect.length; ii++) {
  if (0 < oSelect.options[ii].value.length && oSelect.options[ii].value == sValue) {
   oSelect.selectedIndex = ii;
   return;
  }
 }
};

function setState(sText,sValue) {
	sText.value = sValue;
};

function getStates(country) {
	var s2cMap = stateToCountryMap;
	if (country == '' || country == 'Empty') {
		s2cMap[country] = '';
	}
	else if ( s2cMap[country][s2cMap[country].length-1] == undefined) {
		s2cMap[country].splice(s2cMap[country].length-1,1);
	}
	return s2cMap[country];
};