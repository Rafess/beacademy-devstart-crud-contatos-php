<div class="container rounded-3 p-3 text-light mt-3 shadow" style="background-color: #7532F9;">
    <h1 class="h1 text-center mb-3 p-3"> Editar Contato </h1>
            <form class="row g-3" method="post">
            <div class="col-md-6">
                <label value="<?php  echo $data[1]; ?>" for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-12">
                <label value="<?php echo $data[0];?>" for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-12">
                <label value="<?php echo $data[2];?>" for="phone" name="phone"class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="(DDD) 9 .....">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-light me-md-2 text-light rounded-pill" style="background-color: #F844AD; border: 1px solid #F844AD">Atualizar</button>
            </div>
        </form>
    </div>