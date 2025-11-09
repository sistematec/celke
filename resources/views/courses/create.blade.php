<div>
    <h2>Cadastrar o Curso</h2>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        @method('POST')

        <label>Nome> </label>
        <input type="text" name="name" id="name" placeholder="Nome do Curso" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>
</div>
