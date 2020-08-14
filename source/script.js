$(function(){
    $.ajax({
        type: 'post',
        data:{acao:'pegasetor'},
        dataType: 'json',
        url:'app/agenda.php',
        success:function(retorno){
            var str = '';
            for(var indice in retorno){
                str += "<option value= '"+retorno[indice].id+"'>"+retorno[indice].nome+"</option>";
                
                //popup na tela =  alert(retorno[indice].nome)
            }
            $(" #selectSetor").append(str).selectpicker('refresh')
        },
        error:function(x1,x2,x3){
            alert(x2);
        }
        
    });


    $(" #selectSetor").change(function(){
        var selecionado = $(this).val();
        if(selecionado != 'Selecione setor.'){
            $(" #nome").prop('disabled',false);
            var descr = $(this).children('option:selected').text();

            
            


            pegaContatos(selecionado,descr)
        }

    });

    $(" #nome").keyup(function(){
        var Digitado = $(this).val();
        filtraContatos(Digitado);
    })

    $(" #btnPesquisa").click(function(){
       alert("clicquie");  
   });
    
});

function pegaContatos (id,descr){
    $.ajax({
        type: 'post',
        data:{idSetor:id},
        dataType:'json',
        url:'app/getContatos.php',
        success:function takeContatos(retorno){
            $(" #tableContatos tbody tr").remove();
            var str = '';
            for(var indice  in retorno){
                var nome = retorno[indice].nome;
                var ramal = retorno[indice].ramal;

                str += "<tr>";
                str += "<td>"+descr+"</td>";
                str += "<td>"+nome+"</td>";
                str += "<td>"+ramal+"</td>";
                str += "</tr>";

            }
            $(" #tableContatos tbody").append(str);


        },error: function erro (x1,x2,x3){

        }
    })
}

function filtraContatos (texto){
    var tamanhoPesquisa = texto.length;

// 
    $(" #tableContatos tbody tr").each(function(){
        if ($(this).children('td').eq(1).text().toUpperCase().substr(0,tamanhoPesquisa) != texto.toUpperCase()) {
            $(this).hide();
        }else{
            $(this).show();
        }
    });

}