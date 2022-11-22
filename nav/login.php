<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="post">
            <h1>Crie uma conta</h1>
            <div class="social-container">
                <a href="#" class="social"><img src="assets/img/pipoca.png"></a>
                <a href="#" class="social"><img src="assets/img/cinema.png"></a>
                <a href="#" class="social"><img src="assets/img/tira-de-filme.png"></a>
            </div>
            <span>Ou use seu email para se registrar</span>
            <input type="text" placeholder="Name" id="username"/>
            <input type="email" placeholder="Email" id="email"/>
            <input type="password" placeholder="Password" id="user_password" />
            <button>Entrar</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="post">
            <h1>Login</h1>
            <div class="social-container">
                <a href="#" class="social"><img src="assets/img/pipoca.png"></a>
                <a href="#" class="social"><img src="assets/img/cinema.png"></a>
                <a href="#" class="social"><img src="assets/img/tira-de-filme.png"></a>
            </div>
            <span>Ou use sua conta</span>
            <input type="email" placeholder="Email" id="email" />
            <input type="password" placeholder="Password" id="user_password"/>
            <a href="#" id="alt_senha">Esqueceu sua senha?</a>
            <button>Entrar</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bem vindo de volta!</h1>
                <p>Para se manter conectado entre com seus dados</p>
                <button class="ghost" id="signIn" style="background:#fff ;color:#121212">Logar</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Olá, Usuário!</h1>
                <p>Entre com sua conta pessoal e alugue um filme.</p>
                <button class="ghost" id="signUp" style="background:#fff ;color:black">Registrar</button>
            </div>
        </div>
    </div>
</div>
