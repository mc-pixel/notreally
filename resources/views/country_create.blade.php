<form action="{{route('country_store')}}" method="post" class="mb-16 flex">
    @csrf
    @honeypot
    <div>
        <label>name </label>
        <input type="text" id="name" title="name" name="name">
        <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 rounded hover:bg-blue-600 text-white float-right">Create</button>
    </div>
</form>
