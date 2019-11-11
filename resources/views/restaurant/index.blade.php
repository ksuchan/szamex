<section>
    <table>
        <thead>
            <tr>
                <th>
                    Nazwa:
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($restaurants as $restaurant)
                <tr>
                    <td>
                        {{ $restaurant->name }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>Brak restauracji</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>