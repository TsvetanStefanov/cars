let divTable = document.getElementById('table');
let table = document.createElement('table');
divTable.appendChild(table);
let tr0 = document.createElement('tr');
table.appendChild(tr0);
let td0 = document.createElement('td');
tr0.appendChild(td0);
td0.innerText='User';
let td01 = document.createElement('td');
tr0.appendChild(td01);
td01.innerText='Message';
td0.classList.add('td');
td01.classList.add('td');

for(i=0;i<msgs.length;i++){
    let tr = document.createElement('tr');
    tr.classList.add('tr');
    table.appendChild(tr);
    let td1 = document.createElement('td');
    tr.appendChild(td1);
    td1.classList.add('td');
    var text1 = document.createTextNode(usrs[i]);
    td1.appendChild(text1);
    let td2 = document.createElement('td');
    td2.classList.add('td');
    var text2 = document.createTextNode(msgs[i]);
    td2.appendChild(text2);
    tr.appendChild(td2);
   if(i %2 !==0){
    td2.style.backgroundColor = 'rgb(183, 183, 183)';
    td1.style.backgroundColor = 'rgb(183, 183, 183)';
   }


}
