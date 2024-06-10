// Obtendo a referência do corpo da tabela
var corpoTabela = document.getElementById('dados-recebidos');

// Criando uma nova linha na tabela
var novaLinha = corpoTabela.insertRow();

// Inserindo as células na nova linha
var celulaNome = novaLinha.insertCell();
celulaNome.textContent = 'Orlando';

var celulaLocalizacao = novaLinha.insertCell();
celulaLocalizacao.textContent = 'Benfica';

var celulaData = novaLinha.insertCell();
celulaData.textContent = '19/1/2003';

var celulaTipo = novaLinha.insertCell();
celulaTipo.textContent = 'Roubo';

var celulaDescricao = novaLinha.insertCell();
celulaDescricao.textContent = 'iiiiiiiiiiiiiii';
