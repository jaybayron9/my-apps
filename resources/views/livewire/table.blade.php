<div class="container mx-auto mt-10 bg-gray-100 p-5 rounded-md">  
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th>
                    <input type="checkbox" wire:change="checkboxChanged" wire:model="isChecked" value="check">
                </th>
                <th>id</th>
                <th>name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="checkbox" name="checkbox" {{ $isChecked ? 'checked' : '' }}>
                </td>
                <td>asdf</td>
                <td>asdf</td>
                <td>asdf</td>
            </tr>
        </tbody>
    </table>
</div>