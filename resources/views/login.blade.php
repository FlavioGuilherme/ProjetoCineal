@extends('template')

@section('titulo', 'Cineal - Login')

@section('conteudo_principal')
            <div> 
                <div id="conteudo"> <!-- Inicio conteudo -->
                    <form id="formulario">
                        <H1>Login</H1>
                        <br>
                        <label for="">Usúario:</label>
                        <input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>

                        <label for="">Senha:</label>
                        <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
                        
                        <input class="centralizar-botao" type="submit" name="btnLogin" value="Acessar">
                    </form>
                </div>              <!-- Fim conteudo -->
            </div>
@endsection