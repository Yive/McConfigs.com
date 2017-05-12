function addRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
		var row = table.insertRow(rowCount);
		var colCount = table.rows[0].cells.length;
		for(var i=0; i<colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}
}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[3];
		if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) {
				alert("Cannot remove all fields.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}

function itemInsert(trID){
   var row = document.getElementById(trID).getElementsByTagName("tr")[0];
   var x = row.insertCell(1);
    var elementid = "item-" + document.getElementsByTagName("td").length;
    x.setAttribute('id',elementid);
   x.innerHTML="<label>Kit Item " + document.getElementsByTagName("td").length + "</label><input type=\"text\" name=\"kits-item[]\" size=\"35\">";
}