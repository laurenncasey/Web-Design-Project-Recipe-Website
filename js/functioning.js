function filterSelection(c){
    var x = document.querySelectorAll(".filterDiv");

   
    console.log("filterDiv " + c);
    
        for(var i = 0; i < x.length;i++){
            
            w3RemoveClass(x[i], "hide");
            w3RemoveClass(x[i], "show");
            console.log(x[i].className);
            if(c == "all"){
                console.log("All");
                w3RemoveClass(x[i], "hide");
                w3RemoveClass(x[i], "show");
                w3AddClass(x[i], "show");
        }else if(x[i].className == "filterDiv " + c){
                console.log("show");
                w3RemoveClass(x[i], "hide");
                w3RemoveClass(x[i], "show");
                w3AddClass(x[i], "show");
            }else{
                console.log("hide");
                w3RemoveClass(x[i], "hide");
                w3RemoveClass(x[i], "show");
                w3AddClass(x[i], "hide");

            }
        }
        console.log(x);
    }

/*
function filterSelection(c) {
    var x, i;
    x = document.querySelectorAll(".filterDiv");
    if (c == "all") c = "";
    Array.from(x).forEach(item => {
       w3RemoveClass(item, "show");
       w3RemoveClass(item, "hide");
       if (item.className.indexOf(c) > -1){
        w3AddClass(item, "show");
       }else{
        w3AddClass(item, "hide");
       }
    });
 
}
*/

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
    }

    function w3RemoveClass(element, name) {
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns =  btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    console.log("DONE");
    