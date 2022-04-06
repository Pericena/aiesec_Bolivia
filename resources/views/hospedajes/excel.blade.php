<table>
    <thead>
    <tr><th colspan="19"><strong>Hospedaje Internacional</strong></th></tr>
    <tr>
        <th><strong>Id</strong></th>
        <th><strong>Nombre completo</strong></th>
        <th><strong>Celular</strong></th>
        <th><strong>Correo electrónico</strong></th>
        <th><strong>Ciudad donde se encuentra</strong></th>
        <th><strong>Dirección donde vive</strong></th>
        <th><strong>Cantidad de voluntarios que pued hospedar</strong></th>
        <th colspan="2"><strong>Fecha y Hora que puede empezar a hospedar al (los) voluntario(s)</strong></th>
        <th colspan="7"><strong>¿Qué puede ofrecer al voluntario?</strong></th>
        <th><strong>¿Por qué quiere formar parte del programa Familia Global?</strong></th>
        <th><strong>¿Cómo se enteró del programa Familia Global?</strong></th>
        <th><strong>Tienes algo para decirlo</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($hospedas as $hospeda)
        <tr>
            <td>{{ $hospeda->id }}</td>
            <td>{{ $hospeda->nombre }}</td>
            <td>{{ $hospeda->celular }}</td>
            <td>{{ $hospeda->correo }}</td>
            <td>{{ $hospeda->ciudad_reside }}</td>
            <td>{{ $hospeda->direccion }}</td>
            <td>{{ $hospeda->cantidad_voluntarios }}</td>
            <td width="30">{{ $hospeda->hospedar_fecha }}</td>
            <td width="30">{{ $hospeda->hospedar_hora }}</td>
            @if ($hospeda->unica > 0)
                <td>Habitacion Única</td>
            @else
                <td>No aceptó habitacion única</td>
            @endif
            @if ($hospeda->compa > 0)
                <td>Habitacion Compartida</td>
            @else
                <td>No aceptó habitacion compartida</td>
            @endif
            @if ($hospeda->services > 0)
                <td>Servicios (Agua, luz, internet, etc.)</td>
            @else
                <td>No aceptó servicios (Agua, luz, internet, etc.)</td>
            @endif
            @if ($hospeda->desa > 0)
                <td>Desayuno</td>
            @else
                <td>No aceptó desayuno</td>
            @endif
            @if ($hospeda->almu > 0)
                <td>Almuerzo</td>
            @else
                <td>No aceptó almuerzo</td>
            @endif
            @if ($hospeda->cen > 0)
                <td>Cena</td>
            @else
                <td>No aceptó cena</td>
            @endif
            @if ($hospeda->otro > 0)
                <td>Otros</td>
            @else
                <td>No aceptó otros</td>
            @endif

            <td>{{ $hospeda->formar_parte }}</td>
            <td>{{ $hospeda->saber_programa }}</td>
            <td>{{ $hospeda->decir_algo }}</td>
        </tr>
    @endforeach
    </tbody>
</table>