<table class="table">
    <thead>
    <tr>
        <th>Product name</th>
        <th>Quantity in stock</th>
        <th>Price per item</th>
        <th>Datetime submitted</th>
        <th>Total value number</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $value)
        <tr>
            <td class="text-center">{!! $value['name'] !!}</td>
            <td class="text-center">{!! $value['quantity'] !!}</td>
            <td class="text-center">{!! $value['price'] !!}</td>
            <td class="text-center">{!! $value['time'] !!}</td>
            <td class="text-center">{!! $value['total'] !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>