//Calcula a idade a partir do ano de nascimento
function idade(anoNasc){
    return 2020-anoNasc;
}

//captação dos elementos
objBotao = document.getElementById("botao");
objBotao.onclick = function(){
    objNome = document.getElementById("nome");
    objAnoNasc = document.getElementById("anoNasc");
    objEmail = document.getElementById("email");
    objTelefone = document.getElementById("telefone");
    objUf = document.getElementById("uf");
    idade();

//verificação de idade
    var status="indefinido";
    if (idade(parseInt(objAnoNasc.value))<18){
         status = "Menor"
    } else{
        if(idade(parseInt(objAnoNasc.value))>60){
            status = "Idoso"
        }else{
            status = "Adulto"
        }
    }

//verificação de telefone
function verificaTelefone(objTelefone){
    var oRegExp = new ("^\\([0-9]{2}\\)((3[0-9]{3}-[0-9]{4})|(9[0-9]{3}-[0-9]{5}))$");
    if (oRegExp.test(objTelefone.value)==true){
        objTelefone.style.borderColor = "#008000";
        return resultado.innerHTML = "Ok"
    }else{
        objTelefone.style.borderColor = "#FF0000";
        return resultado.innerHTML = "Telefone incorreto";
    }
}

//exibição dos elementos na pagina
    objResultado = document.getElementById("resultado");
    objResultado.innerHTML = ("<h1>Cliente</h1>"+"Nome:"+(objNome.value)+
                                "<br>Idade:"+idade(parseInt(objAnoNasc.value))+
                                "<br>Faixa:"+(status)+
                                "<br>Email:"+(objEmail.value)+
                                "<br>Telefone:"+(objTelefone.value)+
                                "<br>Estado:"+(objUf.value));
                                
}

    var estadoBotao = document.getElementById("estadoBotao");
    var estados = document.getElementById("estados");

//uso do AJAX para capturar os elementos contidos na lista "state.txt"
    estadoBotao.onclick = function(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange= function(){
            if(xhttp.readyState == 4 && xhttp.status == 200){
                document.getElementById("estados").innerHTML = "<pre>"+xhttp.responseText+"</pre>";
            }
        };
        xhttp.open("GET","state.txt",true);
        xhttp.send();
    }