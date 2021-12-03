{{-- @foreach ($errors->all() as $error)
    {{ $error }}
@endforeach --}}

{{-- <div class="form-group">
        <label for="">Tipo Identificaion</label>
        <input type="text" name="txtTid" id="txtTid" class="form-control" placeholder="" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small>
    </div> --}}

{{-- {{ $ejecutar }} Cliente --}}

<div class="form-group">
    <label for="">Tipo Identificaion</label>
    <select class="form-control form-select" name="txtTid" id="txtTid">
        @if (isset($clientes->id_tipo_id))
            <option value="{{ $clientes->id_tipo_id }}">{{ $clientes->tipo_id->desc_tipo_id }}</option>
            <option>_________________________</option>
        @else
            <option selected>Seleccione</option>
        @endif
        @foreach ($tiposids as $tipoid)
            <option value="{{ $tipoid->id_tipo_id }}">{{ $tipoid->desc_tipo_id }}</option>
        @endforeach
    </select>
    @error('txtTid')
        <small id="helpId" class="text-muted">{{ $message }}</small>

    @enderror
</div>
<div class="form-group">
    <label for="">Numero Identificacion</label>
    <input type="text" name="txtNid" id="txtNid" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->num_id_cliente) ? $clientes->num_id_cliente : old('txtNid') }}">
    @error('txtNid')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Primer Nombre</label>
    <input type="text" name="txtPnom" id="txtPnom" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->nom_cliente_1) ? $clientes->nom_cliente_1 : old('txtPnom') }}">
    @error('txtPnom')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Segundo Nombre</label>
    <input type="text" name="txtSnom" id="txtSnom" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->nom_cliente_2) ? $clientes->nom_cliente_2 : old('txtSnom') }}">
    @error('txtSnom')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Primer Apellido</label>
    <input type="text" name="txtPape" id="txtPape" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->ape_cliente_1) ? $clientes->ape_cliente_1 : old('txtPape') }}">
    @error('txtPape')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Segundo Apellido</label>
    <input type="text" name="txtSape" id="txtSape" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->ape_cliente_2) ? $clientes->ape_cliente_2 : old('txtSape') }}">
    @error('txtSape')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Correo</label>
    <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->correo_cliente) ? $clientes->correo_cliente : old('txtCorreo') }}">
    @error('txtCorreo')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Telefono</label>
    <input type="text" name="txtTel" id="txtTel" class="form-control" placeholder="" aria-describedby="helpId"
        value="{{ isset($clientes->tel_cliente) ? $clientes->tel_cliente : old('txtTel') }}">
    @error('txtTel')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Tipo Cliente</label>
    <select class="form-control form-select" name="txtTipCli" id="txtTipCli">
        @if (isset($clientes->id_estado))
            <option value="{{ $clientes->id_estado }}">{{ $clientes->estado->desc_estado }}</option>
            <option>_________________________</option>
        @else
            <option selected>Seleccione</option>
        @endif
        @foreach ($tipoclies as $tipoclie)
            <option value="{{ $tipoclie->id_tipo_cliente }}">{{ $tipoclie->desc_tipo_cliente }}</option>
        @endforeach
    </select>
    {{-- <input type="text" name="txtEstado" id="txtEstado" class="form-control" placeholder=""
            aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small> --}}
    @error('txtTipCli')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="">Estado</label>
    <select class="form-control form-select" name="txtEstado" id="txtEstado">
        @if (isset($clientes->id_estado))
            <option value="{{ $clientes->id_estado }}">{{ $clientes->estado->desc_estado }}</option>
            <option>_________________________</option>
        @else
            <option selected>Seleccione</option>
        @endif
        @foreach ($estados as $estado)
            <option value="{{ $estado->id_estado }}">{{ $estado->desc_estado }}</option>
        @endforeach
    </select>
    {{-- <input type="text" name="txtEstado" id="txtEstado" class="form-control" placeholder=""
            aria-describedby="helpId">
        <small id="helpId" class="text-muted">Help text</small> --}}
    @error('txtEstado')
        <small id="helpId" class="text-muted">{{ $message }}</small>
    @enderror
</div>
<input class="btn btn-primary" type="submit" value="{{ $ejecutar }}">
<a href="{{ url('/cliente') }}" class="btn btn-danger">Regresar</a>
