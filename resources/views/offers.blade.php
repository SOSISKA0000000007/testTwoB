<style>
    form{
        display: flex;
    }
    .xz{
        border: solid 3px;
        margin: 10px 0 0 0;
    }
</style>
<form action="{{ route('offers.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="surname" placeholder="Фамилия" required>
    <input type="text" name="department" placeholder="Отдел" required>
    <textarea name="text" placeholder="Текст предложения" required></textarea>
    <button type="submit">Отправить предложение</button>
</form>

@foreach ($offers as $offer)
    <div class="xz">
        <p><strong>Отдел:</strong> {{ $offer->department }}</p>
        <p><strong>Предложение:</strong> {{ $offer->text }}</p>
        <p><strong>Статус:</strong> {{ $offer->status }}</p>
    </div>
@endforeach
