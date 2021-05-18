//  regex
const regexLogin = new RegExp('^[A-Za-z]+$')
const regexPassword = new RegExp('^[A-Za-z0-9]+$')
// récupération des éléments
const login = document.getElementById('login')
const password = document.getElementById('password')
const login_error = document.getElementById('login_error')
const password_error = document.getElementById('password_error')
// fonction de validation de formulaire
function valid_form(el, regex, error) {
    // récupérationd de la valeur
    let value = el.value
    // si la valeur récupérée n'est pas vide
    if(value !== '') {
        // si la valeur ne match pas la regex
        if(!value.match(regex)) {
            // message d'erreur
            error.innerHTML = 'Caractère incorrect'
        } else {
            // on efface le message d'erreur
            error.innerHTML = ''
        }
    } else {
        // message d'erreur
        error.innerHTML = 'Champs vide'
    }
}
// appel des fonctions sur un event
login.addEventListener('blur', () => { // event blur => perte de focus
    valid_form(login, regexLogin, login_error)
})
password.addEventListener('keyup', () => { // event keyup => quand la touche du clavier remonte
    valid_form(password, regexPassword, password_error)
})