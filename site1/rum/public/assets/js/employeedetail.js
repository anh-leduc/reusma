var colHeaders = ['Project ID','Project Name','Type'].concat(listMonday);
console.log(data);
var options = {
    data:data,
    rowResize:true,
    columnDrag:true,
    colHeaders: colHeaders,
    minDimensions:[colHeaders.length,data.length],
    allowInsertRow: false,
    allowInsertColumn: false,
    columnSorting: false,
    allowDeleteRow: false,
    allowDeleteColumn: false,
    allowRenameColumn: false,
    tableOverflow:true,
    tableHeight:'500px',
    tableWidth:'1220px',
    columns: [
        { type: 'text', width:'100'},
        { type: 'text', width:'100'},
        { type: 'text', width:'50'},
    ],
    updateTable:function(instance, cell, col, row, val, label, cellName) {
        if (col==0){
            cell.classList.add('readonly');
            cell.style.color = "#000000";
            cell.style.backgroundColor = '#ffec5d'; 
            cell.style.fontweight = "bold";   
        }
        else
        if (col==1){
            cell.classList.add('readonly');
            cell.style.color = "#000000";
            cell.style.backgroundColor = '#5df39c'; 
        }
        else
        if (col==2){
            cell.classList.add('readonly');
            cell.style.color = "#000000";
        }
        else 
        if (col > 2) {
            // Get text
            cellData = parseInt(cell.innerText);
            if (cell.innerText=="") {
                cell.className = '';
                cell.style.backgroundColor = '#FFFFFF'; //white
            }
            else
            {
                cell.innerText = String(cellData) + "%";
                if (cellData>=100) {
                    cell.className = '';
                    cell.style.backgroundColor = '#f75551'; //red
                }
                else if (cellData>85 && cellData<100) {
                    cell.className = '';
                    cell.style.backgroundColor = '#F9A941'; //ogange
                }
                else if (cellData>65 && cellData<=85) {
                    cell.className = '';
                    cell.style.backgroundColor = '#6aec3d';  //green
                }
                else if (cellData>25 && cellData<=65) {
                    cell.className = '';
                    cell.style.backgroundColor = '#3fe2ff'; //blue
                }
                else if (cellData>0 && cellData<=25) {
                    cell.className = '';
                    cell.style.backgroundColor = '#ccc'; //gray
                }
                else if (cellData<=0) {
                    cell.className = '';
                    cell.style.backgroundColor = '#FFFFFF'; //white
                }
            }
        }
          if (true){
            cell.classList.add('readonly');
            cell.style.color = "#000000"
        }
    },
};

$(document).ready(function() {
    
    var myTable = jexcel(document.getElementById('spreadsheet1'), options);
    myTable.hideIndex();
});
