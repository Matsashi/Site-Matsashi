window.onload = function() { 
    let test = urlPhp.innerHTML.replace('"',"");
    test = test.replace('"',"");
    let menuElementActive = document.getElementById(test);
    menuElementActive.className = menuElementActive.className + " active";
}