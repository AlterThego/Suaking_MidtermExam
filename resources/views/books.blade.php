<!-- <div>
    @foreach ($books as $book)
    <li>
    <strong>Title:</strong> 
    {{ $book['title'] }}
    {{ $book['author'] }}
    {{ $book['year'] }}
    </li>
    @endforeach
</div> -->

<script src="https://cdn.tailwindcss.com"></script>


<div class="flex h-lvh w-full items-center justify-center">


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                   Author
                </th>
                <th scope="col" class="px-6 py-3">
                    Year
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $book['title'] }}
                </th>
                <td class="px-6 py-4">
                {{ $book['author'] }}
                </td>
                <td class="px-6 py-4">
                {{ $book['year'] }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
