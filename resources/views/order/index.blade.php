<section>
    <table cellpadding="10">
         <thead>
            <tr>
                <th>
                    Id:
                </th>
            </tr>
        </thead> 
        <tbody>
            @forelse($order as $orders)
                <tr>
                     <td>
                     </td>
                </tr> 
            @empty
                <tr>
                    <td>
                        <p>Brak zamówień</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>