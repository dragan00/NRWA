<!-- Form for creating a new region -->
<form action="{{ route('regions.store') }}" method="POST" class="cool-form">
    @csrf
    <label for="region_name">Region Name:</label>
    <input type="text" name="region_name" id="region_name">
    <button type="submit">Create</button>
</form>
