<h2>Contacts</h2>

<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <input name="name" placeholder="Nom">
    <input name="phone_number" placeholder="Téléphone">
    <button>Ajouter</button>
</form>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Tél</th>
        <th>X</th>
    </tr>

    @foreach($contacts as $c)
        <tr>
            <td>{{ $c->name }}</td>
            <td>{{ $c->phone_number }}</td>
            <td>
                <form method="POST" action="{{ route('contacts.destroy', $c) }}">
                    @csrf
                    @method('DELETE')
                    <button>X</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
