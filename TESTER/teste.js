var num1 = 80;
var num2 = 437;
var variv = 'o';
var res;

$("#pai input").click(function(){

    if(variv == '+'){
        res = num1 + num2;
    }else if(variv == '-'){
        res = num1 - num2;
    }else if(variv == '/'){
        res = num1 / num2;
    }else if(variv == '*'){
        res = num1 * num2;
    }else{
        $("#filho").html("Escolha uma variavel seu animal");
    }

    
    $("#filho").html(res);
});