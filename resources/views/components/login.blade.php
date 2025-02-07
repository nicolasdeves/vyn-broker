<form action="/verify-login" method="POST">
    @csrf
    <section>
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Área do corretor</h3>

                            <div data-mdb-input-init class="form-outline mb-4">

                                <label class="form-label" for="user"></label>
                                <input type="text" name="user" class="form-control form-control-lg"
                                    placeholder="Usuário" />

                            </div>

                            <div data-mdb-input-init class="form-outline mb-4">

                                <label class="form-label" for="password"></label>
                                <input type="password" name="password" class="form-control form-control-lg"
                                    placeholder="Senha" />

                            </div>

                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                                type="submit">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
