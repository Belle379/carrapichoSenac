<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Endereço </title>
</head>
<body>
<h3> Registre seu Endereço </h3>

<form action="registrarEndereco.php"  method= "post" >

<div class="tamanho_form">
<div class="single-input">
    <input type="text" id="cep" name="cep" class="input" maxlength="9" autofocus OnBlur="pesquisacep(this.value); placeholder="00.000.000" required><br>
    <label>CEP: </label>
</div>
<div class="single-input" >
<select id="uf" name="uf"class="input">
    <option value="vasio"></option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select><br>
<label>Estado:</label>
</div>
<div class="single-input">
    <input type="text" id="cidade" name="cidade" class="input"  placeholder="Digite o nome da cidade onde mora" required ><br>
    <label>Cidade: </label>
    </div>
<div class="single-input">
    <input type="text" id="bairro" name="bairro" class="input" placeholder="Digite o nome do bairro onde mora" required><br>
    <label>Bairro: </label>
    </div>
<div class="single-input">
    <input type="text" id="endereco" name="endereco" class="input" placeholder="Digite o endereço de onde mora" required><label>Endereço: </label>
    </div>
</div>
<div class="single-input">
    <input type="number" id="numero" name="numero" class="input" placeholder="Número do lote" ><label>Número: </label>
    </div>
</div>
<div class="single-input">
    <input type="text" id="complemento" nome="complemento" class="input" placeholder=" Ex.: Uma referência que facilite a identificar o local, ou tipo de moradia, casa ou apartementeo.s (opsiconal)"><label>Complemento: </label>
    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
<script>
    $("#cep").blur(function(){
    
        var cep = this.value.replace(/[^0-9]/, "");

        if(cep.length != 8){
            return false;
        }
        
    
        var url = "https://viacep.com.br/ws/"+cep+"/json/";
        

        $.getJSON(url, function(dadosRetorno){
            try{
                $("#endereco").val(dadosRetorno.logradouro);
                $("#bairro").val(dadosRetorno.bairro);
                $("#cidade").val(dadosRetorno.localidade);
                $("#uf").val(dadosRetorno.uf);
            }catch(ex){}
        });
    });
 
</script>

<input type="submit" class="button" value="SALVAR" >
</form >
</body>
</html>