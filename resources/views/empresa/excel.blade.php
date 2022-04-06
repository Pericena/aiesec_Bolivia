<table>
    <thead>
    <tr><th colspan="14"><strong>Empresas / ONGs</strong></th></tr>
    <tr>
        <th><strong>Id</strong></th>
        <th><strong>Nombre de la empresa</strong></th>
        <th><strong>Representante de la empresa</strong></th>
        <th><strong>Cargo del representante</strong></th>
        <th><strong>Pagina web</strong></th>
        <th><strong>Celular</strong></th>
        <th><strong>Teléfono</strong></th>
        <th><strong>Correo del representante</strong></th>
        <th><strong>Correo de la empresa</strong></th>
        <th><strong>Departamento donde se encuentra la empresa</strong></th>
        <th><strong>Dirección</strong></th>
        <th><strong>Dedicación de la empresa</strong></th>
        <th><strong>Medio por el que se supo de AIESEC</strong></th>
        <th><strong>Nombre de Amigo / Familiar(Si se eligió OTRO en el anterior)</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{{ $empresa->id }}</td>
            <td>{{ $empresa->nombre_empresa }}</td>
            <td>{{ $empresa->nombre_representante }}</td>
            <td>{{ $empresa->cargo_representante }}</td>
            <td>{{ $empresa->pagina_web }}</td>
            <td>{{ $empresa->celular }}</td>
            <td>{{ $empresa->telefono }}</td>
            <td>{{ $empresa->correo_representante }}</td>
            <td>{{ $empresa->correo_empresa }}</td>
            <td>{{ $empresa->departamento }}</td>
            <td>{{ $empresa->direccion }}</td>
            <td>{{ $empresa->dedicacion}}</td>
            <td>{{ $empresa->saber_de_AIESEC }}</td>
            @if (strlen($empresa->nombre_amigo)==0)
                <td>No seleccionó Nombre/amigo</td>
            @else
                <td>{{ $empresa->nombre_amigo }}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>