<!-- Form for editing a region -->
<form action="{{ route('regions.update', $region->region_id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="region_name">Region Name:</label>
    <input type="text" name="region_name" id="region_name" value="{{ $region->region_name }}">
    <button type="submit">Update</button>
</form>
