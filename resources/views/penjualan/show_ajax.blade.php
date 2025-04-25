<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($penjualan) && count($penjualan) > 0)
                @foreach($penjualan as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                        <td>{{ number_format($item->jumlah * $item->harga_satuan, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" class="text-center">Data penjualan tidak tersedia.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>