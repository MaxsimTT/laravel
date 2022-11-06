<x-my-page-blade>
	<x-slot name="title">Clients layout</x-slot>
	<x-slot name="cart">
		@isset($cart)
			<p>В вашей корзине {{ $cartsession->amount_products }} тов. на общую сумму {{ $cartsession->total_price }} @mycurrency(rub)</p>
		@endisset
	</x-slot>
	<x-slot name="left">General menu</x-slot>
	<x-slot name="clients">
	@isset($clients)
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>e-mail</th>
            </tr>
        @foreach ($clients as $client)
            <tr>
                @foreach ($client as $data)
                    <td>{{ $data }}</td>
                @endforeach
            </tr>
        @endforeach
        </table>
    @endisset
	</x-slot>
</x-my-page-blade>