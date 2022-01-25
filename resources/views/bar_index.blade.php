
<table>
    <thead>
        <th>name</th>
        <th>location</th>
    </thead>
    <tbody>
        @foreach($bars as $bar)
            <tr>
                <td>{{$bar->name}}</td>
                <td>{{$bar->location}}</td>
            </tr>
        @endforeach
    </tbody>
</table>


