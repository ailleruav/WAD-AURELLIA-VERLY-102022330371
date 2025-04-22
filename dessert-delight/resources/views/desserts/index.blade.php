<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kue Dessert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 font-sans text-gray-800">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center text-pink-600">🍰 Daftar Kue Dessert</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-pink-100 text-pink-700">
                    <tr>
                        <th class="text-left py-3 px-5">Nama</th>
                        <th class="text-left py-3 px-5">Deskripsi</th>
                        <th class="text-left py-3 px-5">Harga</th>
                        <th class="text-left py-3 px-5">Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($desserts as $dessert)
                        <tr class="border-b hover:bg-pink-50 transition duration-200">
                            <td class="py-3 px-5 font-semibold">{{ $dessert->name }}</td>
                            <td class="py-3 px-5">{{ $dessert->description }}</td>
                            <td class="py-3 px-5">Rp{{ number_format($dessert->price, 0, ',', '.') }}</td>
                            <td class="py-3 px-5">
                                @if($dessert->image)
                                    <img src="{{ asset('images/' . $dessert->image) }}" alt="{{ $dessert->name }}" class="w-24 h-24 object-cover rounded-md">
                                @else
                                    <span class="text-gray-400 italic">Tidak ada gambar</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4 text-gray-500">Tidak ada data dessert.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>