<table>
    <thead>
    <th>name</th>
    <th>type</th>
    <th>alcohol_percentage</th>
    <th>year</th>
    <th>country</th>
    </thead>
    <tbody>
    @foreach($beers as $beer)
        <tr>
            <td>{{$beer->name}}</td>
            <td>{{$beer->type}}</td>
            <td>{{$beer->alcohol_percentage}}</td>
            <td>{{$beer->year}}</td>
            <td>{{$beer->country->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


