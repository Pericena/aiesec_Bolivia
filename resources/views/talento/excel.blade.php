<table>
    <thead>
        <tr>
            <th colspan="18"><strong>Talento Global</strong></th>
        </tr>
        <tr>
            <th><strong>Id</strong></th>
            <th><strong>Nombres</strong></th>
            <th><strong>Apellidos</strong></th>
            <th><strong>Edad</strong></th>
            <th><strong>Correo</strong></th>
            <th><strong>Celular</strong></th>
            <th><strong>Ciudad en que reside</strong></th>
            <th><strong>Universidad</strong></th>
            <th><strong>Grao de estudio</strong></th>
            <th><strong>Carrera</strong></th>
            <th><strong>Otra carrera</strong></th>
            <th><strong>Nivel de inglés</strong></th>
            <th><strong>Experiencia</strong></th>
            <th><strong>Área de desarrollo</strong></th>
            <th><strong>Pasantía internacional</strong></th>
            <th><strong>Programa</strong></th>
            <th><strong>Descubrimiento del programa</strong></th>
            <th><strong>Medio para contactar</strong></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($talentos as $talento)
            <tr>
                <td>{{ $talento->id }}</td>
                <td>{{ $talento->nombres }}</td>
                <td>{{ $talento->apellidos }}</td>
                <td>{{ $talento->edad }}</td>
                <td>{{ $talento->correo }}</td>
                <td>{{ $talento->celular }}</td>
                <td>{{ $talento->ciudad_reside }}</td>
                <td>{{ $universidades[$talento->universidad - 1]->name }}</td>
                <td>{{ $talento->grado_estudio }}</td>
                <td>{{ $talento->carrera }}</td>
                @if (strlen($talento->otra_carrera) == 0)
                    <td>No seleccionó Otra carrera</td>
                @else
                    <td>{{ $talento->otra_carrera }}</td>
                @endif
                <td>{{ $talento->nivel_ingles }}</td>
                <td>{{ $talento->experiencia }}</td>
                <td>{{ $talento->area_desarrollo }}</td>
                <td>{{ $talento->pasantia_internacional }}</td>
                <td>{{ $talento->programa }}</td>
                <td>{{ $talento->descubrimiento_programa }}</td>
                <td>{{ $talento->medio_contacto }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
