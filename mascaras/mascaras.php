Para criar uma máscara em HTML e PHP para CPF, telefone, e-mail, CEP e CRMV, você pode usar algumas funções do PHP e JavaScript. Veja abaixo alguns exemplos:

Máscara de CPF:

html
Copy code
<input type="text" name="cpf" id="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
javascript
Copy code
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
Máscara de telefone:

html
Copy code
<input type="text" name="telefone" id="telefone" maxlength="15" OnKeyPress="formatar('(##) #####-####', this)">
javascript
Copy code
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
Máscara de e-mail:

html
Copy code
<input type="text" name="email" id="email" OnBlur="validarEmail(this)">
javascript
Copy code
function validarEmail(email){
  var filtro = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
  if(filtro.test(email.value)){
    return true;
  } else {
    alert("E-mail inválido!");
    email.focus();
    return false;
  }
}
Máscara de CEP:

html
Copy code
<input type="text" name="cep" id="cep" maxlength="9" OnBlur="pesquisacep(this.value);">
javascript
Copy code
function pesquisacep(valor) {

  var cep = valor.replace(/\D/g, '');

  if (cep != "") {

    var validacep = /^[0-9]{8}$/;

    if(validacep.test(cep)) {

      document.getElementById('rua').value="";
      document.getElementById('bairro').value="";
      document.getElementById('cidade').value="";
      document.getElementById('uf').value="";
      document.getElementById('ibge').value="";

      var script = document.createElement('script');

      script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

      document.body.appendChild(script);

    } else {
      alert("Formato de CEP inválido.");
    }
  } else {
    alert("Digite um CEP válido.");
  }
}
Máscara de CRMV:

html
Copy code
<input type="text" name="crmv" id="crmv" maxlength="6" OnKeyPress="formatar('#-####', this)">
javascript
Copy code
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)

  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
Note que os exemplos acima são apenas sugestões e podem ser adaptados de acordo com as suas necessidades. Lembre-se também de fazer validações adicionais nos dados inseridos pelos usuários, para garantir a integridade dos dados.