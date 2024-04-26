{{-- <div class="recent-orders">
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
</div> --}}
<div class="bottom-data">
    <div class="orders">
        <div class="header">
            <i class="bx bx-receipt"></i>
            <h3>{{ $tableTitle }}</h3>
            <i class="bx bx-filter"></i>
            <i class="bx bx-search"></i>
        </div>
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
                            <td> {{ $cell }} </td>
                        @endforeach
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div>
