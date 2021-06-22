//pegar data e hora do system do user para usar na hora
// de fazer o pedido
//porem não foi usada

var dia = new Date();
var mes = new Date();
var ano = new Date();

dia = dia.getDate();
ano = ano.getFullYear();

const data = new Date;
const month = data.toLocaleString('default', { month: 'long' });
console.log(month);

var label1= document.getElementById('label1');

label1.innerHTML= dia + 2+ ' de '+ month +' '+ ano;
label2.innerHTML= dia + 3+ ' de '+ month +' '+ ano;
label3.innerHTML= dia + 4+ ' de '+ month +' '+ ano;
label4.innerHTML= dia + 5+ ' de '+ month +' '+ ano;
label5.innerHTML= dia + 6+ ' de '+ month +' '+ ano;
label6.innerHTML= dia + 7+ ' de '+ month +' '+ ano;






