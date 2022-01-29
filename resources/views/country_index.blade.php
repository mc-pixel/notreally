<table>
    <thead>
    <th>name</th>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>{{$country->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

