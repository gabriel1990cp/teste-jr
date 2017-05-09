@include('head')
<body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Convênia - Teste prático - DEV PHP JR - Gabriel Costa Pinto
                </div>
                <form action="{{ url('salvar') }}" method="post" name="form_cad" id="form_cad">
                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput">Nome</label>
                            <select class="form-control" id="vendedor" name="vendedor" required>
                            <option value="">Selecione ></option>
                            @foreach ($vendedores as $vendedor)
                                <option value="{{$vendedor->id}}">{{$vendedor->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="formGroupExampleInput2">Valor de comissão</label>
                        <input type="text" class="form-control" id="valor_comissao" name="valor_comissao" placeholder="Valor de comissão" required onKeyPress="return(MascaraMoeda(this,'.',',',event))">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a class="btn btn-danger" href="{{ url('/') }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<script>
    function MascaraMoeda(objTextBox, SeparadorMilesimo, SeparadorDecimal, e){
        var sep = 0;
        var key = '';
        var i = j = 0;
        var len = len2 = 0;
        var strCheck = '0123456789';
        var aux = aux2 = '';
        var whichCode = (window.Event) ? e.which : e.keyCode;
        if (whichCode == 13) return true;
        key = String.fromCharCode(whichCode); // Valor para o código da Chave
        if (strCheck.indexOf(key) == -1) return false; // Chave inválida
        len = objTextBox.value.length;
        for(i = 0; i < len; i++)
            if ((objTextBox.value.charAt(i) != '0') && (objTextBox.value.charAt(i) != SeparadorDecimal)) break;
        aux = '';
        for(; i < len; i++)
            if (strCheck.indexOf(objTextBox.value.charAt(i))!=-1) aux += objTextBox.value.charAt(i);
        aux += key;
        len = aux.length;
        if (len == 0) objTextBox.value = '';
        if (len == 1) objTextBox.value = '0'+ SeparadorDecimal + '0' + aux;
        if (len == 2) objTextBox.value = '0'+ SeparadorDecimal + aux;
        if (len > 2) {
            aux2 = '';
            for (j = 0, i = len - 3; i >= 0; i--) {
                if (j == 3) {
                    aux2 += SeparadorMilesimo;
                    j = 0;
                }
                aux2 += aux.charAt(i);
                j++;
            }
            objTextBox.value = '';
            len2 = aux2.length;
            for (i = len2 - 1; i >= 0; i--)
                objTextBox.value += aux2.charAt(i);
            objTextBox.value += SeparadorDecimal + aux.substr(len - 2, len);
        }
        return false;
    }
</script>