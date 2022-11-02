<style>
    table {
        width: 100%;
    }

    td {
        background-color: blue;
        color: white;
    }

    th {
        background-color: black;
        color: white;
    }

    h1 {
        color: #23631F;
    }
</style>

<h1>Listado de las oficinas registradas</h1>

<table>
    @foreach ($oficinas as $oficina)
        <tr>
            <th>{{ $oficina->addressLine1 }}</th>
        </tr>
        @endforeach
        
        <tr>
            <td></td>
        </tr>
</table>