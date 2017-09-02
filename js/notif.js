function notif(){
    document.getElementById("notif").style.display="inherit";
}

function close_notif(){
    document.getElementById("notif").style.display="none";
}

function check_e(){
    var a = document.getElementsByClassName('error')[0];
    if(a=="[object HTMLParagraphElement]"){
        document.getElementById("notif").style.display="inherit";
    }else{
        document.getElementById("notif").style.display="none";
    }
}