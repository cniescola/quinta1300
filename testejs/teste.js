var i = 0;
$("#pai input").click(function(){
 
    if(i == 0){
        $("#filho").html("foi clicado");
        i = 1;
    }else{
        $("#filho").html("foi desclicado");
        i = 0;
    }
});