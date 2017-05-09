@include('head')
<body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Convênia - Teste prático - DEV PHP JR - Gabriel Costa Pinto
                </div>

              <div class="bt-cad">
                  <a class="btn btn-primary" href="{{ url('/cadastro') }}" >Cadastrar</a>
              </div>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Valor de venda</th>
                        <th>Valor de comissão</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vendedores as $vendedor)
                        <tr>
                            <th scope="row">{{$vendedor->id}}</th>
                            <td>{{$vendedor->nome}}</td>
                            <td>{{$vendedor->email}}</td>
                            <td>R${{number_format($vendedor->valor_comissao,2,',','.')}}</td>
                            <td>R${{number_format($vendedor->comissao,2,',','.')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
