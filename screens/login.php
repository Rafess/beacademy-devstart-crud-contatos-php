
    <div class="container mt-3 rounded text-white p-5 shadow-sm" style="background-color: #7532F9;">
        <h1 class="p-3 text-center fw-bolder"> Login </h1>
        <form class="row g-3 ">
            <div class="col-md-6">
                <label for="username" class="form-label">Usuário</label>
                <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-light me-md-2 text-light rounded-pill" style="background-color: #F844AD; border: 1px solid #F844AD">Entrar</button>
                <a type="button" class="btn btn-light rounded-pill" href="/screens/register.php" >Cadastrar-se</a>
            </div>
        </form>
    </div>
