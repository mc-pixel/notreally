<table>
    <thead>
    <th>name</th>
    </thead>
    <tbody>
    @foreach($countrys as $country)
        <tr>
            <td>{{$country->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

