/* JavaScript for ssgplugin */



var txt = document.getElementById("welcometext");

        var day = new Date();
        var hr = day.getHours();

        if (hr >= 0 && hr < 10) {
            txt.innerHTML = "We at Student Survival Guide wish you a GOD MORGEN!";
        } else if (hr >= 10 && hr < 12) {
            txt.innerHTML = "We at Student Survival Guide wish you a GOD FORMIDDAG!";
        } else if (hr >= 12 && hr < 14) {
            txt.innerHTML = "We at Student Survival Guide wish you a GOD DAG!";
        } else if (hr >= 14 && hr <= 17) {
            txt.innerHTML = "We at Student Survival Guide wish you a GOD EFTERMIDDAG!";
        } else if (hr >= 17 && hr <= 0){
            txt.innerHTML = "We at Student Survival Guide wish you a GOD AFTEN!";
        }
    
    

