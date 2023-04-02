
let campo = document.querySelector('.iban');

let btnCopiar = document.querySelector('.btnCopiar');

btnCopiar.addEventListener('click', () => {
    
    navigator.clipboard.writeText(campo.value);
    alert('IBAN copiado');
    
});

// o teu input do tipo text deve ter a classe 'iban'
// o teu botao ou icone de copiar deve ter a classe btnCopiar
// 