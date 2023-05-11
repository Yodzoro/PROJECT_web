window.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('btn_login')
        .addEventListener('click', function (event) {

            event.preventDefault()

            const leight = /^[\S]{1,50}$/
            let hasError = false

            let usernameInput = document.getElementById('usr_name')
            if (usernameInput.value.match(leight) === null) {
                usernameInput.classList.add('error')
                hasError = true
            }
            usernameInput.addEventListener('input', function () {
                if (this.value.match(leight) === null) {
                    this.classList.add('error')
                    hasError = true
                } else {
                    this.classList.remove('error')
                    hasError = false
                }
            })

            let passwordInput = document.getElementById('usr_psw')
            if (passwordInput.value.match(leight) === null) {
                passwordInput.classList.add('error')
                hasError = true
            }
            passwordInput.addEventListener('input', function () {
                if (this.value.match(leight) === null) {
                    this.classList.add('error')
                    hasError = true
                } else {
                    this.classList.remove('error')
                    hasError = false
                }
            })
            if (!hasError) {//envoyer les données s'il n'y a pas des erreurs
                //document.querySelector('.window-content form').submit()
                loginUser();
            }
        })
})
function loginUser() {
    const username = document.getElementById('usr_name').value;
    const password = document.getElementById('usr_psw').value;

    // Создаем объект FormData для отправки данных формы через AJAX
    const formData = new FormData();
    formData.append('login_username', username);
    formData.append('login_password', password);

    // Отправляем запрос на сервер
    fetch('form.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                window.location.href = 'user_page.php';
            } else if (data.status === 'error') {
                document.getElementById('error_login').innerText = data.message;
                document.getElementById('error_login').style.display = 'block';
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
