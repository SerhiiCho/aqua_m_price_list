<div class="row">
    <div class="col s12">
        <ul class="collapsible">
            @forelse ($price_list->equipment as $category => $items)
                <li>
                    <div class="collapsible-header">
                        <b class="teal-text darken-4" style="margin-right:5px">{{ count($items) }}</b>
                        {{ $category }}
                    </div>

                    <div class="collapsible-body">
                        <table class="striped responsive-table">
                            <thead>
                            <tr>
                                <th>Артикль</th>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Производитель</th>
                                <th>Цена</th>
                                <th>Изображение</th>
                            </tr>
                            </thead>
                            <tbody class="striped">
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item['article'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['description'] }}</td>
                                        <td>{{ $item['producer'] }}</td>
                                        <td>{{ $item['price'] }}</td>
                                        <td>
                                            <div data-width="120"
                                                 class="async-load spinner"
                                                 data-async-load="{{ $item['image'] ?? '' }}"
                                                 data-class="z-depth-1"
                                            ></div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </li>
            @empty
                <div class="collapsible-header"><p class="flow-text">Пусто</p></div>
            @endforelse
        </ul>
    </div>
</div>