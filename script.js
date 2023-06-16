const urlParams = new URLSearchParams(window.location.search)
const username = urlParams.get('username')
const password = urlParams.get('password')
const confirmPassword = urlParams.get('confirmPassword')
const diffPasswords = urlParams.get('diffPasswords')

const usernameResponse = document.getElementById('respuesta-username')
const passwordResponse = document.getElementById('respuesta-password')
const confirmPasswordResponse = document.getElementById('respuesta-confirm-password')

if (username === 'si'){
    usernameResponse.textContent = "Error en el usuario"
}

if (password === 'si'){
    passwordResponse.textContent = "Error en el password"
}

if (confirmPassword === 'si'){
    confirmPasswordResponse.textContent = "Error en el password confirm"
}
