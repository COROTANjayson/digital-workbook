const { clone } = require("lodash");

var add = document.getElementById('addQuestion');
var containerForm = document.getElementById('container-form');
var questionBox = document.getElementById('questionBox');


// Form submit event
add.addEventListener('click', addItem);

questionBox.addEventListener('click', removeItem);
// Add item
function addItem(e){
  e.preventDefault();
   var i = 0;
    ++i;
    var divQB = document.createElement('div');
    divQB.className = 'question-box container bg-white p-3 my-3 border border-secondary rounded';
    divQB.id = "questionBox"
   
    var times = document.getElementById('times');
    divQB.appendChild(times.cloneNode(true));

    var label =document.createElement('label');
    label.htmlFor = "question";
    label.className = "form-label";
    label.appendChild(document.createTextNode('Question:'));
    divQB.appendChild(label);
    
    var inputQ = document.createElement('input');
    inputQ.className = "form-control";
    inputQ.setAttribute("type", "text");
    inputQ.setAttribute("name", 'question');
    inputQ.setAttribute("placeholder", "Enter Question");
    divQB.appendChild(inputQ);

    var contPoints = document.getElementById('containerPoints');
    divQB.appendChild(contPoints.cloneNode(true));
    
    var divOpt = document.createElement('div');
    divOpt.className = 'container text-center py-3';
    divOpt.id = "option-container";
         
        var h6 = document.createElement('h6');
        h6.className = "text-left";
        h6.appendChild(document.createTextNode('Select for correct answer'));
        divOpt.appendChild(h6);

        var table = document.createElement('table');
        table.className = "table my-2 table-borderless";

        divOpt.appendChild(table);

        var tbody = document.createElement("tbody");
        
        
        /* Options */
          /* Option 1 */
        var tr1 = document.createElement("tr");
        
        var tdRB1 = document.createElement("td");
        tdRB1.className = "align-middle";
        var tdInput1 = document.createElement("td");
        tdInput1.className = "align-middle";
        
        tr1.appendChild(tdRB1);
        tr1.appendChild(tdInput1);
        var radioBut1 = document.createElement('input');
        radioBut1.setAttribute("type", "checkbox");
        radioBut1.setAttribute('name', 'answer'+i);
        radioBut1.setAttribute('value', 'option1');
        radioBut1.setAttribute('checked','true');

        var inputOpt1 = document.createElement('input');
        inputOpt1.setAttribute("type", "text");
        inputOpt1.setAttribute("name", 'option1');
        inputOpt1.id = 'option1';
        inputOpt1.setAttribute("placeholder", "Option 1");
        inputOpt1.className = "form-control";

        tdRB1.appendChild(radioBut1);
        tdInput1.appendChild(inputOpt1);
           
          /* Option 2 */
        var tr2 = document.createElement("tr");

        var tdRB2 = document.createElement("td");
        tdRB2.className = "align-middle";
        var tdInput2 = document.createElement("td");
        tdInput2.className = "align-middle";
        
        tr2.appendChild(tdRB2);
        tr2.appendChild(tdInput2);
        var radioBut2 = document.createElement('input');
        radioBut2.setAttribute("type", "checkbox");
        radioBut2.setAttribute('name', 'answer'+i);
        radioBut2.setAttribute('value', 'option2');

        var inputOpt2 = document.createElement('input');
        inputOpt2.setAttribute("type", "text");
        inputOpt2.setAttribute("name", 'option2');
        inputOpt2.id = 'option2';
        inputOpt2.setAttribute("placeholder", "Option 2");
        inputOpt2.className = "form-control";

        tdRB2.appendChild(radioBut2);
        tdInput2.appendChild(inputOpt2);

        /* Option 3 */
        var tr3 = document.createElement("tr");

        var tdRB3 = document.createElement("td");
        tdRB3.className = "align-middle";
        var tdInput3 = document.createElement("td");
        tdInput3.className = "align-middle";
        
        tr3.appendChild(tdRB3);
        tr3.appendChild(tdInput3);
        var radioBut3 = document.createElement('input');
        radioBut3.setAttribute("type", "checkbox");
        radioBut3.setAttribute('name', 'answer'+i);
        radioBut3.setAttribute('value', 'option3');

        var inputOpt3 = document.createElement('input');
        inputOpt3.setAttribute("type", "text");
        inputOpt3.setAttribute("name", 'option3');
        inputOpt3.id = 'option3';
        inputOpt3.setAttribute("placeholder", "Option 3");
        inputOpt3.className = "form-control";

        tdRB3.appendChild(radioBut3);
        tdInput3.appendChild(inputOpt3);
      
        /* Option 4 */
        var tr4 = document.createElement("tr");

        var tdRB4 = document.createElement("td");
        tdRB4.className = "align-middle";
        var tdInput4 = document.createElement("td");
        tdInput4.className = "align-middle";
        
        tr4.appendChild(tdRB4);
        tr4.appendChild(tdInput4);
        var radioBut4 = document.createElement('input');
        radioBut4.setAttribute("type", "checkbox");
        radioBut4.setAttribute('name', 'answer'+i);
        radioBut4.setAttribute('value', 'option4');

        var inputOpt4 = document.createElement('input');
        inputOpt4.setAttribute("type", "text");
        inputOpt4.setAttribute("name", 'option4');
        inputOpt4.id = 'option4';
        inputOpt4.setAttribute("placeholder", "Option 3");
        inputOpt4.className = "form-control";

        tdRB4.appendChild(radioBut4);
        tdInput4.appendChild(inputOpt4);
        
        
        tbody.appendChild(tr1); 
        tbody.appendChild(tr2);
        tbody.appendChild(tr3);
        tbody.appendChild(tr4);
        /* Options */
        
        table.appendChild(tbody);

    divQB.appendChild( divOpt);
    

    containerForm.appendChild(divQB);
}

function removeItem(e){
    if(e.target.classList.contains('delete-question')){
      var container =  e.target.parentElement.parentElement.parentElement; 
      var qB = e.target.parentElement.parentElement;
        
      container.removeChild(qB);
    }
  }