<?php
require_once "header.php";
?>
<div class="content_registration">
    <div class="registration_title">
        <strong><?php echo $trad['registration']; ?></strong>
    </div>
    <form action="form.php" method="post" id="registration-form">
        <label for="uname" style="color: #f2f2f2"><b>USERNAME</b></label>
        <input type="text" name="register_username" placeholder="Write your beautiful username~" class="form" id="username">

        <br><label for="psw"style="color: #f2f2f2"><b>PASSWORD</b></label>
        <br><input type="password" name="register_password" placeholder="Write your password" class="usr" id="password"><br>
        <input type="password" name="register_password_repeat" placeholder="Let's check if it's correct" class="usr" id="password_repeat"><br>
        <div id="password-error" style="display:none;color:#ef5252;">Passwords don't match!</div>
        <!--button or input-->
        <button type="submit" class="btn btn-success" id="signup-button">SIGN UP</button>
    </form>


</div>

<script>
    const password = document.getElementById('password');
    const passwordRepeat = document.getElementById('password_repeat');
    const passwordError = document.getElementById('password-error');
    const signupButton = document.getElementById('signup-button');
    const registrationForm = document.getElementById('registration-form');

    passwordRepeat.addEventListener('input', () => {
        if (password.value !== passwordRepeat.value) {
            passwordError.style.display = 'block';
            signupButton.disabled = true;
        } else {
            passwordError.style.display = 'none';
            signupButton.disabled = false;
        }
    });

    registrationForm.addEventListener('submit', (e) => {
        if (password.value !== passwordRepeat.value) {
            e.preventDefault();
            passwordError.style.display = 'block';
            return false;
        }
    });
</script>

<?php
require_once "footer.php";
?>

