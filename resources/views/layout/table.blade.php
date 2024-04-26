<div class="recent-orders">
    <h2>{{ $tableTitle }}</h2>
    <table>
        <thead>
            <tr>
                @foreach ($tableHeaders as $header)
                    <th>{{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($tableData as $row)
                <tr>
                    @foreach ($row as $cell)
                        <td>{{ $cell }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="#">Show All</a>
</div>
