function postMethod(params) {
    method = "POST";
    var form = document.createElement("form");
    form.setAttribute("method", method);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "action");
    hiddenField.setAttribute("value", "edit");

    form.appendChild(hiddenField);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}

function setRequestParam(clickedEle){
    var recordId = clickedEle.getAttribute("data-met-id");
    var name = clickedEle.getAttribute("data-met-name");

    var myParam = {id:recordId};

    postMethod(myParam);
}

function setIdOnDelete(clickedEle){
    var attr = clickedEle.getAttribute("data-target").replace("#",'');
    var idToDelete = clickedEle.getAttribute("data-met-id");
    var ele = document.getElementById(attr).querySelectorAll("*");
    for(var i=0;i<ele.length;i++){
        if(ele[i].id == "hidElementId"){
            ele[i].setAttribute("value",idToDelete);
            break;
        }
    }
}