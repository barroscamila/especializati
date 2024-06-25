if (localStorage.hasOwnProperty('USER')) {
    let name = localStorage.getItem('USER')
    alert('Olá, ' + name + '!')
} else {
    let name = prompt('Qual o seu nome?')
    localStorage.setItem('USER', name)
}