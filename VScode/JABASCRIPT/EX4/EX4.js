var rows = 2;
var columns = 2;

function createTable() {
    let table = document.createElement('table');

    for (let i = 0; i < rows; i++) {
        let tr = document.createElement('tr'); 
        for (let j = 0; j < columns; j++) {
            let td = document.createElement('td');
            
            tr.appendChild(td); 
        }
        table.appendChild(tr); 
    }

    document.body.appendChild(table);
}


