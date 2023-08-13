    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="text-align: center; color: green;">
                Добро пожаловать на сайт с огромным количеством интересных тестов!
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <button id="openButton" class="openButton">Категории:</button>
                        <div id="popupContainer" class="popup">
                            <div class="popup-content" id="popupContent">
                                <span class="close" id="closeButton">&times;</span>
                                @foreach($categories as $category)
                                    <p><a href="{{ route('category', $category) }}">{{ $category->name }}</a></p>
                                @endforeach
                            </div>
                        </div>
                        <!-- -->
                        <div class="product-catalog">
                            @forelse ($tests as $test)
                                <a href="/testing/{{ $test->id }}" class="product">
                                    <div class="CatalogItemName">{{ $test->name }}</div>
                                    <div class="CatalogItemImgContainer"><img src="/public/storage/{{ $test->img }}"
                                                                              alt="{{ $test->name }}"
                                                                              class="mb-2 CatalogItemImg"></div>
                                </a>
                            @empty
                                <p>Тестов в этой категории пока нет</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
