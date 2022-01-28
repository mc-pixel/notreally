<form action="{{route('beer_store')}}" method="post" class="mb-16 flex">
    @csrf
    @honeypot

    <div>
        <label>name </label>
        <input type="text" id="name" title="name" name="name">
        <label>type </label>
        <input type="text" name="type">
        <label>alcohol_percentage </label>
        <input type="text" name="alcohol_percentage">
        <label>year </label>
        <input type="text" name="year">

        <select name="country">
            @foreach($countries as $country)
                <option value={{$country->id}}>{{$country->name}}</option>
            @endforeach
        </select>

        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Create</button>
    </div>
</form>
