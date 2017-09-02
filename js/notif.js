function notif(){
    document.getElementById("notif").style.display="inherit";
}

function close_notif(){
    document.getElementById("notif").style.display="none";
}

function check_e(){
    if(document.getElementsByClassName("error")=="[object HTMLCollection]"){
        document.getElementById("notif").style.display="inherit";
    }
}